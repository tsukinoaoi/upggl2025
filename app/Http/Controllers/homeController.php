<?php
namespace App\Http\Controllers;

class homeController extends Controller
{
    
   function index()
   {
      return view('posts.index');
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
