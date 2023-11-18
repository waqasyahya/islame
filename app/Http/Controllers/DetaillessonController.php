<?php

namespace App\Http\Controllers;

use App\Models\detaillesson;
use App\Models\read;

use Illuminate\Http\Request;

class DetaillessonController extends Controller
{
// Detail Lesson
    public function detail($id)
    {

        $data['data'] = detaillesson::where('read_id',$id)->get();


        return  view('Detaillesson',$data);

    }
// Detail Lesson
// Detail Page for Api
public function detailApp($id){
   
    $data['data'] = detaillesson::where('read_id',$id)->get();
   
    return response()->json($data);
    
}
// Detail Page for Api






    public function index()
    {
        if (hasPermission('detail_read')) {
            $data = detaillesson::all();
            return view("detail.index", $data);
        } else {
            abort(403);
        }
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function read()
    {
        try {
            if (hasPermission('detail_read')) {
                $lesson = detaillesson::get();
                $json_data["data"] = $lesson;
                return json_encode($json_data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            if (hasPermission('detail_write')) {
                if ($request->id == "") {
                    $detail = new detaillesson();
                    $detail->NameEng1 = $request->NameEng1;
                    $detail->NameUrdu1 = $request->NameUrdu1;
                    $detail->NameArabic1 = $request->NameArabic1;
                    $detail->read_id = $request->read_id;
                    $detail->save();
                } else {
                    $detail = detaillesson::find($request->id);
                    $detail->NameEng1 = $request->NameEng1;
                    $detail->NameUrdu1 = $request->NameUrdu1;
                    $detail->NameArabic1 = $request->NameArabic1;
                    $detail->read_id = $request->read_id;
                    $detail->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }

    public function readById(detaillesson $detaillesson, $id)
    {
        try {
            if (hasPermission('detail_read')) {
                $data = detaillesson::find($id);
                return response()->json($data);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return  custom_exception($e);
        }
    }






    public function destroy(detaillesson $detaillesson, $id)
    {
        $data = detaillesson::find($id);
        $data->delete();
        return response()->json(["status" => "600"]);
        //
    }
}

