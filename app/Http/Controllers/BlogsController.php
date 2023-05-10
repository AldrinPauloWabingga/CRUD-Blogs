<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\User;
use App\Models\Post;

class BlogsController extends Controller
{
    
    public function index()
    {
        $blogs = Blogs::all();
        $authors = User::all();
        return view('dashboard', compact(['blogs','authors']));
    }

    public function create()
    {
        $authors = User::all();
       
        return view ('blogs.create', compact(['authors']));
    }

    
    public function store(StoreBlogRequest $request)
    {
        Blogs::create($request->all());
        return redirect (route('dashboard'));
    }

   
    public function show(Blogs $blog)
    {
        $blogs = User::find($blog->user_id);
       return view('blogs.show', compact(['blog']));
    }

   
    public function edit(Blogs $blog)
    {
        $author = User::find($blog->user_id);
        return view('blogs.edit', compact(['blog','author']));
    }

    
    public function update(Request $request, Blogs $Blog)
    {
        $Blog->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request ->content,
           ]);
            return redirect(route('blogs.index'));
    }

   
    public function destroy(Blogs $blog)
    { 
        $blog->delete();
        return redirect(route('dashboard'));
    }
}
