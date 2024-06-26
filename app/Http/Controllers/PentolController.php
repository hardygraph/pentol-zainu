<?php

namespace App\Http\Controllers;

use App\Models\Pentol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PentolController extends Controller
{
    // This method will show pentol page
    public function home() {
        $pentol = Pentol::all();
        return view('backend.produk.pentol.index',[
            'pentolan' => $pentol
        ]);
    }

    // This method will show create pentol page
    public function create() {
        return view('backend.produk.pentol.create');
    }

    // This method will store a pentol in db
    public function store(Request $request) {
        $rules = [
            'pentol' => 'required|min:3',
            'harga' => 'required|numeric',      
            'stok' => 'required|numeric'           
        ];
    
        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('pentol.create')->withInput()->withErrors($validator);
        }

        // here we will insert pentol in db
        $pentol = new Pentol();
        $pentol->pentol = $request->pentol;
        $pentol->harga = $request->harga;
        $pentol->stok = $request->stok;
        $pentol->save();
        
        if ($request->image != "") {
            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to pentol directory
            $image->move(public_path('uploads/pentol'),$imageName);

            // Save image name in database
            $pentol->image = $imageName;
            $pentol->save();
        }        

        return redirect()->route('pentol')->with('success','pentol added successfully.');
    }

    // This method will show edit pentol page
    public function edit($id) {
        $pentol = Pentol::findOrFail($id);
        return view('backend.produk.pentol.edit',[
            'pentolan' => $pentol
        ]);
    }

    // This method will update a pentol
    public function update($id, Request $request) {

        $pentol = Pentol::findOrFail($id);

        $rules = [    
            'pentol' => 'required|min:3',
            'harga' => 'required|numeric',      
            'stok' => 'required|numeric'              
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('pentol.edit',$pentol->id)->withInput()->withErrors($validator);
        }

        // here we will update pentol
        $pentol->pentol = $request->pentol;
        $pentol->harga = $request->harga;
        $pentol->stok = $request->stok;
        $pentol->save();

        if ($request->image != "") {

            // delete old image
            File::delete(public_path('uploads/pentol/'.$pentol->image));

            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to pentol directory
            $image->move(public_path('uploads/pentol'),$imageName);

            // Save image name in database
            $pentol->image = $imageName;
            $pentol->save();
        }        

        return redirect()->route('pentol')->with('success','pentol updated successfully.');
    }

    // This method will delete a pentol
    public function destroy($id) {
        $pentol = Pentol::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/pentol/'.$pentol->image));

       // delete pentol from database
       $pentol->delete();

       return redirect()->route('pentol')->with('success','pentol deleted successfully.');
    }
}
