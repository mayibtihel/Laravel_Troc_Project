<?php

namespace App\Http\Controllers;

use App\Models\DeliveryAgent;
use Illuminate\Http\Request;

class DeliveryAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryAgents = DeliveryAgent::all();
        return view('back.deliveryagent',['deliveryAgents'=>$deliveryAgents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery-agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $request->validate([
                'name' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
            ]);
        
            DeliveryAgent::create($data);
        
            return redirect()->route('delivery-agents.list')->with('success', 'Delivery agent added successfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryAgent  $deliveryAgent
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryAgent $deliveryAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryAgent  $deliveryAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryAgent $deliveryAgent)
    {
        return view('delivery-agents.edit', ['deliveryAgent' => $deliveryAgent]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryAgent  $deliveryAgent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryAgent $deliveryAgent)
    {
         // Validate the form input
    $validatedData = $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'address' => 'required|string',
    ]);

    // Update the delivery agent's information
    $deliveryAgent->update($validatedData);

    // Redirect to a success page or perform other actions

    return redirect()->route('delivery-agents.list')->with('success', 'Delivery Agent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryAgent  $deliveryAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryAgent $deliveryAgent)
    {
         // Check if the delivery agent exists
    if ($deliveryAgent) {
        $deliveryAgent->delete();

        return redirect()->route('delivery-agents.list')->with('success', 'Delivery agent deleted successfully.');
    } else {
        return redirect()->route('delivery-agents.list')->with('error', 'Delivery agent not found.');
    }
    }
}
