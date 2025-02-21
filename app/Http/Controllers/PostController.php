<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Afficher tous les posts
    public function index()
    {
        $posts = Post::with('user', 'comments')->get();
        return view('posts.index', compact('posts'));
    }

    // Afficher un seul post par ID
    public function show($id)
    {
        $post = Post::with('user', 'comments')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // Ajouter un post
    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index'); 
    }

    // Ajouter un commentaire à un post
    public function addComment(Request $request, $postID)
    {
        Comment::create([
            'userID' => $request->userID,
            'postID' => $postID,
            'content' => $request->content
        ]);

        return redirect()->route('posts.show', $postID);
    }

    // Afficher tous les commentaires d'un post
    public function getComments($postID)
    {
        $comments = Comment::where('postID', $postID)->with('user')->get();
        return view('comments.index', compact('comments'));
    }
}
