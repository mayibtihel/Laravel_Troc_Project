<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        {
            $products = Product::all();
            return view('back.Products.products_list',['products'=>$products]);
        }

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prod_list()
    {


        $product = Product::all();
        return view('front.Products.products',['product'=>$product]);

    }




    public function prod_category()
    {


        $product = Product::all();
        $categoryProducts = CategoryProduct::all();

        return view('front.Products.add_product',compact('product', 'categoryProducts'));

    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryProducts = CategoryProduct::pluck('title', 'id');

        return view('front.Products.add_product', compact('categoryProducts'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_create()
    {
        return view('back.Products.add_new_product');

    }



    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=> 'required',
            'category_product' => 'required|exists:category_products,id'


        ],

            [
                'name.required' => "Product name is required",
                'description.required' => "Product description is required",
                //'description.max' => "Product description must not be greater than 30"

            ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        $input->category_product_id = $request->input('category_product');

        Product::create($input);


        return redirect()->route('products.adminlist')->with('success', 'Product has been created successfully!');

    }



    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        // Create a new Product instance and set its user_id
        $product = new Product;

        //$categories = CategoryProduct::select('title', 'id')->get();
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_product_id' => 'required|exists:category_products,id',
        ]);


        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $product->image = $postImage;
        }

        // Set the other product properties from the request
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->user_id = $user->id;
        $product->category_product_id = $request->input('category_product_id');


        // Save the product to the database
        $product->save();




        return redirect()->route('products.list')->with('success', 'Product has been created successfully!');


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve a single product by its ID
        $product = Product::find($id);

        if (!$product) {
            // Handle the case where the product with the given ID is not found
            return redirect()->route('products.adminlist')->with('error', 'Product not found');
        }

        // Return a view with the product data
        return view('front.Products.SingleProduct', compact('product'));


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
   /* public function edit(Product $product)
    {
        return view('front.Products.edit_product', ['prod'=>$product]);
      // return view('companies.edit',compact('product'));
    }*/



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request,  Product $product, )
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=> 'required'
        ],
            [
                'name.required' => "Product name is required",
                'description.required' => "Product description is required"

            ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }
        $product->update($input);

        return redirect()->route('products.update')->with('success','Product updated successfully');
    }*/





    public function edit($id)
    {
        $product = Product::find($id);
        return view('front.Products.edit_product', ['prod' => $product]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);


        {
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required',


            ],
                [
                    'name.required' => "Product name is required",
                    'description.required' => "Product description is required"

                ]);


            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $postImage);
                $input['image'] = "$postImage";
            }
            $product->update($input);



            return redirect()->route('products.list', ['id' => $product->id])->with('success', 'Product updated successfully.');
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
            $product = Product::find($id);

            $product->delete();
            return redirect()->route('products.list')->with('success', 'Product has been deleted successfully');

        }




    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function removeByAdmin($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.adminst')->with('success', 'Product has been deleted successfully');


    }

}
