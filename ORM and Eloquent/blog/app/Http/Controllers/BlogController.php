<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }

    public function create() {
        return view('create');
    }

    public function store() {
        $blog = new Blog();
        $blog->title = request('title');
        $blog->address = request('address');
        $blog->blogger = request('blogger');
        $blog->content = request('content');

        $blog->save();
        Session::flash('success', 'Create success');
        return redirect()->route('blogs.index');

    }

    public function edit($id) {
        $blog = Blog::findOrFail($id);

        return view('edit',compact('blog'));
    }

    public function update($id) {
        $blog = Blog::findOrFail($id);
        $blog->title = request('title');
        $blog->address = request('address');
        $blog->blogger = request('blogger');
        $blog->content = request('content');
        $blog->save();

        Session::flash('success', 'Edit success');

        return redirect()->route('blogs.index');

    }

    public function show($id) {
        $blog = Blog::findOrFail($id);
        return view('show', compact('blog'));
    }

    public function destroy($id) {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index');

    }
}
