<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\LessonCompleted;

class LessonsCompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create Lesson
        $lesson = new LessonCompleted;
        $lesson->completed_lesson_number = $request->input("lesson_number");
        $submit_result = $request->input("completed");
        $lesson->user_id = auth()->user()->id;

        // Validates status of completion
        if ($submit_result == "false"){
            return redirect("/student")->with("error", "Lesson was not completed");
        }
        // Checks if module has been repeated in a previous use
        $repeat_check = LessonCompleted::where("user_id", $lesson->_id)->get();  #Create a query of all of this user's completed lessons
        if(count($repeat_check) > 0){
            return redirect("/student")->with("error", "This module has been completed before");
        }
        
        // Saves to the model if all checks pass
        $lesson->save();
        return redirect("/student")->with("success", "Lesson Status Updated"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Checks for valid module ID between 0 and the max number of modules
        if ( 0 < $id  && $id <= Module::count() ){
            return view("lessons.lesson_" . $id);
        }
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            "title" => "required",
            "body" => "required"
        ]);

        $lesson = LessonCompleted::find($id);
        $lesson->lesson_number = $request->input("title");
        $lesson->completed = $request->input("body");
        $lesson->user_id = auth()->user()->id;
        $lesson->save();       

        return redirect("/lessons")->with("success", "Lesson Created");
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
