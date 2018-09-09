<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for debugging to see our db 

        // return Post::all();
        /* is part of elaquin to interrect with DB all()will fetch all the posts
         and put it into a var that will be passed into the view
         $posts = Post::all();
         */
        /* this will only return the post 2 so if we only wnated to see that one
        $post = Post::where('title', 'Post Two')->get();
        */
        
        
        
        /* here we can order those by whatever we choose
            order by title, descending, we also need to pass the get() in ordoer to work */

         // * Limited # of posts   
        //$posts = Post::orderby('title', 'desc')->take(1)->get(); // limited #of posts
        // * Pagination we also need to add {{$posts->links()}} tot the template file
        // ordered by created dated we can add title to order by title 
         $posts = Post::orderby('created_at', 'desc')->paginate(4);

        //  $posts = Post::orderby('title', 'desc')->get();
         // return the view in the file posts with the index that we created for the layout 
        return view('posts.index')->with('posts', $posts);

        


        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validation of the submit reqest & array of rules:
            title - required
        */ 
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create post with tinker
        $post = new Post;
        $post->title = $request->input('title'); // will get what was submitted in the form
        $post->body = $request->input('body'); // will get what was submitted in the form
        $post->save();

        // redirect after save with success message will pull it from messages file
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // fetch if from DB Post is our model
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
