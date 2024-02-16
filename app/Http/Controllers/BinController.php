<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use App\Models\Bag;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Str;
use App\Models\Media;
use App\Models\BinUser;
use App\Models\BinBag;
use Carbon;
use Storage;
use Image;

class BinController extends Controller
{
    public function index(Request $request)
    {   
        $admin = User::where(['role_id' => 1])->get();
        $bins = Bin::all();
        
        return Inertia::render('Bin/Bin',['data' =>$admin[0], 'bin' => $bins]);
    }
    public function create(Request $request)
    {
        $admin = User::where(['role_id' => 1])->get();
        $users = User::select('id as value', 'name as label')->where(['role_id' => 3, 'status' => 1 ])->get()->toArray();
        $bags  = Bag::select('id as value', 'name as label')->where(['status'=> 1])->get()->toarray(); 
        return Inertia::render('Bin/AddBin',['data' => $admin[0], 'user' => $users, 'bag' => $bags]);
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

        $uuid                    =     Str::uuid();
        $bin                     =     new Bin();
        $bin->name               =     $request['name'];
        $bin->uuid               =     $uuid;
        $bin->device_id          =     $request['device_id'];
        $bin->description        =     $request['description'];
        $bin->latitude           =     $request['latitude'];
        $bin->longitude          =     $request['longitude'];
        $bin->city               =     $request['city'];
        $bin->status             =     $request['status'];
        $bin->street             =     $request['street'];
        $bin->zip                =     $request['zip'];
        $bin->daily_decrement_battery = $request['decrement_battery'];
        $bin->daily_increment_bottle = $request['increment_tons'];
        $bin->save();

        
        foreach($request['tonkeeper'] as $tonKeeper)
        {
                $binUser                   =     new BinUser;
                $binUser->user_id          =     $tonKeeper;
                $binUser->bin_id           =     $bin->id;
                $binUser->save();
        }
        foreach($request['bag'] as $bag)
        {
                $binbag                    =     new BinBag;
                $binbag->bag_id            =     $bag;
                $binbag->bin_id            =     $bin->id;
                $binbag->save();
        }

        
        foreach($request['images'] as $image)
        {
            $data = $this->uploadBase64Image('/public/media/Bin/',$image,800,600);
            $mediaUuid               =     Str::uuid();
            $bin                     =     Bin::find($bin->id);	
            $media                   =     new Media;
            $media->uuid             =     $mediaUuid;
            $media->file             =     $data;
            $bin->Media()->save($media);
        }

        return redirect('/admin/bins');
    }
    public function edit(Request $request, $id)
    {
        
        $admin = User::where(['role_id' => 1])->get();
        $bin = Bin::find($id);
        $media = $bin->Media->map(function($data) {
            return [
                'file' => asset('storage/media/Bin/'.$data->file),
                'id' => $data->id,
                'mediable_type' => $data->mediable_type,
                'mediable_id' => $data->mediable_id
            ];
        });
        $binUsers = BinUser::where(['bin_id' => $id])->pluck('user_id');
        
        $binBags  = BinBag::where(['bin_id' => $id])->pluck('bag_id'); 
        
        $user = User::select('id as value', 'name as label')->where(['role_id' => 3, 'status' => 1])->get()->toArray();
        $bag  = Bag::select('id as value', 'name as label')->where(['status'=> 1])->get()->toarray(); 

        return Inertia::render('Bin/EditBin',['bin' => $bin, 'data' => $admin[0], 'media' => $media,'user' => $user, 'bag' => $bag, 'binUsers' => $binUsers, 'binBags' => $binBags]);
    }
    public function update(Request $request, $id)
    {
        
        $data = Bin::where(['id' => $id])->update(
            [
                'name' => $request->name,
                'device_id' => $request->device_id,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'description' => $request->description,
                'city' => $request->city,
                'street' => $request->street,
                'zip' => $request->zip,
                'status' => $request->status,
                'daily_decrement_battery' => $request->decrement_battery,
                'daily_increment_bottle' => $request->increment_tons,
            ]
        );
        foreach($request['images'] as $image)
        {
            $data = $this->uploadBase64Image('/public/media/Bin/',$image,800,600);
            $mediaUuid               =     Str::uuid();
            $bin                     =     Bin::find($id);	
            $media                   =     new Media;
            $media->uuid             =     $mediaUuid;
            $media->file             =     $data;
            $bin->Media()->save($media);
        }
        $tonekeeper = binUser::where(['bin_id'=> $id])->delete();
        foreach($request['tonkeeper'] as $tonKeeper)
        {
                $binUser                   =     new BinUser;
                $binUser->user_id          =     $tonKeeper;
                $binUser->bin_id           =     $id;
                $binUser->save();
        }
        $binbag = BinBag::where(['bin_id'=> $id])->delete();
        foreach($request['bag'] as $bag)
        {
                $binbag                    =     new BinBag;
                $binbag->bag_id            =     $bag;
                $binbag->bin_id            =     $id;
                $binbag->save();
        }
        return redirect('/admin/bins');
    }
    public function delete(Request $request, $id)
    {
        $bin=Bin::where(['id'=>$id])->delete();
        return redirect('/admin/bins');
    }

    public function uploadBase64Image($path, $img, $w, $h)
    {
        try { 
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = bin2hex(random_bytes(8)) . '.' . $image_type;

            $image = Image::make($image_base64);
            $image->fit($w, $h);
            $image->stream();
            
            Storage::disk('local')->put($path . $filename, $image->__toString());
            return $filename;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function iamgeDelete(Request $request, $id)
    {
        if($id >0 )
        {
            $BinImage=Media::where(['id'=>$id])->get();
            Storage::delete('/public/media/Bin/'.$BinImage[0]->file);

            $media=Media::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }
}