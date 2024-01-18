<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_posts = DB::table("posts")->get();
        return view("posts/show_posts", compact("my_posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts/create_posts");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table("posts")->insert([
            // الموجود في الداتابيز => f اللي جاي من الفورم
            "title"=>$request->title,
            // "title"=>$request["title"],
            "body"=>$request["body"]
        ]);
        header("Refresh:0.1;url=create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $my_post = DB::table("posts")->where("id", $id)->first();
        return view("posts/edit_posts", compact("my_post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table("posts")->where("id", $id)->update([
            "title" => $request->title,
            "body" => $request->body
        ]);
        return redirect()->route("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("posts")->where("id", $id)->delete();
        return redirect()->route("posts");
    }
}
