<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Insurance_data;
use App\Models\Insurance_detail;
use App\Models\Notice;

class ShipperController extends Controller
{public function __construct()
    {
      $this->middleware('checkRole:shipper');
    }
  
    // public function dash()
    // {
    //   return view('shipper.dash');
    // }
  public function dash()
  {
    $insurance_data = Insurance_data::Join(
      'insurance_details',
      'insurance_datas.id',
      '=',
      'insurance_details.id_isu_data_fk'
    )->get();
    return view('shipper.policy-list', compact('insurance_data'));
  }
  public function pdf(request $request, $id)
  {
    $insuranceData = Insurance_data::where('id', $id)->first();
    $Insurance_detail = Insurance_detail::where('id_isu_data_fk', $id)->first();
    return view('shipper.pdf', compact('insuranceData', 'Insurance_detail'));
  }
}
