<?php

namespace App\Http\Controllers;

use App\Models\condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function conditionpage()
    {
        $data['data'] = condition::first();
        return view('term_and_condition',$data);
    }

    public function index()
    {
        if (hasPermission('condition_read')) {
            $data = condition::all();
            return view("condition.index", $data);
        } else {
            abort(403);
        }
    }


    public function read()
    {
        try {
            if (hasPermission('condition_read')) {
                $condition = condition::get();
                $json_data["data"] = $condition;
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
            if (hasPermission('condition_write')) {
                if ($request->id == "") {
                    $condition = new condition();
                    $condition->main_heading = $request->main_heading;
                    $condition->main_paragraph1 = $request->main_paragraph1;
                    $condition->main_paragraph2 = $request->main_paragraph2;
                    $condition->heading1 = $request->heading1;
                    $condition->paragraph1 = $request->paragraph1;
                    $condition->heading2 = $request->heading2;
                    $condition->paragraph2 = $request->paragraph2;
                    $condition->heading3 = $request->heading3;
                    $condition->paragraph3 = $request->paragraph3;

                    $condition->heading4 = $request->heading4;
                    $condition->paragraph4_1 = $request->paragraph4_1;
                    $condition->paragraph4_2 = $request->paragraph4_2;
                    $condition->heading5 = $request->heading5;
                    $condition->paragraph5_1 = $request->paragraph5_1;
                    $condition->paragraph5_2 = $request->paragraph5_2;
                    $condition->paragraph5_3 = $request->paragraph5_3;
                    $condition->paragraph5_4 = $request->paragraph5_4;
                    
                    

                    $condition->heading6 = $request->heading6;
                    $condition->paragraph6 = $request->paragraph6;
                    $condition->heading7 = $request->heading7;
                    $condition->paragraph7_1 = $request->paragraph7_1;
                    $condition->paragraph7_2 = $request->paragraph7_2;
                    $condition->paragraph7_3 = $request->paragraph7_3;
                    $condition->paragraph7_4 = $request->paragraph7_4;
                    $condition->heading8 = $request->heading8;
                    $condition->paragraph8_1 = $request->paragraph8_1;
                    $condition->paragraph8_2 = $request->paragraph8_2;
                    $condition->heading9 = $request->heading9;
                    $condition->paragraph9 = $request->paragraph9;
                  




                    $condition->save();
                } else {
                    $condition = condition::find($request->id);
                    $condition->main_heading = $request->main_heading;
                    $condition->main_paragraph1 = $request->main_paragraph1;
                    $condition->main_paragraph2 = $request->main_paragraph2;
                    $condition->heading1 = $request->heading1;
                    $condition->paragraph1 = $request->paragraph1;
                    $condition->heading2 = $request->heading2;
                    $condition->paragraph2 = $request->paragraph2;
                    $condition->heading3 = $request->heading3;
                    $condition->paragraph3 = $request->paragraph3;

                    $condition->heading4 = $request->heading4;
                    $condition->paragraph4_1 = $request->paragraph4_1;
                    $condition->paragraph4_2 = $request->paragraph4_2;
                    $condition->heading5 = $request->heading5;
                    $condition->paragraph5_1 = $request->paragraph5_1;
                    $condition->paragraph5_2 = $request->paragraph5_2;
                    $condition->paragraph5_3 = $request->paragraph5_3;
                    $condition->paragraph5_4 = $request->paragraph5_4;
                    $condition->heading6 = $request->heading6;
                    $condition->paragraph6 = $request->paragraph6;
                    $condition->heading7 = $request->heading7;
                    $condition->paragraph7_1 = $request->paragraph7_1;
                    $condition->paragraph7_2 = $request->paragraph7_2;
                    $condition->paragraph7_3 = $request->paragraph7_3;
                    $condition->paragraph7_4 = $request->paragraph7_4;
                    $condition->heading8 = $request->heading8;
                    $condition->paragraph8_1 = $request->paragraph8_1;
                    $condition->paragraph8_2 = $request->paragraph8_2;
                    $condition->heading9 = $request->heading9;
                    $condition->paragraph9 = $request->paragraph9;
                
                    $condition->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function readById(condition $condition, $id)
    {
        try {
            if (hasPermission('condition_read')) {
                $data = condition::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function destroy(condition $condition, $id)
    {
        $data = condition::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }
}
