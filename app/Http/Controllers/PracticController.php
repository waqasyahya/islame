<?php

namespace App\Http\Controllers;

use App\Models\practic;
use Illuminate\Http\Request;

class PracticController extends Controller
{
// for website
    public function practic1($id ) {
         $data['data'] = practic::where('detaillesson_id', $id)

         ->get();
        return view('practic' ,$data);
    }

    public function practicApp($id ) {
        $data['data'] = practic::where('detaillesson_id', $id)

        ->get();
        return response()->json($data);
   }

    public function index()
    {
        if (hasPermission('practic_read')) {



            return view("Practic.index");
        } else {
            abort(403);
        }
    }

    public function read()
    {
        try {
            if (hasPermission('practic_read')) {
                $practic = practic::get();
                $json_data["data"] = $practic;
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
            if (hasPermission('practic_write')) {
                if ($request->id == "") {
                    // id,title,description,price,address,phone,email,whatsapp,category_id,purpose_id,rent_period_id,location_id,status
                    $practic = new practic();
                    $practic->Name = $request->input('Name');
                   $practic->result= $request->input('result');
                    $practic->detaillesson_id = $request->input('detaillesson_id');
                    if ($request->hasFile('audio1')) {

                        $audio1File = $request->file('audio1');
                        $audio1Extension = $audio1File->getClientOriginalExtension();
                        $audio1Filename = time() . 'audio1' . $audio1Extension;
                        $audio1File->move('audiofolder', $audio1Filename);
                        $practic->audio1 = $audio1Filename;
                    }
                

                    $practic->save();
                } else {
                    $practic = practic::find($request->id);
                    $practic->Name = $request->input('Name');
                    $practic->result= $request->input('result');
                     $practic->detaillesson_id = $request->input('detaillesson_id');

                    if ($request->hasFile('audio1')) {
                        $audio1File = $request->file('audio1');
                        $audio1Extension = $audio1File->getClientOriginalExtension();
                        $audio1Filename = time() . 'audio1' . $audio1Extension;

                        $audio1File->move('audiofolder', $audio1Filename);

                        $practic->audio1 = $audio1Filename;
                    }
                






                    $practic->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return custom_exception($e);
        }
    }
    public function readById(practic $practic, $id)
    {
        try {
            // if (hasPermission('property_read')) {
                $data = practic::find($id);
                return response()->json($data);
            // } else {
                // throw new \Exception("Unauthorized");
            // }
        } catch (\Exception $e) {
            return custom_exception($e);
        }

    }
    public function destroy(practic $practic, $id)
    {
        // return $id;
        $practic = practic::find($id);
        $practic->delete();
        return response()->json(["status" => "400"]);
    }


}

