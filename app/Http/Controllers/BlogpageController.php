<?php

namespace App\Http\Controllers;

use App\Models\blogpage;
use App\Models\blogpost;
use Illuminate\Http\Request;


class BlogpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (hasPermission('blogpage_read')) {
          

            return view("blogpage.index");
        } else {
            abort(403);
        }
    }

    public function blog() {

        $data =  blogpage::get();

return view('Blog', compact('data'));

    }





    public function read()
    {
        try {
            if (hasPermission('blogpage_read')) {
                $blogpage = blogpage::get();
                $json_data["data"] = $blogpage;
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
            if (hasPermission('blogpage_write')) {
                if ($request->id == "") {

                    $blogpage = new blogpage;
                    $blogpage->tittle = $request->tittle;
                    $blogpage->Description = $request->Description;
                    $blogpage->underdecsription = $request->underdecsription;
                     if($request->hasFile('image')){
                         $file =$request->file('image');
                         $extension =$file->getClientOriginalExtension();
                         $filename = $request->product_name.'.'.$extension;
                         $file->move('BlogImage',$filename);
                         $blogpage->image =$filename;
                     }



                    $blogpage->save();
                } else {
                    $blogpage = blogpage::find($request->id);
                    $blogpage->tittle = $request->tittle;
                    $blogpage->Description = $request->Description;
                    $blogpage->underdecsription = $request->underdecsription;
                    if ($request->hasFile('image')) {
                        $File = $request->file('image');
                        $imageExtension = $File->getClientOriginalExtension();
                        $imageFilename = time() . '.' . $imageExtension;
                        $File->move('BlogImage', $imageFilename);
                        $blogpage->image = $imageFilename;
                    }
                    $blogpage->save();
                }
                return response()->json(["status" => "200"]);
            } else {
                throw new \Exception("Unauthorized");
            }
        } catch (\Exception $e) {
            return custom_exception($e);
        }



    }
    public function readById(blogpage $property, $id)
    {
        try {
            // if (hasPermission('property_read')) {
                $data = blogpage::find($id);
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
    public function destroy(blogpage $property, $id)
    {
        // return $id;
        $blogpage = blogpage::find($id);
        $blogpage->delete();
        return response()->json(["status" => "400"]);
    }
   
  
    
        
    
    

}
