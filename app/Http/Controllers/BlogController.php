<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Mail\BlogPublished;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('author', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('admin', ['only' => ['delete', 'trash', 'restore', 'permanentDelete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = Blog::where('status', 1)->latest()->get();
        // $blogs = Blog::latest()->paginate(10);
        // return view('news.index', compact('blogs'));
        return view('news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $rules = [
          'title' => ['required', 'min:20', 'max:160'],
          'body' => ['required', 'min:202'],
        ];

        $this->validate($request, $rules);

        $input = $request->all();
        // meta stuff
        $input['slug'] = str_slug($request->title);
        $input['metaTitle'] = str_limit($request->title, 55);
        $input['metaDescription'] = str_limit($request->body, 155);
        // image upload
        if ($file = $request->file('featuredImage')) {
            $name = uniqid() . $file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('img/featuredImage/', $name);
            $input['featuredImage'] = $name;
        }

        // $blog = Blog::create($input);
        $blogByUser = $request->user()->blogs()->create($input);
        // sync with categories
        if ($request->category_id) {
            $blogByUser->category()->sync($request->category_id);
        }

        // mail
        // $users = User::all();
        // foreach ($users as $user) {
        //     Mail::to($user->email)->queue(new BlogPublished($blogByUser, $user));
        // }

        Session::flash('blog_created_message', 'Congratulations on createing a great blog!');

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $blog = Blog::findOrFail($id);
        $blog = Blog::whereSlug($slug)->first();
        return view('news.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::latest()->get();
        $blog = Blog::findOrFail($id);

        $bc = array();
        foreach ($blog->category as $c) {
            $bc[] = $c->id - 1;
        }

        $filtered = array_except($categories, $bc);

        return view('news.edit', ['blog' => $blog, 'categories' => $categories, 'filtered' => $filtered]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request->all());
        $input = $request->all();
        $blog = Blog::findOrFail($id);

        if ($file = $request->file('featuredImage')) {
            if ($blog->featured_image) {
                unlink('img/featuredImage/' . $blog->featured_image);
            }
            $name = uniqid() . $file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('img/featuredImage/', $name);
            $input['featuredImage'] = $name;
        }

        $blog->update($input);
        // sync with categories
        if ($request->category_id) {
            $blog->category()->sync($request->category_id);
        }
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('news');
    }

    public function trash()
    {
        $trashedBlogs = Blog::onlyTrashed()->get();
        return view('news.trash', compact('trashedBlogs'));
    }

    public function restore($id)
    {
        $restoredBlog = Blog::onlyTrashed()->findOrFail($id);
        $restoredBlog->restore($restoredBlog);
        return redirect('news');
    }

    public function permanentDelete($id)
    {
        $permanentDeleteBlog = Blog::onlyTrashed()->findOrFail($id);
        $permanentDeleteBlog->forceDelete($permanentDeleteBlog);
        return redirect('news');
    }
}
