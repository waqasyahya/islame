<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\read;
use Illuminate\Http\Request;

class ReadController extends Controller
{
      // for website
      public function Lesson1()
      {
  
          $data = read::get();
  
          return view('Lesson', compact('data'));
      }
    //   for website
    // for andriod application
    public function LessonApp(){
        
        $data = read::all();

        return response()->json($data);
    }
    // for andriod application
    
    public function index()
    {
        if (hasPermission('lesson_read')) {
            $data = read::all();
            return view("lesson.index", $data);
        } else {
            abort(403);
        }
    }
  

    public function read()
    {
        try {
            if (hasPermission('lesson_read')) {
                $lesson = read::get();
                $json_data["data"] = $lesson;
                return json_encode($json_data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function store(Request $request)
    {
        try {
            if (hasPermission('lesson_write')) {
                if ($request->id == "") {
                    $lesson = new read();
                    $lesson->Number = $request->Number;
                    $lesson->NameEng = $request->NameEng;
                    $lesson->NameUrdu = $request->NameUrdu;
                    $lesson->NameArabic = $request->NameArabic;

                    $lesson->save();
                } else {
                    $lesson = read::find($request->id);
                    $lesson->Number = $request->Number;
                    $lesson->NameEng = $request->NameEng;
                    $lesson->NameUrdu = $request->NameUrdu;
                    $lesson->NameArabic = $request->NameArabic;
                    $lesson->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }

    public function readById(read $read, $id)
    {
        try {
            if (hasPermission('lesson_read')) {
                $data = read::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }






    public function destroy(lesson $lesson, $id)
    {
        $data = read::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }
}
