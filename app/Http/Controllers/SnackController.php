<?php

namespace App\Http\Controllers;
use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SnackController extends Controller
{
    
          // This method will show snack page
          public function home() {
            $snack = Snack::all();
            return view('backend.produk.snack.index',[
                'snack' => $snack
            ]);
        }
    
        // This method will show create snack page
        public function create() {
            return view('backend.produk.snack.create');
        }
    
        // This method will store a snack in db
        public function store(Request $request) {
            $rules = [
                'snack' => 'required|min:3',
                'harga' => 'required|numeric',      
                'stok' => 'required|numeric'           
            ];
        
            if ($request->image != "") {
                $rules['image'] = 'image';
            }
    
            $validator = Validator::make($request->all(),$rules);
    
            if ($validator->fails()) {
                return redirect()->route('snack.create')->withInput()->withErrors($validator);
            }
    
            // here we will insert snack in db
            $snack = new Snack();
            $snack->snack = $request->snack;
            $snack->harga = $request->harga;
            $snack->stok = $request->stok;
            $snack->save();
            
            if ($request->image != "") {
                // here we will store image
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time().'.'.$ext; // Unique image name
    
                // Save image to snack directory
                $image->move(public_path('uploads/snack'),$imageName);
    
                // Save image name in database
                $snack->image = $imageName;
                $snack->save();
            }        
    
            return redirect()->route('snack')->with('success','snack added successfully.');
        }
    
        // This method will show edit snack page
        public function edit($id) {
            $snack = Snack::findOrFail($id);
            return view('backend.produk.snack.edit',[
                'snack' => $snack
            ]);
        }
    
        // This method will update a snack
        public function update($id, Request $request) {
    
            $snack = Snack::findOrFail($id);
    
            $rules = [    
                'snack' => 'required|min:3',
                'harga' => 'required|numeric',      
                'stok' => 'required|numeric'              
            ];
    
            if ($request->image != "") {
                $rules['image'] = 'image';
            }
    
            $validator = Validator::make($request->all(),$rules);
    
            if ($validator->fails()) {
                return redirect()->route('snack.edit',$snack->id)->withInput()->withErrors($validator);
            }
    
            // here we will update snack
            $snack->snack = $request->snack;
            $snack->harga = $request->harga;
            $snack->stok = $request->stok;
            $snack->save();
    
            if ($request->image != "") {
    
                // delete old image
                File::delete(public_path('uploads/snack/'.$snack->image));
    
                // here we will store image
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $imageName = time().'.'.$ext; // Unique image name
    
                // Save image to snack directory
                $image->move(public_path('uploads/snack'),$imageName);
    
                // Save image name in database
                $snack->image = $imageName;
                $snack->save();
            }        
    
            return redirect()->route('snack')->with('success','snack updated successfully.');
        }
    
        // This method will delete a snack
        public function destroy($id) {
            $snack = Snack::findOrFail($id);
    
           // delete image
           File::delete(public_path('uploads/snack/'.$snack->image));
    
           // delete snack from database
           $snack->delete();
    
           return redirect()->route('snack')->with('success','snack deleted successfully.');
        }

}
