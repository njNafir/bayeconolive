<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogController extends AppBaseController
{
    
    // function __construct()
    // {
    //      $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:blog-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    // }

    public function index(Request $request)
    {
        /** @var Blog $blogs */
        $blogs = Blog::withSearch()->latest()->paginate(10);

        return view('admin.blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request, Blog $blog)
    {
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['image'] = $blog->uploadFile($field = 'image', $save_title=$request->title, $path=null);

        /** @var Blog $blog */
        $blog = Blog::create($input);

        Flash::success('Blog saved successfully.');

        return redirect(route('admin.blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Blog $blog */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('admin.blogs.index'));
        }

        return view('admin.blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Blog $blog */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('admin.blogs.index'));
        }

        return view('admin.blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param int $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        /** @var Blog $blog */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');
            return redirect(route('admin.blogs.index'));
        }

        $blog->fill($request->all());
        $blog->image = $blog->delete_existing_and_upload_file($field = 'image', $save_title=$request->title, $path=null);
        $blog->save();

        Flash::success('Blog updated successfully.');

        return redirect(route('admin.blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Blog $blog */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('admin.blogs.index'));
        }

        $blog->delete();

        Flash::success('Blog deleted successfully.');

        return redirect(route('admin.blogs.index'));
    }
}
