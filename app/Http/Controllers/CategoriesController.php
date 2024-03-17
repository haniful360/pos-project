<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->data['categories'] = Category::all();
        $categories = Category::all();

        return view('category.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['headline'] = 'Add new Category';
        $this->data['mode'] = 'crete';

        return view('category.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // return $request->all();
        $formData = $request->all();

        if(Category::create($formData)){
            session()->flash('message', $formData['title'] .' Added Successfully');

        }
        return redirect()->to('categories');
    }

    /**
     * Display the specified resource.
     */

    public function edit($id)
    {
        $this->data['category'] = Category::findOrFail($id);
        $this->data['mode'] = 'edit';
        $this->data['headline'] = 'Update Category';

        return view('category.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $data = $request->all();

        $category = Category::find($id);
        $category->title = $data['title'];
        // $category->title = $request['title'];

        if($category->save()){
            session()->flash('message', 'Category update successfully');
        }

        return redirect()->to('categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        if(Category::find($id)->delete()){

            session()->flash('message', 'Category  Delete Successfully');
        }

        return redirect()->to('categories');
    }
}