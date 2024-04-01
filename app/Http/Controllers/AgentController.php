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

    $driver_id = Session::get('driver_id');

    $driver = User::with('truckers')->find($driver_id);
    $agent = User::with('agencies')->find(Auth::user()->id);

    return view('agent.form2', compact('policytypes', 'driver', 'agent'));
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
  public function show(string $id)
  {
    $certificate = Certificate::with('policies', 'policyLimits')
      ->where('client_user_id', $id)
      ->first();

    $certPolicy = CertificatePolicy::with('policyType', 'policy')
      ->where('certificate_id', $certificate->id)
      ->get();

    $driver = User::with('truckers')->find($certificate->client_user_id);
    $agent = User::with('agencies')->find($certificate->producer_user_id);

    return view('agent.certificate_list', compact('certificate', 'certPolicy', 'driver', 'agent'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
