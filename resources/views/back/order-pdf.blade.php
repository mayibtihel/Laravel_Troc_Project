<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            font-size: 28px;
            color: #333;
            text-align: center;
        }

        .invoice-info {
            margin: 20px 0;
            text-align: right;
        }

        .invoice-info p {
            margin: 2px 0;
            font-size: 16px;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
            text-align: right;
        }
    </style>
    </head>
<body>

    <h2>Invoice</h2>

    <div class="invoice-info">
        <p>Date: {{ $order->creation_date }}</p>
        <p>Invoice #: {{ $order->id }}</p>
    </div>

    <h2>Order Details</h2>
    
    <p>Status: {{ $order->status }}</p>
    {{-- <p>Product: {{ $order->product->name }}</p> --}}
    {{-- <p>From Owner: {{ $order->product->user_id }}</p> --}}
    <p>To Customer: {{ $order->user_id }}</p>

 <div class="total">
        <p> Total Price: {{ $order->total_price }}</p>
    </div>
    <!-- Add more order details as needed -->

    <!-- Include CSS styles or stylesheets as needed -->
</body>
</html>
