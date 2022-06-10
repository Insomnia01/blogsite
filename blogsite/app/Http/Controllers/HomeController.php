<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index(){
    $data = Post::orderBy('id', 'desc')->take(6)->get();
    return view('layouts.home',compact('data'));
  }  

  public function about(){
    return view('layouts.aboutus');
  }  

  public function contact(){
    return view('layouts.contact');
  }  

  public function content(){
    $posts = Post::orderBy('id','desc')->paginate(6);
    return view('layouts.content', compact('posts'));
  } 

  public function insidecontent(Post $id){
    $data = Post::find($id)->last();
    $datalist = DB::table('post')->get();
    return view('layouts.insidecontent',compact('data','datalist'));
  } 

    //admin işlemleri
    public function login()
    {
      return view('admin.login');
    }

    public function logincheck(Request $request)
    {
      if ($request->isMethod('post')) {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          return redirect()->intended('admin');
        }
        return back()->withErrors([
          'email' => 'error email',
        ]);
      }
      else {
        return view('admin.login');
      }
    }

    public function logout(Request $request)
    {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('login');
    }
}