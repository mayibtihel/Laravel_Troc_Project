<?php
namespace App\Http\Controllers;


use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use App\Models\Order;
use Illuminate\Http\Response;


class generatePdfController extends Controller
{
public function generatePdf()
{
    $data = [
        'title' => 'My PDF Title',
        'content' => 'This is the content of my PDF document.',
    ];

    $pdf = PDF::loadView('pdf_template', $data);

    return $pdf->download('my_pdf_document.pdf');
}

public function downloadOrderPdf($orderId)
{
    $order = Order::find($orderId);
    
    if (!$order) {
        abort(404); // Handle not found orders
    }
    
    $pdf = PDF::loadView('back.order-pdf', compact('order'));
    
    return $pdf->download('order_details.pdf');
}


public function generateOrderPdf($orderId)
{
    $order = Order::find($orderId);
    
    if (!$order) {
        abort(404); // Handle not found orders
    }
    
    $pdf = PDF::loadView('back.order-pdf', compact('order'));
    
    return response($pdf->output(), 200, [
        'Content-Type' => 'application/pdf',
    ]);
}


public function previewOrderPdf($orderId)
{
    $order = Order::find($orderId);

    if (!$order) {
        abort(404); // Handle not found orders
    }

    $pdf = PDF::loadView('back.order-pdf', compact('order'));

    return response($pdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="order_details.pdf"',
    ]);
}


public function testPdfGeneration($orderId)
{
    $order = Order::find($orderId);

    if (!$order) {
        abort(404); // Handle not found orders
    }

    $pdf = PDF::loadView('back.test_view', compact('order'));

    return response($pdf->output())
    ->header('Content-Type', 'application/pdf')
    ->header('Content-Disposition', 'inline; filename="test.pdf"');

     

}


}