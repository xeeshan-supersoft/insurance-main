<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Upload;
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
