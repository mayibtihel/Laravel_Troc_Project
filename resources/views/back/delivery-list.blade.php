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
                                        <h5>Deleveries List</h5>
                                        {{-- <a href="#" class="btn btn-solid">Download all orders</a> --}}
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                         

                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>Order Image</th> --}}
                                                        <th>ID </th>
                                                        <th>Delivery Agent:</th>
                                                        <th>order</th>
                                                        <th>status</th>
                    
                                                        <th>delete</th>
                                                        {{-- <th>Delete order </th> --}}

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($deleveries->isEmpty())
                                                    <p>No delivery agents found.</p>
                                                @else
                                                    @foreach ($deleveries as $delivery)
                     
                                                            <td>{{ $delivery->id }}</td>
                                                            <td>
                                                            @if ($delivery->deliveryAgent)
                                                                {{ $delivery->deliveryAgent->name }}
                                                            @else
                                                                agent
                                                            @endif   
                                                            </td>                                    
                                                              <td>{{ $delivery->order_id }}</td>
                                                            <td>{{ $delivery->status }}</td>
                                                            <td>
                                                                
                                                                <form method="POST" action="{{ route('delivery.destroy', ['delivery' => $delivery->id]) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </td>
                                                                
                                                            
                                                            
                                                         
                                                        
                                                        </tr>
                                                       <!-- Modal for order details -->
   
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                               
                                            </table>
                                           <!-- Modal for order details -->

                                            
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
             
                


               


         
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


</html>


