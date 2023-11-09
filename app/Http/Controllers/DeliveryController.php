<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deleveries = Delivery::all();
        return view('back.delivery-list',['deleveries'=>$deleveries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function createDelivery(Request $request)
{
    $orderId = $request->input('order_id');
    $deliveryAgentId = $request->input('delivery_agent');

    // Create a new delivery
    $delivery = new Delivery();
    $delivery->order_id = $orderId;
    $delivery->delivery_agent_id = $deliveryAgentId;
    $delivery->status = "Pending";
    $delivery->save();

    // You can also update the order status to mark it as delivered, if needed.

    return redirect()->back()->with('success', 'Delivery successful.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        if ($delivery) {
            $delivery->delete();
    
            return redirect()->route('deliveries.index')->with('success', 'Delivery agent deleted successfully.');
        } else {
            return redirect()->route('deliveries.index')->with('error', 'Delivery agent not found.');
        }
    }
}
