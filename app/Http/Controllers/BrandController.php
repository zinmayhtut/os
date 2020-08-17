<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
       return view('backend.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

        // validation
        $request->validate([
           
            'bname' => 'required',
            'bphoto' => 'required',
            
        ]);

        //file upload
         $imageName = time().'.'.$request->bphoto->extension();

        $request->bphoto->move(public_path('backend.brandimg'),$imageName);
        $myfile = 'backend/brandimg'.$imageName;

        $brand = new Brand;
        $brand->name = $request->bname;
        $brand->photo = $myfile;

        $brand->save();


        //redirect
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::find($id);
        return view('backend.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        // validation
        $request->validate([
           
            'bname' => 'required',
            'bphoto' => 'sometimes',
            
        ]);

        if($request->hasFile('bphoto')){

        $imageName = time().'.'.$request->bphoto->extension();

        $request->bphoto->move(public_path('backend/brandimg/'),$imageName);
        $myfile = 'backend/brandimg/'.$imageName;
        //delet old photo(unlink)

        }else{

            $myfile = $request->oldphoto;
        }


       $brand = Brand::find($id);

        $brand = new Brand;
        $brand->name = $request->bname;
        $brand->photo = $myfile;

        $brand->save();


        //redirect
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $brand = Brand::find($id);
        $brand -> delete();

        //redirect
        return redirect()->route('brands.index');
    }
}
