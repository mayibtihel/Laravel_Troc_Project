<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        {
            $catproducts = CategoryProduct::all();

            return view('back.CategoryProduct.categories_list',['catproducts'=>$catproducts]);
        }

    }



    /*public function create()
    {
        $categoryProducts = CategoryProduct::all();

        return view('products.create', compact('categoryProducts'));
    }*/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.CategoryProduct.add_new_category');

    }



    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description'=> 'required'

        ],
            [
                'title.required' => "CategoryProduct name is required",
                'description.required' => "CategoryProduct description is required",

            ]);

        $input = $request->all();



        CategoryProduct::create($input);


        return redirect()->route('category.adminst')->with('success', 'Category has been created successfully!');

    }





    public function edit($id)
    {
        $category = CategoryProduct::find($id);
        return view('back.CategoryProduct.edit_category', ['cat' => $category]);
    }


    public function update(Request $request, $id)
    {
        $category = CategoryProduct::find($id);


        {
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ],
                [
                    'title.required' => "Category title is required",
                    'description.required' => "Category description is required"

                ]);


            $input = $request->all();

            $category->update($input);


            return redirect()->route('categories.products', ['id' => $category->id])->with('success', 'Category updated successfully.');
        }

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catProduct = CategoryProduct::find($id);

        $catProduct->delete();
        return redirect()->route('categories.products')->with('success', 'Category has been deleted successfully');

    }




}
