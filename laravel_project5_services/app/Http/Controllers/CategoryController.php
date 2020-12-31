<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\createCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories = Category::all();
        $categories = Category::orderByDesc('cat_id')->get();
        return view("dashboard.categories.create_category", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/categories/create_category");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCategoryRequest $request)
    {
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('category_images', $filename);
        }
        Category::create( [
            "cat_name"        =>$request->cat_name,
            "cat_desc"        =>$request->cat_desc,
            "cat_image"       =>$filename,
        ]);
        return redirect("/categories");

        // this method will not be effective in uploading image
//        Category::create($request->all());
//        return redirect("/categories" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard/categories/edit_category' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(createCategoryRequest $request, $id)
    {
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('category_images', $filename);
        }
        else {
            $filename = Category::find($id)->cat_image;
        }
        Category::findOrFail($id)->update( [
            "cat_name"        =>$request->cat_name,
            "cat_desc"        =>$request->cat_desc,
            "cat_image"       =>$filename,
        ]);
        return redirect("/categories");

// this method will not be effective in uploading image
//        $category = Category::findOrFail($id);
//        $category->update($request->all());
//        return redirect("/categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect("/categories");
    }
}
