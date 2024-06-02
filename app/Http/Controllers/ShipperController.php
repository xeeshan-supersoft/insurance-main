<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Insurance_data;
use App\Models\Insurance_detail;
use App\Models\DriverDetail;
use App\Models\Subscription;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
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

  public function dash2()
  {
    return view('shipper.dash');
  }



  public function addReg(Request $request)
  {
    $userId = Auth::user()->id;
    $validatedDataa = Validator::make($request->all(), [
      'username' => 'required',
      'password1' => 'sometimes',
      'email' => 'required|email|unique:users',
      // 'Addss' => 'sometimes',
      // 'Addss2' => 'sometimes',
      // 'fullname' => 'sometimes',
      // 'city' => 'sometimes',
      // 'state' => 'sometimes',
      // 'zip' => 'sometimes',
      'phone' => 'sometimes',
      // 'altemail' => 'sometimes',
      'role' => 'sometimes',
      // 'license_number' => 'sometimes',
      // 'license_expiry_date' => 'sometimes',
      // 'license_type' => 'sometimes',
      // 'years_of_experience' => 'sometimes',
      // 'vehicle_registration_number' => 'sometimes',
      // 'vehicle_make' => 'sometimes',
      // 'vehicle_model' => 'sometimes',
      // 'vehicle_year' => 'sometimes:',
      // 'vehicle_capacity' => 'sometimes',
      // 'vehicle_status' => 'sometimes',
      // 'mc_number' => 'sometimes',
      'subs_id' => 'sometimes',
    ]);
    // var_dump( $validatedDataa);

    if ($validatedDataa->fails()) {
      return Redirect::back()
        ->withErrors($validatedDataa)
        ->withInput();
    }
    $currentDate = Carbon::now();
    $endDate = $currentDate->copy()->addDays(30);
    $validatedData = $validatedDataa->validated();

    if ($validatedData['role'] == 'freight_driver') {
      $user = User::create([
        'name' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => Hash::make('123'),
        'role' => $validatedData['role'], // Assuming default role ID for 'user'
      ]);
      $lastInsertedId = $user->id;

      $subb = Subscription::create([
        'user_id' => $lastInsertedId,
        'plan_id' => '1',
        'start_date' =>  $currentDate,
        'end_date' => $endDate,
        'status' => 'Active',
      ]);
      // $user = DriverDetail::create([
      //   'user_id' => $lastInsertedId,
      //   'status' => '1',
      //   'address' => $validatedData['Addss'],
      //   'address2' => $validatedData['Addss2'],
      //   'name' => $validatedData['fullname'],
      //   'city' => $validatedData['city'],
      //   'state' => $validatedData['state'],
      //   'zip' => $validatedData['zip'],
      //   'cellphone' => $validatedData['phone'],
      //   'extra_email' => $validatedData['altemail'],
      // ]);
      $user = Notice::create([
        'to' => $lastInsertedId,
        'from' => $userId,
        'name' => "freight_driver added by".$userId,
          ]);
          return Redirect::back()
          ->with('success' , 'freight_driver created successfully!');
    }
    if ($validatedData['role'] == 'truck_driver') {
      $user = User::create([
        'name' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => Hash::make('123'),
        'role' => $validatedData['role'], // Assuming default role ID for 'user'
      ]);
      $lastInsertedId = $user->id;
      $user = Notice::create([
        'to' => $lastInsertedId,
        'from' => $userId,
        'name' => "truck_driver added by".$userId,
          ]);
      $subb = Subscription::create([
        'user_id' => $lastInsertedId,
        'plan_id' => '1',
        'start_date' =>  $currentDate,
        'end_date' => $endDate,
        'status' => 'Active',
      ]);

      //   $user = DriverDetail::create([
      //    'user_id' => $lastInsertedId,
      //    'address' => $validatedData['Addss'],
      //    'address2' => $validatedData['Addss2'],
      //    'name' => $validatedData['fullname'],
      //    'city' => $validatedData['city'],
      //    'state' => $validatedData['state'],
      //    'zip' => $validatedData['zip'],
      //    'cellphone' => $validatedData['phone'],
      //    'extra_email' => $validatedData['altemail'],
      //    'license_number' => $validatedData['license_number'],
      //    'license_expiry_date'=> $validatedData['license_expiry_date'],
      //    'license_type' => $validatedData['license_type'],
      //    'years_of_experience'=> $validatedData['years_of_experience'],
      //    'vehicle_registration_number'=> $validatedData['vehicle_registration_number'],
      //    'vehicle_make'=> $validatedData['vehicle_make'],
      //    'vehicle_model'=> $validatedData['vehicle_model'],
      //    'vehicle_year'=> $validatedData['vehicle_year'],
      //    'vehicle_capacity'=> $validatedData['vehicle_capacity'],
      //    'vehicle_status'=> $validatedData['vehicle_status'],
      //    'mc_number'=> $validatedData['mc_number'],
      //  ]);
      return Redirect::back()
      ->with('success' ,'truck_driver created successfully!');
    }

    return 'nothing';
  }


  public function truckprofiles()
  {
    $userId = Auth::user()->id;

    $driverdetail = DriverDetail::where('user_id', $userId)->get();

    return view('truck.profile' , compact('driverdetail'));
  }

}
