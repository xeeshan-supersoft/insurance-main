<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShipperInfos;
use App\Models\DriverDetail;
use App\Models\AgencyInfos;
use App\Models\Subscription_plan;
use App\Models\Certificate;
use App\Models\CertificatePolicy;
use App\Models\PolicyType;
use Illuminate\Support\Facades\Auth;
use App\Models\Upload;
use Illuminate\Support\Facades\Session;
class TruckController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:truker');
  }

  public function trucker ( $id )
  {
    $userId = Auth::user()->id;
    $yourCertificateId  = Certificate::select('id')->where('client_user_id', $userId)->first();
    $certificatePolicies = CertificatePolicy::where('certificate_id', $yourCertificateId->id)->get();
    $policies = PolicyType::get();
    $ship= ShipperInfos::all();

    return view('truck.dash' , compact('ship', 'certificatePolicies', 'policies'));
  }

  public function shipper()
  {
    $ship= ShipperInfos::all();

    return view('truck.list-shipper' , compact('ship'));
  }

  public function addReg()
  {
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

    if($validatedDataa->fails()){
      return Redirect::back()
        ->withErrors($validatedDataa)
        ->withInput();
      // return 'fail';
    }

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
    'status'=> 'Active',
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

      return response()->json([
        'message' => 'agent created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }
    if ($validatedData['role'] == 'shipper') {
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
    'status'=> 'Active',
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
      return response()->json([
        'message' => 'shipper created successfully!',
        'user_id' => $lastInsertedId,
      ]);
    }


    return "nothing";
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
    $users= Upload::where("user_id",$id)->get();
    // return $users;
    return view('truck.dash', compact("users") );
  }


  public function upload(Request $request)

  {

// Validate the uploaded file if necessary
$request->validate([
  'file' => 'required|file|max:10240', // Example: Maximum file size of 10MB
]);

// Store the uploaded file
$path = $request->file('file')->store('uploads');

// You can also store file information in the database here if needed
$upload = new Upload();
        $upload->user_id = $request->user_id; // Assuming you have authentication and each upload is associated with a user
        $upload->path = $path;
        $upload->save();

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
