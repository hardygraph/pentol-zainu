<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MinumanController extends Controller
{
    
      // This method will show minuman page
      public function home() {
        $minuman = Minuman::all();
        return view('backend.produk.minuman.index',[
            'minuman' => $minuman
        ]);
    }

    // This method will show create minuman page
    public function create() {
        return view('backend.produk.minuman.create');
    }

    // This method will store a minuman in db
    public function store(Request $request) {
        $rules = [
            'minuman' => 'required|min:3',
            'harga' => 'required|numeric',      
            'stok' => 'required|numeric'           
        ];
    
        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('minuman.create')->withInput()->withErrors($validator);
        }

        // here we will insert minuman in db
        $minuman = new Minuman();
        $minuman->minuman = $request->minuman;
        $minuman->harga = $request->harga;
        $minuman->stok = $request->stok;
        $minuman->save();
        
        if ($request->image != "") {
            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to minuman directory
            $image->move(public_path('uploads/minuman'),$imageName);

            // Save image name in database
            $minuman->image = $imageName;
            $minuman->save();
        }        

        return redirect()->route('minuman')->with('success','minuman added successfully.');
    }

    // This method will show edit minuman page
    public function edit($id) {
        $minuman = Minuman::findOrFail($id);
        return view('backend.produk.minuman.edit',[
            'minuman' => $minuman
        ]);
    }

    // This method will update a minuman
    public function update($id, Request $request) {

        $minuman = Minuman::findOrFail($id);

        $rules = [    
            'minuman' => 'required|min:3',
            'harga' => 'required|numeric',      
            'stok' => 'required|numeric'              
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('minuman.edit',$minuman->id)->withInput()->withErrors($validator);
        }

        // here we will update minuman
        $minuman->minuman = $request->minuman;
        $minuman->harga = $request->harga;
        $minuman->stok = $request->stok;
        $minuman->save();

        if ($request->image != "") {

            // delete old image
            File::delete(public_path('uploads/minuman/'.$minuman->image));

            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to minuman directory
            $image->move(public_path('uploads/minuman'),$imageName);

            // Save image name in database
            $minuman->image = $imageName;
            $minuman->save();
        }        

        return redirect()->route('minuman')->with('success','minuman updated successfully.');
    }

    // This method will delete a minuman
    public function destroy($id) {
        $minuman = Minuman::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/minuman/'.$minuman->image));

       // delete minuman from database
       $minuman->delete();

       return redirect()->route('minuman')->with('success','minuman deleted successfully.');
    }

}
