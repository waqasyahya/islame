<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        if (hasPermission('Answer_read')) {
            $data = Answer::all();
            return view("Answer.index", $data);
        } else {
            abort(403);
        }
    }

    public function read()
    {
        try {
            if (hasPermission('Answer_read')) {
                $answer = Answer::get();
                $json_data["data"] = $answer;
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
            if (hasPermission('Answer_write')) {
                if ($request->id == "") {
                    $answer = new Answer();
                    $answer->testing_id = $request->testing_id;
                    $answer->correct_option = $request->correct_option;
                

                    $answer->save();
                } else {
                    $answer = Answer::find($request->id);
                    $answer->testing_id = $request->testing_id;
                    $answer->correct_option = $request->correct_option;
                    $answer->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function show(Answer $answer)
    {
        //
    }

    public function readById(Answer $Answer, $id)
    {
        try {
            if (hasPermission('Answer_read')) {
                $data = Answer::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }


   
    public function destroy(Answer $Answer, $id)
    {
        $data = Answer::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }
    public function submitAnswer(Request $request) {
        $questionId = $request->input('testing_id'); // Retrieve the question_id from the form
        $selectedOption = $request->input('selected_option'); // Retrieve the selected option

        // Retrieve the correct_option from the Answers Table for this question_id
        $answer = Answer::where('testing_id', $questionId)->first();

        if (!$answer) {
            return response()->json(['result' => 'Answer not found'], 404);
        }

        if ($selectedOption == $answer->correct_option) {
            $result = 'Correct!';
        } else {
            $result = 'Incorrect!';
        }

        return response()->json(['result' => $result]);
    }



}
