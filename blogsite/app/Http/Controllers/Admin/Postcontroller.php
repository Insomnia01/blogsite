<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Contact;
class Postcontroller extends Controller
{
    public function Index()
    {
        $posts = Post::all();
        return view('Admin.postlist',compact('posts'));
    }

    public function Add()
    {
        return view('Admin.add_post');
    }

    public function Create(Request $request)
    {
        DB::table('post')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
            'date' => now()->year(),
          ]);
          return redirect()->Route("admin_post");
    }
    
    public function inbox()
    {
        $inbox = Contact::all();
        return view('Admin.messages',compact('inbox'));
    }
}
