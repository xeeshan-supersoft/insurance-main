<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
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
  public function choosePolicyTypes()
  {
    $policytypes = PolicyType::all();
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

    return view('agent.form2', compact('policytypes'));
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
