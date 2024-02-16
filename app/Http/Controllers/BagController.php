<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Bag;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Str;
use App\Models\Media;
use App\Models\Bag_Users;
use Carbon;
use QrCode;
use Storage;
use Image;

class BagController extends Controller
{
    public function index(Request $request)
    {     
        $admin = User::where(['role_id' => 1])->get();
        $bags = Bag::all();
        
        return Inertia::render('Bag/Bag',['data' =>$admin[0], 'bag' => $bags]); 
    }
    public function create(Request $request)
    {
        $admin = User::where(['role_id' => 1])->get();
        return Inertia::render('Bag/AddBag',['data' => $admin[0]]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',    
            'description' => 'required',
            ]);

            $uuid                    =     Str::uuid();
            
            $filename = bin2hex(random_bytes(8)) . '.png'  ;

            $image = QrCode::size(200)
            ->format('png')
            ->generate($uuid);

            Storage::disk('local')->put('/public/media/Bag/Qrcode/'.$filename, $image);

       
      
        $bag                     =     new Bag();
        $bag->name               =     $request['name'];
        $bag->uuid               =     $uuid;
        $bag->qrcode             =     $filename;
        $bag->status             =     1;
        $bag->description        =     $request['description'];
        
        $bag->save();

        return redirect('/admin/bags');
    }
    public function edit(Request $request, $id)
    {
        $admin = User::where(['role_id' => 1])->get();
        $bag = Bag::where(['id' => $id])->get();
    
        return Inertia::render('Bag/EditBag',['bag' => $bag[0], 'data' => $admin[0]]);
    }
    public function update(Request $request, $id)
    {
        $bag = Bag::where(['id' => $id])->update(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
        );
        return redirect('/admin/bags');
    }
    public function delete(Request $request, $id)
    {
        $bag=Bag::where(['id'=>$id])->delete();
        return redirect('/admin/bags');
    }
}
