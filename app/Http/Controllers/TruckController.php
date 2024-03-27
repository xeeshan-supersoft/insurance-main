<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Insurance_data;
use App\Models\Insurance_detail;
class TruckController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:truker');
  }

  public function trucker()
  {
    return view('truck.trucker');
  }

  public function truckers()
  {
    return view('userss');
  }

  public function truckerss()
  {
    return view('usersss');
  }
  public function adash()
  {
    return view('truck.dash');
  }
  public function truckersss()
  {
    $insurance_data = Insurance_data::Join(
      'insurance_details',
      'insurance_datas.id',
      '=',
      'insurance_details.id_isu_data_fk'
    )->get();
    return view('truck.policy-list', compact('insurance_data'));
  }
  public function pdf(request $request, $id)
  {
    $insuranceData = Insurance_data::where('id', $id)->first();
    $Insurance_detail = Insurance_detail::where('id_isu_data_fk', $id)->first();
    return view('truck.pdf', compact('insuranceData', 'Insurance_detail'));
  }
}
