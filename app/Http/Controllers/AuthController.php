<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShipperInfos;
use App\Models\DriverDetail;
use App\Models\AgencyInfos;
use App\Models\Subscription_plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $fields = $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    // $user = User::where('username', $fields['username'])->first();

    // if (!$user || !Hash::check($fields['password'], $user->password)) {
    //   return response([
    //     'message' => 'Wrong credentials',
    //   ]);
    // } else {
    //   session(['user' => $user]);
    //   return redirect('/form');
    //   //$tableDataFromSession = session('user');
    //   //echo $tableDataFromSession->role_id;
    // }
    // return 'ok';
    // // return redirect('/form');

    $user = User::where('email', $fields['email'])->first();

    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) {
      return response([
        'message' => 'Wrong credentials',
      ]);
    }
    Session::put('userRole', $user->role);

    $request->session()->regenerate();
    if ($user->role == 'admin') {
      return redirect('/dash_adm');
    }
    if ($user->role == 'agent') {
      return redirect('/dash');
    }
    if ($user->role == 'user') {
      return redirect('/portal');
    }

    return redirect('/dash');
  }

  public function register(Request $request)
  {
    $validatedDataa = Validator::make($request->all(), [
      'username' => 'required',
      'password1' => 'required',
      'email' => 'required|email|unique:users',
      'role' => 'required',
      'Addss' => 'sometimes',
      'Addss2' => 'sometimes',
      'fullname' => 'sometimes',
      'country' => 'sometimes',
      'city' => 'sometimes',
      'state' => 'sometimes',
      'zip' => 'sometimes',
      'phone' => 'sometimes',
      'altemail' => 'sometimes',
      'license_number' => 'sometimes',
      'license_expiry_date' => 'sometimes',
      'license_type' => 'sometimes',
      'years_of_experience' => 'sometimes',
      'vehicle_registration_number' => 'sometimes',
      'vehicle_make' => 'sometimes',
      'vehicle_model' => 'sometimes',
      'vehicle_year' => 'sometimes:',
      'vehicle_capacity' => 'sometimes',
      'vehicle_status' => 'sometimes',
      'mc_number' => 'sometimes',
      'subs_id' => 'sometimes',
      
    ]);
    // var_dump( $validatedDataa);


    if($validatedDataa->fails()){
      // return Redirect::back()
      //   ->withErrors($validatedDataa)
      //   ->withInput();
      return 'fail';
    }

    $validatedData = $validatedDataa->validated();

    $user = User::create([
      'name' => $validatedData['username'],
      'email' => $validatedData['email'],
      'password' => Hash::make($validatedData['password1']),
      'role' => $validatedData['role'], // Assuming default role ID for 'user'
    ]);
    $lastInsertedId = $user->id;

$subb = Subscription::create([
  'user_id' => $lastInsertedId,
  'plan_id' => $validatedData['subs_id'],
  'status'=> 'Active',
]);


    // dd( $validatedDataa->getData()['Addss']);

  
    if ($validatedData['role'] == 'agent') {
      $user = AgencyInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'agency_address' => $validatedData['Addss'],
        'agency_address2' => $validatedData['Addss2'],
        'agency_name' => $validatedData['fullname'],      
        'agency_city' => $validatedData['city'],
        'agency_state' => $validatedData['state'],
        'agency_zip' => $validatedData['zip'],
        'agency_cellphone' => $validatedData['phone'],
        'agency_extra_email' => $validatedData['altemail'],
      ]);
      return response()->json([
        'message' => 'agent created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }
    if ($validatedData['role'] == 'shipper') {
      $user = ShipperInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'shipper_address' => $validatedData['Addss'],
        'shipper_address2' => $validatedData['Addss2'],
        'shipper_name' => $validatedData['fullname'],
        'shipper_city' => $validatedData['city'],
        'shipper_state' => $validatedData['state'],
        'shipper_zip' => $validatedData['zip'],
        'shipper_cellphone' => $validatedData['phone'],
        'shipper_extra_email' => $validatedData['altemail'],
      ]);
      return response()->json([
        'message' => 'shipper created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }
    if ($validatedData['role'] == 'truck_driver') {
       $user = DriverDetail::create([
        'user_id' => $lastInsertedId,        
        'address' => $validatedData['Addss'],
        'address2' => $validatedData['Addss2'],
        'name' => $validatedData['fullname'],
        'city' => $validatedData['city'],
        'state' => $validatedData['state'],
        'zip' => $validatedData['zip'],
        'contact_info' => $validatedData['phone'],
        'extra_email' => $validatedData['altemail'],
        'license_number' => $validatedData['license_number'],
        'license_expiry_date'=> $validatedData['license_expiry_date'],
        'license_type' => $validatedData['license_type'],
        'years_of_experience'=> $validatedData['years_of_experience'],
        'vehicle_registration_number'=> $validatedData['vehicle_registration_number'],
        'vehicle_make'=> $validatedData['vehicle_make'],
        'vehicle_model'=> $validatedData['vehicle_model'],
        'vehicle_year'=> $validatedData['vehicle_year'],
        'vehicle_capacity'=> $validatedData['vehicle_capacity'],
        'vehicle_status'=> $validatedData['vehicle_status'],
        'mc_number'=> $validatedData['mc_number'],
      ]);
      return response()->json([
        'message' => 'truker created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }

    if ($validatedData['role'] == 'freight_driver') {
      $user = DriverDetail::create([
        'user_id' => $lastInsertedId,
        
        'address' => $validatedData['Addss'],
        'address2' => $validatedData['Addss2'],
        'name' => $validatedData['fullname'],
        'city' => $validatedData['city'],
        'state' => $validatedData['state'],
        'zip' => $validatedData['zip'],
        'cellphone' => $validatedData['phone'],
        'extra_email' => $validatedData['altemail'],
      ]);
      return response()->json([
        'message' => 'freight created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }
    // // return response()->json([
    // //   'message' => 'admin created successfully!',
    // //   'user_id' => $lastInsertedId,
    // // ]);

    // // Your existing code...

    // // return response()->json(['message' => 'Success']);
    // // return response()->json(['message' => 'Success']);
    // // Redirect to intended or successful registration page

      return 'notthing';
  }

  public function logout()
  {
    Session::flush();

    // Delete all cookies
    $cookies = Cookie::get();
    foreach ($cookies as $name => $value) {
      Cookie::queue(Cookie::forget($name));
    }
    return redirect('/logg');
  }
  
  public function land()
  {
    $data=Subscription_plan::All();

    return view('index' ,compact('data'));
  }
  public function registerfrom (Request $request)
  {
   $subs_id =$request->sub_id;
    return view('auth.regist' ,compact('subs_id'));
  }


}
