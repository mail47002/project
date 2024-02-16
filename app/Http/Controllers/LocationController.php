<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Models\Bins;
use App\Models\User;
use App\Models\Location;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Storage;
use Image;

class LocationController extends Controller
{
    public function index(Request $request)
    {   
            
        $admin = User::where(['role_id' => 1])->get();
        $locations = Location::all();
        
        return Inertia::render('Location/Location',['data' =>$admin[0], 'location' => $locations]);
      
    }
    public function create(Request $request)
    {
        $admin = User::where(['role_id' => 1])->get();
        return Inertia::render('Location/AddLocation',['data' => $admin[0]]);
    }
    
    public function store(Request $request)
    {
        /*$request->validate([
            'name' => 'required',    
            'device_id' => 'required|unique:users',
            'latitude' => 'required',
            'longitude' => 'required',
            'description' => 'required',
            'city' => 'required',
            'street' => 'required',
            'zip' => 'required'
            ]);*/
        $uuid                         =     Str::uuid();
        $location                     =     new Location();
        $location->name               =     $request['name'];
        $location->uuid               =     $uuid;
        $location->description        =     $request['description'];
        $location->latitude           =     $request['latitude'];
        $location->longitude          =     $request['longitude'];
        $location->city               =     $request['city'];
        $location->street             =     $request['street'];
        $location->zip                =     $request['zip'];
        $location->status             =     $request['status'];
        $location->save();

        return redirect('/admin/locations');
    }
    public function edit(Request $request, $id)
    {
        $admin = User::where(['role_id' => 1])->get();
        $location = Location::where(['id' => $id])->get();
        return Inertia::render('Location/EditLocation',['location' => $location[0], 'data' => $admin[0]]);
    }
    public function update(Request $request, $id)
    {
        $location = Location::where(['id' => $id])->update(
            [
                'name' => $request->name,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'description' => $request->description,
                'city' => $request->city,
                'street' => $request->street,
                'zip' => $request->zip,
                'status' => $request->status
            ]
        );
        return redirect('/admin/locations');
    }
    public function delete(Request $request, $id)
    {
        $location=Location::where(['id'=>$id])->delete();
        return redirect('/admin/locations');
    }
}
