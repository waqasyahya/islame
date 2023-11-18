<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    // for website
    public function Testing($id ) {
        $data['data'] = Testing::where('detaillesson_id', $id)

        ->get();
        return view('Test' ,$data);
    }
    // for application api
    public function TestApp($id ) {
        $data['data'] = Testing::where('detaillesson_id', $id)

        ->get();
        return response()->json($data);
    }
  
    public function index()
    {
        if (hasPermission('Testing_read')) {



            return view("Testing.index");
        } else {
            abort(403);
        }
    }
    public function read()
    {
        try {
            if (hasPermission('Testing_read')) {
                $testing = Testing::get();
                $json_data["data"] = $testing;
                return json_encode($json_data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return custom_exception($e);
        }


    }
    public function store(Request $request)
    {
        // return $request;
        try {
            if (hasPermission('Testing_write')) {
                if ($request->id == "") {
                    // id,title,description,price,address,phone,email,whatsapp,category_id,purpose_id,rent_period_id,location_id,status
                    $testing = new Testing();
                    $testing->option_1 = $request->input('option_1');
                    $testing->option_2 = $request->input('option_2');
                    $testing->option_3 = $request->input('option_3');
                    $testing->option_4 = $request->input('option_4');
                 
                    $testing->detaillesson_id = $request->input('detaillesson_id');
                    if ($request->hasFile('audio1')) {

                        $audio1File = $request->file('audio1');
                        $audio1Extension = $audio1File->getClientOriginalExtension();
                        $audio1Filename = time() . 'audio1' . $audio1Extension;

                        // Move the uploaded audio1 file to the appropriate directory
                        $audio1File->move('audiofolder', $audio1Filename);

                        // Set the 'audio1' attribute of the model to the saved filename
                        $testing->audio1 = $audio1Filename;
                    }
                  

                    $testing->save();
                } else {
                    $testing = Testing::find($request->id);
                    $testing->option_1 = $request->input('option_1');
                    $testing->option_2 = $request->input('option_2');
                    $testing->option_3 = $request->input('option_3');
                    $testing->option_4 = $request->input('option_4');
                     $testing->detaillesson_id = $request->input('detaillesson_id');

                    if ($request->hasFile('audio1')) {
                        $audio1File = $request->file('audio1');
                        $audio1Extension = $audio1File->getClientOriginalExtension();
                        $audio1Filename = time() . 'audio1' . $audio1Extension;

                        // Move the uploaded audio1 file to the appropriate directory
                        $audio1File->move('audiofolder', $audio1Filename);

                        // Set the 'audio1' attribute of the model to the saved filename
                        $testing->audio1 = $audio1Filename;
                    }
                    $testing->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return custom_exception($e);
        }
    }

    public function readById(Testing $Testing, $id)
    {
        try {
            // if (hasPermission('property_read')) {
                $data = Testing::find($id);
                return response()->json($data);
            // } else {
                // throw new \Exception("Unauthorized");
            // }
        } catch (\Exception $e) {
            return custom_exception($e);
        }

    }
    public function destroy(Testing $practic, $id)
    {
        // return $id;
        $practic = Testing::find($id);
        $practic->delete();
        return response()->json(["status" => "400"]);
    }







    
}
