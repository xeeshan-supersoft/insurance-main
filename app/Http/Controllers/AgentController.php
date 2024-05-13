<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Agent;
use App\Models\Policy;
use App\Models\PolicyType;
use App\Models\AgencyInfos;
use App\Models\PolicyLimit;
use App\Models\DriverDetail;
use App\Models\Certificate;
use App\Models\CertificatePolicy;
use App\Models\CertificatePolicyLimit;

use App\Services\CertificateService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
//use misterspelik\LaravelPdf\Facades\Pdf;

class AgentController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:agent');
  }

  public function dash()
  {
    $users = User::all();

    return view('dash', compact('users'));
  }

  public function formlist()
  {
    $driver = User::with('agents')->find(Auth::user()->id);
    return view('agent.formlist', compact('driver'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function choosePolicyTypes($id)
  {
    $policytypes = PolicyType::all();
    Session::put('driver_id', $id);
    return view('fromdrop', compact('policytypes'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Request $request)
  {
    $policytypes = PolicyType::with('policies', 'policyLimits')
      ->whereIn('id', $request->policyGroup)
      ->get();

      $allpolicytypes = PolicyType::whereNotIn('id', $request->policyGroup)->get();
      $r=0;

    $driver_id = Session::get('driver_id');

    $driver = User::with('truckers')->find($driver_id);
    $agent = User::with('agencies')->find(Auth::user()->id);

    return view('agent.form3', compact('policytypes', 'driver', 'agent', 'r', 'allpolicytypes'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request, CertificateService $certificateService)
  {
    $resp = $certificateService->store($request->all());
    return redirect()->route('formlist');
  }

  /**
   * Display the specified resource.
   */
  public function MainCertificate(string $driverId)
  {
    $certificate = Certificate::where('client_user_id', $driverId)->get() ?? '';
    return view('agent.certificate_main', compact('certificate', 'driverId'));
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    return view('agent.certificate_list', compact('certificate', 'certPolicy', 'driver', 'agent'));
  }

  public function showCertificate(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $certPolimit = CertificatePolicyLimit::with('certificate', 'policyType', 'policyLimit')
      ->where('certificate_id', $certificate->id)
      ->get();

    $policytypes = PolicyType::with('policies', 'policyLimits')
      ->whereIn('id', $certPolicy->map->only(['policy_type_id']))
      ->get();

      $allpolicytypes = PolicyType::with('policies', 'policyLimits')
      ->whereNotIn('id', $certPolicy->map->only(['policy_type_id']))
      ->get();

    $r = 1;

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    $data = [
      'certificate' => $certificate,
      'policytypes' => $policytypes,
      'certPolicy' => $certPolicy,
      'certPolimit' => $certPolimit,
      'driver' => $driver,
      'agent' => $agent,
    ];

    return view(
      'agent.form3',
      compact('certificate', 'policytypes', 'certPolicy', 'certPolimit', 'driver', 'agent', 'r', 'allpolicytypes')
    );
  }

  public function showPDF(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $certPolimit = CertificatePolicyLimit::with('certificate', 'policyType', 'policyLimit')
      ->where('certificate_id', $certificate->id)
      ->get();

      $customOrder = [
        'General Liability',
        'Auto Liability',
        'Cargo',
        'RAILER INTERCHANGEPHYSICAL DAMAG',
        'UMBRELLA LIA',
        'WORKERS COMPENSATION'
    ];

    $policyExistTypes = PolicyType::with('policies', 'policyLimits')
    ->whereIn('id', $certPolicy->map->only(['policy_type_id']))
    ->orderByRaw('FIELD(type_name, "'.implode('","', $customOrder).'")')
    ->get();

    $policyNotExistTypes = PolicyType::with('policies', 'policyLimits')
    ->whereNotIn('id', $certPolicy->map->only(['policy_type_id']))
    ->orderByRaw('FIELD(type_name, "'.implode('","', $customOrder).'")')
    ->get();

    $policytypes = $policyExistTypes->merge($policyNotExistTypes);

    $policytypes = $policytypes->sortBy(function ($el) use ($customOrder) {
        // Get the index of the current fruit in the custom order array
        $index = array_search($el->type_name, $customOrder);
        // If the fruit is not found in the custom order array, assign a high index
        return $index === false ? count($customOrder) : $index;
    });

    $r = 1;

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    $data = compact('certificate', 'policytypes', 'certPolicy', 'certPolimit', 'driver', 'agent', 'r');

    $view = 'agent.form_pdf3';
    $cert = 'certificate.pdf';

    $pdf = PDF::loadView($view, $data);
    //return $pdf->stream('pdf.pdf');

    return view($view , $data);
  }

  public function showPDF2(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $certPolimit = CertificatePolicyLimit::with('certificate', 'policyType', 'policyLimit')
      ->where('certificate_id', $certificate->id)
      ->get();

      $customOrder = [
        'General Liability',
        'Auto Liability',
        'Cargo',
        'RAILER INTERCHANGEPHYSICAL DAMAG',
        'UMBRELLA LIA',
        'WORKERS COMPENSATION'
    ];

    $policyExistTypes = PolicyType::with('policies', 'policyLimits')
    ->whereIn('id', $certPolicy->map->only(['policy_type_id']))
    ->orderByRaw('FIELD(type_name, "'.implode('","', $customOrder).'")')
    ->get();

    $policyNotExistTypes = PolicyType::with('policies', 'policyLimits')
    ->whereNotIn('id', $certPolicy->map->only(['policy_type_id']))
    ->orderByRaw('FIELD(type_name, "'.implode('","', $customOrder).'")')
    ->get();

    $policytypes = $policyExistTypes->merge($policyNotExistTypes);

    $policytypes = $policytypes->sortBy(function ($el) use ($customOrder) {
        // Get the index of the current fruit in the custom order array
        $index = array_search($el->type_name, $customOrder);
        // If the fruit is not found in the custom order array, assign a high index
        return $index === false ? count($customOrder) : $index;
    });

    $r = 1;

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    $data = compact('certificate', 'policytypes', 'certPolicy', 'certPolimit', 'driver', 'agent', 'r');

    $view = 'agent.form_pdf4';
    $cert = 'certificate.pdf';

    $pdf = PDF::loadView($view, $data)->setPaper('a4', 'portrait');
    return $pdf->stream('pdf.pdf');

    //return view($view , $data);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function editCertificate(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $certPolimit = CertificatePolicyLimit::with('certificate', 'policyType', 'policyLimit')
      ->where('certificate_id', $certificate->id)
      ->get();

    $policytypes = PolicyType::with('policies', 'policyLimits')
      ->whereIn('id', $certPolicy->map->only(['policy_type_id']))
      ->get();

      $allpolicytypes = PolicyType::with('policies', 'policyLimits')
      ->whereNotIn('id', $certPolicy->map->only(['policy_type_id']))
      ->get();

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    $data = [
      'certificate' => $certificate,
      'policytypes' => $policytypes,
      'certPolicy' => $certPolicy,
      'certPolimit' => $certPolimit,
      'driver' => $driver,
      'agent' => $agent,
    ];

    $options = ([
      'dpi' => 100,
      'defaultFont' => 'sans-serif',
      'fontHeightRatio' => 1,
      'isPhpEnabled' => true,
    ]);
$r=0;
    // $pdf = Pdf::loadView('agent.form_cert', $data);
    // $pdf->setOptions($options);
    // $pdf->setPaper('L', 'landscape');
    // return $pdf->download('cert_pdf.pdf');

    return view(
      'agent.form_edited',
      compact('certificate', 'policytypes', 'certPolicy', 'certPolimit', 'driver', 'agent', 'r', 'allpolicytypes')
    );


  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request , CertificateService $certificateService)
  {
     $resp = $certificateService->update($request->all());
     return redirect()->route('formlist');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
