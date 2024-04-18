<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DriverDetail;
use App\Models\AgencyInfos;
use App\Models\Subscription_plan;
use App\Models\ShipperInfos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('checkRole:admin');
  }
 

  public function dashadmin()
  {
    $users = User::all();

    return view('admin_dash', compact('users'));
    // return view('dash');
  }
  
  public function edituser(int $id){
    $users = User::find($id);
    // return $users->role;

    if ($users->role == "agent") {

      $userss = AgencyInfos::where('user_id', $id)->first();
    }
    elseif ($users->role == "shipper") {
      $userss = ShipperInfos::where('user_id', $id)->first();
    }
elseif ($users->role == "truck_driver" || $users->role == "freight_driver" ) {
  $userss = DriverDetail::where('user_id', $id)->first();

}     return view('users', compact('users','userss'));

  }

  public function updateuser(Request $request)
  {
     //dd($request);
    if ($request->role == "agent") {
      $userss = AgencyInfos::find($request->table_id);
      $userss->name =  $request->fullname;
      $userss->cellphone =  $request->phone;
      $userss->Address =  $request->Address;
      $userss->address2 =  $request->Address2;
      $userss->extra_email =  $request->altemail;
      $userss->city =  $request->city;
      $userss->state =  $request->state;
      $userss->zip =  $request->zip;
      $userss->save();
      $users = User::find($request->user_id);
      $userss->name =  $request->username;
      $userss->password = Hash::make ($request->password);
      $userss->email =  $request->email;
      $users->save();
      $message = 'edite done agent';
      return back()->with($message);
    
    }
    elseif ($request->role == "shipper") {
      $userss = ShipperInfos::find($request->table_id);
      $userss->name =  $request->fullname;
      $userss->cellphone =  $request->phone;
      $userss->Address =  $request->Address;
      $userss->address2 =  $request->Address2;
      $userss->extra_email =  $request->altemail;
      $userss->city =  $request->city;
      $userss->state =  $request->state;
      $userss->zip =  $request->zip;
      $userss->save();
      $users = User::find($request->user_id);
      $userss->name =  $request->username;
      $userss->password = Hash::make ($request->password);
      $userss->email =  $request->email;
      $users->save();
      $message="edite done shipper";
      return back()->with( $message);

    }
elseif ($request->role == "truck_driver" || $request->role == "freight_driver" ) {
  $userss = DriverDetail::find($request->table_id);
  $userss->name =  $request->fullname;
  $userss->cellphone =  $request->phone;
  $userss->Address =  $request->Address;
  $userss->address2 =  $request->Address2;
  $userss->extra_email =  $request->altemail;
  $userss->city =  $request->city;
  $userss->state =  $request->state;
  $userss->zip =  $request->zip;
  $userss->save();
  $users = User::find($request->user_id);
  $userss->name =  $request->username;
  $userss->password = Hash::make ($request->password);
  $userss->email =  $request->email;
  $users->save();
  $message='edite done truck & freight driver ';
  return back()->with($message);

} 

$message='Not Done';
return back()->with($message);
  }

  public function pdf()
  {
    $insuranceData = Insurance_data::first();
    $Insurance_detail = Insurance_detail::first();

    return view('agent.pdf', compact('insuranceData', 'Insurance_detail'));
  }


  public function subs()
  {
  $sub = Subscription_plan::all();
    return view('sub', compact('sub'));
  }
  public function add_sub (Request $request)
  {
    Subscription_plan::create($request->all());
    $sub = Subscription_plan::all();

    // return view('sub', compact('sub'))->with('success', 'Subscription Plan created successfully.');
    return response()->json([
      'message' => 'Subscription Plan created successfully.'   
    ]);
  }

  public function edit_sub (Request $request , int $id)
  {
    $sub = Subscription_plan::all();
    $subs = Subscription_plan::find($request->id);
    $subs->update($request->all());
    return response()->json([
      'message' => 'Subscription Plan Update successfully.'   
    ]);
  }
}
