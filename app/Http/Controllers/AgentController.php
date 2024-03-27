<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Agent;
use App\Models\Policy;
use App\Models\PolicyType;
use App\Models\PolicyLimit;
use Illuminate\Http\Request;
use App\Services\CertificateService;

class AgentController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:agent');
  }

  public function dash()
  {
    return view('agent.dash');
  }
  // public function formlist()
  // {

  //   $insurance_data = Insurance_data::Join(
  //     'insurance_details',
  //     'insurance_datas.id',
  //     '=',
  //     'insurance_details.id_isu_data_fk'
  //   )->get();
  //   return view('agent.formlist', compact('insurance_data'));
  // }
  // public function pdf(request $request, $id)
  // {
  //   $insuranceData = Insurance_data::where('id', $id)->first();
  //   $Insurance_detail = Insurance_detail::where('id_isu_data_fk', $id)->first();
  //   return view('agent.pdf', compact('insuranceData', 'Insurance_detail'));
  // }

    /**
     * Show the form for creating a new resource.
     */
    public function choosePolicyTypes()
    {
        $policytypes = PolicyType::all();
        return view('certificates.policyTypes', compact('policytypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $policytypes = PolicyType::with('policies','policyLimits')
                        ->whereIn('id', $request->policyGroup)->get();

        return view('agent.formlist', compact('policytypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CertificateService $certificateService)
    {
        $certificateService->store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
