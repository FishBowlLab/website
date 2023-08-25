<?php

namespace App\Http\Controllers;

use App\Models\TeachingResource;
use Illuminate\Http\Request;

class TeachingResourcesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index", "show"]]);
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return(view('teachingResources.index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Creates the resources into the DB
        return view("teachingResources.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "file" => "file|nullable|max:1999"
        ]);
        /*
        //Handle file upload
        if($request->hasFile("fileInput")){
            // get Filename with the extension
            $filenameWithExt = $request->file("fileInput")->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file("fileInput")->getClientOriginalExtension();
            //Filename to Store
            $filenameToStore = $filename."_".time().".".$extension;
            // Upload Image
            $path = $request->file("fileInput")->storeAs("public/cover_images", $filenameToStore);
 
        }
        else{
            $filenameToStore = "";
        }
        */
        
        // Create Resource
        $teachingResource = new TeachingResource();
        $teachingResource->title = $request->input("title");
        $teachingResource->description = $request->input("description");
        //$teachingResource->user_id = auth()->user()->id;
        $teachingResource->attachment = $request->input("file");
        //$teachingResource->save();

        //return redirect("/posts")->with("success", "Post Created");
        
        return($teachingResource);
        /*
        //https://www.itsolutionstuff.com/post/laravel-9-file-upload-tutorial-exampleexample.html
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
    
        $fileName = time().'.'.$request->file->extension();  
     
        //Store file in public storage folder
        $request->file->move(public_path('uploads'), $fileName);
        */
        /*  
            Write Code Here for
            Store $fileName name in DATABASE from HERE 
        */
        /*
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file', $fileName);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Displays the Resource
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Modifies the resource
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
