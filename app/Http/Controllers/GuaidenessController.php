<?php

namespace App\Http\Controllers;

use App\Models\Guaideness;
use Illuminate\Http\Request;

class GuaidenessController extends Controller
{
// for website
    public function Guaideness($id, $read_id) {
        $data['data'] = Guaideness::where('detaillesson_id', $id)
                              ->where('read_id', $read_id)
                              ->get();
        return view('Furtherdetail', $data);
    }
    // for andriod application
    public function GuaidenessApp($id, $read_id){
     
        $data['data'] = Guaideness::where('detaillesson_id', $id)
        ->where('read_id', $read_id)
        ->get();

        return response()->json($data);
    }




    public function index()
    {
        if (hasPermission('Guaideness_read')) {
            $data = Guaideness::all();
            return view("Guaideness.index", $data);
        } else {
            abort(403);
        }
    }
  
  
    public function read()
    {
        try {
            if (hasPermission('Guaideness_read')) {
                $lesson = Guaideness::get();
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
            if (hasPermission('Guaideness_write')) {
                if ($request->id == "") {
                    $Guaideness = new Guaideness();
                    $Guaideness->NameEng1 = $request->NameEng1;
                    $Guaideness->NameArabic1 = $request->NameArabic1;
                    $Guaideness->NameUrdu1 = $request->NameUrdu1;
                    $Guaideness->youtube_videos = $request->youtube_videos;
                    $Guaideness->Description = $request->DescriptionUrdu;
                    $Guaideness->Description = $request->DescriptionEng;
                    $Guaideness->detaillesson_id = $request->detaillesson_id;
                    $Guaideness->read_id = $request->read_id;

                    $Guaideness->save();
                } else {
                    $Guaideness = Guaideness::find($request->id);
                    $Guaideness->NameEng1 = $request->NameEng1;
                    $Guaideness->NameArabic1 = $request->NameArabic1;
                    $Guaideness->NameUrdu1 = $request->NameUrdu1;
                    $Guaideness->youtube_videos = $request->youtube_videos;
                    $Guaideness->Description = $request->DescriptionUrdu;
                    $Guaideness->Description = $request->DescriptionEng;
                    $Guaideness->detaillesson_id = $request->detaillesson_id;
                    $Guaideness->read_id = $request->read_id;
                    $Guaideness->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
  
    public function readById(Guaideness $guaideness, $id)
    {
        try {
            if (hasPermission('Guaideness_read')) {
                $data = Guaideness::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }
    public function destroy(Guaideness $guaideness, $id)
    {
        $data = Guaideness::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }



    public function islame(){
        return view('islame');
    }
 
    public function Quran(){
        return view('Quran');
    }
  
    public function MoreFeature(){
        return view('MoreFeature');
    }

     
}
