<?php

namespace App\Http\Controllers;

use App\Models\privecy;
use Illuminate\Http\Request;

class PrivecyController extends Controller
{
    public function privecypage()
    {
        $data['data'] = privecy::first();
        return view('privecy-policy', $data);
    }

    public function index()
    {
        if (hasPermission('privecy_read')) {
            $data = privecy::all();
            return view("privecy.index", $data);
        } else {
            abort(403);
        }
    }


    public function read()
    {
        try {
            if (hasPermission('privecy_read')) {
                $lesson = privecy::get();
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
            if (hasPermission('privecy_write')) {
                if ($request->id == "") {
                    $privecy = new privecy();
                    $privecy->main_heading = $request->main_heading;
                    $privecy->main_paragraph1 = $request->main_paragraph1;
                    $privecy->main_paragraph2 = $request->main_paragraph2;
                    $privecy->heading1 = $request->heading1;
                    $privecy->paragraph1 = $request->paragraph1;
                    $privecy->heading2 = $request->heading2;
                    $privecy->paragraph2 = $request->paragraph2;
                    $privecy->heading3 = $request->heading3;
                    $privecy->heading4 = $request->heading4;
                    $privecy->paragraph4 = $request->paragraph4;
                    $privecy->heading5 = $request->heading5;
                    $privecy->paragraph5 = $request->paragraph5;
                    $privecy->heading6 = $request->heading6;
                    $privecy->paragraph6 = $request->paragraph6;
                    $privecy->heading7 = $request->heading7;
                    $privecy->paragraph7 = $request->paragraph7;
                    $privecy->heading8 = $request->heading8;
                    $privecy->paragraph8 = $request->paragraph8;
                    $privecy->heading9 = $request->heading9;
                    $privecy->paragraph9 = $request->paragraph9;
                    $privecy->heading10 = $request->heading10;
                    $privecy->paragraph10 = $request->paragraph10;




                    $privecy->save();
                } else {
                    $privecy = privecy::find($request->id);
                    $privecy->main_heading = $request->main_heading;
                    $privecy->main_paragraph1 = $request->main_paragraph1;
                    $privecy->main_paragraph2 = $request->main_paragraph2;
                    $privecy->heading1 = $request->heading1;
                    $privecy->paragraph1 = $request->paragraph1;
                    $privecy->heading2 = $request->heading2;
                    $privecy->paragraph2 = $request->paragraph2;
                    $privecy->heading3 = $request->heading3;
                    $privecy->heading4 = $request->heading4;
                    $privecy->paragraph4 = $request->paragraph4;
                    $privecy->heading5 = $request->heading5;
                    $privecy->paragraph5 = $request->paragraph5;
                    $privecy->heading6 = $request->heading6;
                    $privecy->paragraph6 = $request->paragraph6;
                    $privecy->heading7 = $request->heading7;
                    $privecy->paragraph7 = $request->paragraph7;
                    $privecy->heading8 = $request->heading8;
                    $privecy->paragraph8 = $request->paragraph8;
                    $privecy->heading9 = $request->heading9;
                    $privecy->paragraph9 = $request->paragraph9;
                    $privecy->heading10 = $request->heading10;
                    $privecy->paragraph10 = $request->paragraph10;
                    $privecy->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function readById(privecy $privecy, $id)
    {
        try {
            if (hasPermission('privecy_read')) {
                $data = privecy::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function destroy(privecy $privecy, $id)
    {
        $data = privecy::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }

    

    /**
     * Remove the specified resource from storage.
     */
}
