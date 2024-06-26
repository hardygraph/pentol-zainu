<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class SlideController extends Controller
{

      // This method will show slide page
      public function home() {
        $slide = Slide::all();
        return view('backend.pengaturan.slide.index',[
            'slide' => $slide
        ]);
    }

    // This method will show create slide page
    public function create() {
        return view('backend.pengaturan.slide.create');
    }

    // This method will store a slide in db
    public function store(Request $request) {
        $rules = [
            'judul' => 'required|min:3',
            'keterangan' => 'required|min:3',             
        ];
    
        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('slide.create')->withInput()->withErrors($validator);
        }

        // here we will insert slide in db
        $slide = new Slide();
        $slide->judul = $request->judul;
        $slide->keterangan = $request->keterangan;
        $slide->save();
        
        if ($request->image != "") {
            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to slide directory
            $image->move(public_path('uploads/slide'),$imageName);

            // Save image name in database
            $slide->image = $imageName;
            $slide->save();
        }        

        return redirect()->route('slide')->with('success','slide added successfully.');
    }

    // This method will show edit slide page
    public function edit($id) {
        $slide = Slide::findOrFail($id);
        return view('backend.pengaturan.slide.edit',[
            'slide' => $slide
        ]);
    }

    // This method will update a slide
    public function update($id, Request $request) {

        $slide = Slide::findOrFail($id);

        $rules = [    
            'judul' => 'required|min:3',
            'keterangan' => 'required|min:3',                
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('slide.edit',$slide->id)->withInput()->withErrors($validator);
        }

        // here we will update slide
        $slide->judul = $request->judul;
        $slide->keterangan = $request->keterangan;
        $slide->save();

        if ($request->image != "") {

            // delete old image
            File::delete(public_path('uploads/slide/'.$slide->image));

            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to slide directory
            $image->move(public_path('uploads/slide'),$imageName);

            // Save image name in database
            $slide->image = $imageName;
            $slide->save();
        }        

        return redirect()->route('slide')->with('success','slide updated successfully.');
    }

    // This method will delete a slide
    public function destroy($id) {
        $slide = Slide::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/slide/'.$slide->image));

       // delete slide from database
       $slide->delete();

       return redirect()->route('slide')->with('success','slide deleted successfully.');
    }
    
}
