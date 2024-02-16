<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
   public function index(Request $request)
   {
      $locations = Location::all();
      return response()->json(['Locations' => $locations], 200);
   }
}
