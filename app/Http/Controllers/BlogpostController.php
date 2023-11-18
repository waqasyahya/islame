<?php

namespace App\Http\Controllers;

use App\Models\blogpost;
use Illuminate\Http\Request;


class BlogpostController extends Controller
{
 
    public function index()
    {
        if (hasPermission('blogpost_read')) {
          


            return view("blogpost.index");
        } else {
            abort(403);
        }
    }

    public function blogpost($id) {
        $data['data'] = blogpost::where('blogpage_id', $id)->get();

        return view('Blogpaost', $data);
    }





    public function read()
    {
        try {
            if (hasPermission('blogpost_read')) {
                $blogpost = blogpost::get();
                $json_data["data"] = $blogpost;
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
            if (hasPermission('blogpost_write')) {
                if ($request->id == "") {

                    $blogpost = new blogpost();
                    $blogpost->tittle = $request->tittle;
                    $blogpost->Description1 = $request->Description1;
                    $blogpost->Description2 = $request->Description2;
                    $blogpost->Description3 = $request->Description3;
                    $blogpost->blogpage_id = $request->blogpage_id;
                     if($request->hasFile('image')){
                         $file =$request->file('image');
                         $extension =$file->getClientOriginalExtension();
                         $filename = $request->product_name.'.'.$extension;
                         $file->move('Blogpostimage',$filename);
                         $blogpost->image =$filename;
                     }



                    $blogpost->save();
                } else {
                    $blogpost = blogpost::find($request->id);
                    $blogpost->tittle = $request->tittle;
                    $blogpost->Description1 = $request->Description1;
                    $blogpost->Description2 = $request->Description2;
                    $blogpost->Description3 = $request->Description3;
                    $blogpost->blogpage_id = $request->blogpage_id;
                    if ($request->hasFile('image')) {
                        $File = $request->file('image');
                        $imageExtension = $File->getClientOriginalExtension();
                        $imageFilename = time() . '.' . $imageExtension;
                        $File->move('Blogpostimage', $imageFilename);
                        $blogpost->image = $imageFilename;
                    }
                    $blogpost->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return custom_exception($e);
        }



    }
    public function readById(blogpost $property, $id)
    {
        try {
            // if (hasPermission('property_read')) {
                $data = blogpost::find($id);
                return response()->json($data);
            // } else {
                // throw new \Exception("Unauthorized");
            // }
        } catch (\Exception $e) {
            return custom_exception($e);
        }

    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogpost $property, $id)
    {
        // return $id;
        $blogpost = blogpost::find($id);
        $blogpost->delete();
        return response()->json(["status" => "400"]);
    }
}
