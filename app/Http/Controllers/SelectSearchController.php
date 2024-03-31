<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceProvider;

class SelectSearchController extends Controller
{
  public function selectSearch(Request $request)
  {
    $insure_firm = [];
    if ($request->has('q')) {
      $search = $request->q;
      $insure_firm = InsuranceProvider::select('id', 'name', 'contact_info', 'best_rating_number', 'naic_number')
        ->where('name', 'LIKE', "%$search%")
        ->get();
    }
    return response()->json($insure_firm);
  }
}
