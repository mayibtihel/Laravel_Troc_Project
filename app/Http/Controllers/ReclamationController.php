<?php

namespace App\Http\Controllers;

use App\Models\Product;


use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $reclamations = Reclamation::all();
            return view('back.Reclamation.reclamations_list', ['reclamations' => $reclamations]);
        }

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.Reclamation.add_reclamation');

    }




    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = auth()->user();
      //  $owner = auth()->user.username();

        // Create a new Product instance and set its user_id
        $reclamation = new Reclamation;

        //$product->user_id = $user->id;


        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $reclamation->image = $postImage;
        }

        // Set the other product properties from the request
        $reclamation->title = $request->input('title');
        $reclamation->user_id = $user->id;


        // $product->owner = $request->input('owner');

        $reclamation->description = $request->input('description');

        // Save the product to the database
        $reclamation->save();





        return redirect()->route('products.list')->with('success', 'Product has been created successfully!');


    }




    public function showReclamation()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        $reclamations = Reclamation::where('user_id', $user->id)->get();
        // Retrieve reclamation records related to the authenticated user
       /* $reclamations = Reclamation::where('user_id', $user->id)
            ->where('id', $id)
            ->first();*/



        // Load the view and pass the reclamation data to it
        return view('front.Reclamation.my_reclamation', ['reclamations' => $reclamations]);
    }

  /*  public function showReclamations()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Retrieve reclamation records related to the authenticated user
        $reclamations = Reclamation::where('user_id', $user->id)->get();

        // Load the view and pass the reclamation data to it
        return view('front.Reclamation.my_reclamation', ['reclamations' => $reclamations]);
    }
    */








    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reclamation = Reclamation::find($id);

        $reclamation->delete();
        return redirect()->route('list.reclamations')->with('success', 'Reclamation has been deleted successfully');

    }



}
