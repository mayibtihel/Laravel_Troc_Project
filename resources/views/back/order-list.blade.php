<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 12:45:35 GMT -->
@include('back.elements.importhead')

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('back.elements.header')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('back.elements.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- Order section Start -->
            <div class="page-body">
                <!-- Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Order List</h5>
                                        {{-- <a href="#" class="btn btn-solid">Download all orders</a> --}}
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                          

                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>Order Image</th> --}}
                                                        <th>ID commande</th>
                                                        <th>price</th>
                                                        <th>Date creation</th>
                                                        <th>status</th>
                                                        <th>change status</th>

                                                        <th>details</th>
                                                        <th>Deliver</th>
                                                        {{-- <th>Delete order </th> --}}

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($orders->isEmpty())
                                                    <p>No orders found.</p>
                                                @else
                                                    @foreach ($orders as $order)
                                                        {{-- <tr data-bs-toggle="offcanvas" href="#order-details"> --}}
                                                            {{-- <td>
                    <span class="order-image">
                        <img src="{{ Vite::asset('resources/backassets/assets/images/product/2.png') }}" alt="users">
                    </span>
                </td> --}}
                                                            <td>{{ $order->id }}</td>
                                                            <td>{{ $order->total_price }}</td>
                                                            <td>{{ $order->creation_date }}</td>

                                                            <td>
                                                                <!-- Display status with conditional class -->
                                                                <span class="status-{{ $order->status }}">
                                                                    {{ $order->status }}
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <!-- Dropdown for changing status -->
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Change Status
                                                                    </button>
                                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{ route('order.changeStatus', ['id' => $order->id, 'status' => 'Pending']) }}">Pending</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{ route('order.changeStatus', ['id' => $order->id, 'status' => 'Delivered']) }}">Delivered</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{ route('order.changeStatus', ['id' => $order->id, 'status' => 'Canceled']) }}">Canceled</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        {{-- <a href="/admin/order-detail">
                                                                            <i class="ri-eye-line"></i>
                                                                        </a> --}}
                                                                        {{-- <a href="#" class="btn mb-20 w-100" data-order-id="{{ $order->id }}" data-bs-toggle="offcanvas" data-bs-target="#order-details">
                                                                            <i class="ri-eye-line"></i> View 
                                                                        </a> --}}
                                                                        <a href="#" class="view-details" data-bs-toggle="modal" data-bs-target="#orderDetailsModal-{{ $order->id }}">
                                                                            <i class="ri-eye-line"></i> View
                                                                        </a>
                                                                        
                                                                    </li>
                                                                    <!-- Add more action links here -->
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <button class="deliver-button"   data-order-id="{{ $order->id }}">Deliver</button>
                                                            </td>
                                                        </tr>


                                                   
                                                       <!-- Modal for order details -->
    <div class="modal fade" id="orderDetailsModal-{{ $order->id }}" tabindex="-1" aria-labelledby="orderDetailsModalLabel-{{ $order->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderDetailsModalLabel-{{ $order->id }}">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Order details content for this specific order -->
                    <div>
                        <p>Order ID: {{ $order->id }}</p>
                        <p>Total Price: {{ $order->total_price }}</p>
                        <p>Creation Date: {{ $order->creation_date }}</p>
                        <p>status: {{ $order->status }}</p>
                        {{-- <p>Product: {{ $order->product->name }}</p> --}}
                        {{-- <p> From Owner : {{ $order->product->user_id }}</p> --}}
                        <p>To Customer: {{ $order->user ? $order->user->name : 'User Not Found' }}</p>

                   <div class="product-price">    <p>Total Price: {{ $order->total_price }}</p></div>
                     
                        <!-- Add more order details as needed -->
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <iframe src="{{ route('preview-order-pdf', ['orderId' => $order->id]) }}" width="100%" height="500"></iframe>

                    <button class="btn btn-primary" onclick="downloadPdf({{ $order->id }})">Download as PDF</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                               
                                            </table>
                                           <!-- Modal for order details -->
                                           {{ $orders->links() }}

                                            
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table End -->


{{-- deliver modal --}}
<form id="deliveryForm" method="POST" action="{{ route('create-delivery') }}" style="display: none;">
    @csrf
    <input type="hidden" name="order_id" id="order_id" value="">
    <label for="delivery_agent">Select a Delivery Agent:</label>
    <select id="delivery_agent" name="delivery_agent">
        @foreach ($deliveryAgents as $deliveryAgent)
            <option value="{{ $deliveryAgent->id }}">{{ $deliveryAgent->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Confirm</button>
</form>


{{-- end deliver modal --}}
                <!-- footer start-->
                @include('back.elements.footer')
            </div>
            <!-- Order section End -->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal start -->
    @include('back.elements.logoutMessage')
    <!-- Modal end -->


    @include('back.elements.importfoot')

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function downloadPdf(orderId) {
    // Make an AJAX request to the Laravel route
    fetch('/download-order-pdf/' + orderId)
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'order_details.pdf';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        });
}
</script>


<script>
    $(document).ready(function () {
        $(".deliver-button").click(function () {
            console.log("Button clicked"); // Add this line
            const orderId = $(this).data("order-id");
            $("#order_id").val(orderId);
            $("#deliveryForm").show();
        });
    });
</script>



</html>


