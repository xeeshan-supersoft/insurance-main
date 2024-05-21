<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notice;
use App\Models\ShipperInfos;
use App\Models\DriverDetail;
use App\Models\AgencyInfos;
use App\Models\Subscription_plan;
use App\Models\Certificate;
use App\Models\Subscription;
use App\Models\CertificatePolicy;
use App\Models\PolicyType;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
class TruckController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:truker');
  }

  public function trucker()
  {
    $userId = Auth::user()->id;
    $certificatePolicies = null;
    $policies = null;
    $yourCertificateId = Certificate::select('id')
      ->where('client_user_id', $userId)
      ->first();
    if (isset($yourCertificateId)) {
      $certificatePolicies = CertificatePolicy::where('certificate_id', $yourCertificateId->id)->get();
    }
    $policies = PolicyType::get();
    $ship = ShipperInfos::all();

    return view('truck.dash', compact('ship', 'certificatePolicies', 'policies'));
  }

  public function shipper()
  {
    $ship = ShipperInfos::all();

    return view('truck.list-shipper', compact('ship'));
  }

  public function addReg(Request $request)
  {
    $userId = Auth::user()->id;
    $validatedDataa = Validator::make($request->all(), [
      'username' => 'required',
      'password1' => 'required',
      'email' => 'required|email|unique:users',
      'role' => 'required',
      'Addss' => 'sometimes',
      'Addss2' => 'sometimes',
      'fullname' => 'sometimes',
      'city' => 'sometimes',
      'state' => 'sometimes',
      'zip' => 'sometimes',
      'phone' => 'sometimes',
      'altemail' => 'sometimes',
      'role' => 'sometimes',
    ]);
    // var_dump( $validatedDataa);

    if ($validatedDataa->fails()) {
      return Redirect::back()
        ->withErrors($validatedDataa)
        ->withInput();
      // return 'fail';
    }
    $currentDate = Carbon::now();
    $endDate = $currentDate->copy()->addDays(30);
    $validatedData = $validatedDataa->validated();

    if ($validatedData['role'] == 'agent') {
      $user = User::create([
        'name' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password1']),
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
      $user = AgencyInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'address' => $validatedData['Addss'],
        'address2' => $validatedData['Addss2'],
        'name' => $validatedData['fullname'],
        'city' => $validatedData['city'],
        'state' => $validatedData['state'],
        'zip' => $validatedData['zip'],
        'cellphone' => $validatedData['phone'],
        'extra_email' => $validatedData['altemail'],
      ]);
      $user = Notice::create([
        'to' => $lastInsertedId,
        'from' => $userId,
        'name' => "agent added by".$userId,
          ]);
          return Redirect::back()
          ->with('success' , 'agent created successfully!');    
    }
    if ($validatedData['role'] == 'shipper') {
      $user = User::create([
        'name' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password1']),
        'role' => $validatedData['role'], // Assuming default role ID for 'user'
      ]);
      $lastInsertedId = $user->id;
      $user = Notice::create([
        'to' => $lastInsertedId,
        'from' => $userId,
        'name' => "shipper added by".$userId,
          ]);
      $subb = Subscription::create([
        'user_id' => $lastInsertedId,
        'plan_id' => '1',
        'start_date' =>  $currentDate,
        'end_date' => $endDate,
        'status' => 'Active',
      ]);
      $user = ShipperInfos::create([
        'user_id' => $lastInsertedId,
        'status' => '1',
        'address' => $validatedData['Addss'],
        'address2' => $validatedData['Addss2'],
        'name' => $validatedData['fullname'],
        'city' => $validatedData['city'],
        'state' => $validatedData['state'],
        'zip' => $validatedData['zip'],
        'cellphone' => $validatedData['phone'],
        'extra_email' => $validatedData['altemail'],
      ]);
      return Redirect::back()
      ->with('success' ,'shipper created successfully!');       
    }

    return 'nothing';
  }
  

  public function truckprofiles()
  {
    $userId = Auth::user()->id;
 
    $driverdetail = DriverDetail::where('user_id', $userId)->get();

    return view('truck.profile' , compact('driverdetail'));
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
    $user = request()->user();
    $id = $user->id;
    $users = Upload::where('user_id', $id)->get();
    // return $users;
    return view('truck.dash', compact('users'));
  }

  public function upload(Request $request)
  {
    // Validate the uploaded file if necessary
    $request->validate([
      'file' => 'required|file|max:10240', // Example: Maximum file size of 10MB
    ]);

    // Store the uploaded file
    $path = $request->file('file')->store('uploads');
    $userId = Auth::user()->id;
    // You can also store file information in the database here if needed
    $upload = new Upload();
    $upload->user_id = $request->user_id; // Assuming you have authentication and each upload is associated with a user
    $upload->path = $path;
    $upload->save();
    $lastInsertedId = $upload->id;
    $user = Notice::create([
      'to' => $request->user_id,
      'from' => $userId,
      'upload_id' => $lastInsertedId,
      'name' => "truck_driver uploaded files by".$userId,
        ]);

    //  return "successfully";
    return back()->with('success', 'File uploaded successfully.');
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
