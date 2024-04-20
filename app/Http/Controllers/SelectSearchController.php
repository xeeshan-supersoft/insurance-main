<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceProvider;

class SelectSearchController extends Controller
{
  public function selectSearch(Request $request)
  {
    $results = [];
    $search = $request->get('q');
    $results = InsuranceProvider::select('id', 'name', 'contact_info', 'best_rating_number', 'naic_number')
      ->where('name', 'LIKE', "%$search%")
      ->get();

      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($results as $row)
      {
       $output .= '
       <li data-id="' . $row->id . '" data-naic="' . $row->naic_number .  '" data-brn="' . $row->best_rating_number . '"><a href="#">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      return Response($output);

    //return response()->json($results);
  }
}
