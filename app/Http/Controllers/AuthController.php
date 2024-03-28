<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShipperInfos;
use App\Models\TruckerInfos;
use App\Models\FreightInfos;
use App\Models\AgencyInfos;
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
      'name' => 'required',
      'password1' => 'required',
      'email' => 'required|email|unique:users',
      'role' => 'required',
      // 'Addss' => 'required',
      // 'Addss2' => 'required',
      // 'fullname' => 'required',
      // 'country' => 'required',
      // 'city' => 'required',
      // 'state' => 'required',
      // 'zip' => 'required',
      // 'phone' => 'required',
      // 'altemail' => 'required',
    ]);

    if ($validatedDataa->fails()) {
      return Redirect::back()
        ->withErrors($validatedDataa)
        ->withInput();
      // return 'back';
    }
    $validatedData = $validatedDataa->validated();

    $user = User::create([
      'username' => $validatedData['username'],
      'email' => $validatedData['email'],
      'password' => Hash::make($validatedData['password1']),
      'role' => $validatedData['role'], // Assuming default role ID for 'user'
    ]);
    $lastInsertedId = $user->id;
    if ($validatedData['role'] == 'agent') {
      $user = AgencyInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'agency_address' => $validatedData['Addss'],
        'agency_address2' => $validatedData['Addss2'],
        'agency_name' => $validatedData['fullname'],
        'agency_country' => $validatedData['country'],
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
        'shipper_country' => $validatedData['country'],
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
      echo $user = TruckerInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'trucker_address' => $validatedData['Addss'],
        'trucker_address2' => $validatedData['Addss2'],
        'trucker_name' => $validatedData['fullname'],
        'trucker_country' => $validatedData['country'],
        'trucker_city' => $validatedData['city'],
        'trucker_state' => $validatedData['state'],
        'trucker_zip' => $validatedData['zip'],
        'trucker_cellphone' => $validatedData['phone'],
        'trucker_extra_email' => $validatedData['altemail'],
      ]);
      return response()->json([
        'message' => 'truker created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }

    if ($validatedData['role'] == 'freight_driver') {
      $user = FreightInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'freight_address' => $validatedData['Addss'],
        'freight_address2' => $validatedData['Addss2'],
        'freight_name' => $validatedData['fullname'],
        'freight_country' => $validatedData['country'],
        'freight_city' => $validatedData['city'],
        'freight_state' => $validatedData['state'],
        'freight_zip' => $validatedData['zip'],
        'freight_cellphone' => $validatedData['phone'],
        'freight_extra_email' => $validatedData['altemail'],
      ]);
      return response()->json([
        'message' => 'freight created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }
    return response()->json([
      'message' => 'admin created successfully!',
      'user_id' => $lastInsertedId,
    ]);

    // // Your existing code...

    // return response()->json(['message' => 'Success']);
    //return response()->json(['message' => 'Success']);
    // Redirect to intended or successful registration page

    return $request;
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
    return view('index');
  }
}
