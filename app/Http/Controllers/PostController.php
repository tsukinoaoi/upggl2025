<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    
   function index(Request $request)
   {
         $postsQuery = Post::query();

    if ($request->filled('estado')) {
        $postsQuery->filterByEstado($request->input('estado'));
    }

    if ($request->filled('keyword')) {
        $postsQuery->filterByKeyword($request->input('keyword'));
    }

    $posts = $postsQuery->orderBy('created_at', 'desc')->get();

    return view('posts.index', compact('posts'));

   }

   function create()
   {
     return view('posts.create');
   }
   

   function edit()
   {
    return view('posts.edit');
   }

   function show($id)
   {
    return view('posts.show',["post" => $id] );
   }

}
