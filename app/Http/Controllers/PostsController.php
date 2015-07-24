<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function __construct()
    {
        //SET DEFAULT PAGINATION
        $this->paginate = 5;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Post $posts)
    {
        $posts = $posts::where('name', '>', 5)->paginate($this->paginate);
        return view('blog.index', compact('posts'))->with('title' , 'Astura Blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($value)
    {
        $post = Post::whereSlug($value)->first();
        return view('blog.show', compact('post'))->with('title' , $post->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
