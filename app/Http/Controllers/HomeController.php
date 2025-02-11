<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    protected $blogs = [], $blog;
    public function index()
    {
        $this->blogs = Blog::getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('detail', ['blog' => $this->blog]);
    }

}
