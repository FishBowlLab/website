<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\LessonCompleted;
use App\Models\Module;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$user_id = auth()->user()->id;
        //$user = auth()->user()->name;
        $user_id = 3;
        $user = "Student View";

        // At this moment, we students can only be active in one class at any moment
        $display=[
            "lessons_completed.updated_at", 
            "available_lessons.lesson_number_available",
            "available_lessons.availability",  // this column is missing now or inaccessible
            "lessons_completed.completed_lesson_number",
            "modules.title"
        ];
        // Create a lesson subtable to join
        $lesson_subtable = LessonCompleted::select("updated_at", "completed_lesson_number")
                                ->where("student_id", $user_id);
  
        // outer join teachers to students with class_id
        // left join lessons to new table with lessons
        $lesson_data = Student::where("students.student_id", $user_id)
                                ->join("available_lessons", "available_lessons.class_id", "=", "students.class_id", "left outer")
                                ->leftJoinSub($lesson_subtable, "lessons_completed", function($join){
                                    $join->on("lessons_completed.completed_lesson_number", "=", "available_lessons.lesson_number_available");
                                })
                                ->join("modules", "modules.id", "=", "available_lessons.lesson_number_available")
                                ->orderBy("available_lessons.lesson_number_available", "asc")
                                ->get($display);
                                //->get();   
        $data = [
            "name" => ucwords($user),
            "lesson_data" => $lesson_data,
        ];
   
        return view("studentpages.index")->with($data);
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
        // This is a copy of the modules index method from the modules controller. Controllers need to be consolidated.
        $modules = Module::paginate(3);
        return view("modules.index")->with('modules', $modules);

        // This currently doesn't work because Blockly is interupting the back button.
        //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $user_id=3;
        $availability = Student::where("students.id", $user_id)
        ->join("available_lessons", "available_lessons.class_id", "=", "students.class_id")
        ->where("lesson_number_available", $id)
        ->value("availability");
        // Blocks student from accessing lesson if not available
        if ($availability == 0){
            return redirect("/student")->with("error", "This lesson is currently unavailable");
        }

        // Checks for valid module ID between 0 and the max number of modules
        if ( 0 < $id && $id <= Module::count()){
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
