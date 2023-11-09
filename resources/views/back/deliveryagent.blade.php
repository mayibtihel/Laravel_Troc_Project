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
                                
                                    <button type="button" class="btn btn-primary" id="showFormButton">Add Delivery Agent</button>

                                    <div class="title-header option-title">
                                        <h5>Modal List</h5>
                                        {{-- <a href="#" class="btn btn-solid">Download all orders</a> --}}
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                         

                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>Order Image</th> --}}
                                                        <th>ID </th>
                                                        <th>name</th>
                                                        <th>Phone</th>
                                                        <th>Address</th>
                                                        <th>edit</th>

                                                        <th>delete</th>
                                                        {{-- <th>Delete order </th> --}}

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($deliveryAgents->isEmpty())
                                                    <p>No delivery agents found.</p>
                                                @else
                                                    @foreach ($deliveryAgents as $deliveryAgent)
                     
                                                            <td>{{ $deliveryAgent->id }}</td>
                                                            <td>{{ $deliveryAgent->name }}</td>
                                                            <td>{{ $deliveryAgent->phone }}</td>
                                                            <td>{{ $deliveryAgent->address }}</td>
                                                            <td>
                                                                <button id="showFormButtonedit" class="edit-button"   data-delivery-agent-id="{{ $deliveryAgent->id }}">Edit</button>
                                                            </td>
                                                            <td>
                                                                
                                                                    <form method="POST" action="{{ route('delivery-agents.destroy', ['deliveryAgent' => $deliveryAgent->id]) }}">
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
             
                


                <div id="deliveryAgentForm" style="display: none;">
                    <form method="POST" action="{{ route('delivery-agents.store') }}">
                        @csrf
                    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add Delivery Agent</button>
                    </form>
                    
                </div>


                {{-- edit form --}}

                @foreach ($deliveryAgents as $deliveryAgent)
                <div id="edit-form-{{ $deliveryAgent->id }}" style="display: none;">
                    <form method="POST" action="{{ route('delivery-agents.update', ['deliveryAgent' => $deliveryAgent->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $deliveryAgent->name }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ $deliveryAgent->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ $deliveryAgent->address }}">
                        </div>
                        <button type="submit">Update</button>
                    </form>
                </div>
                @endforeach

{{-- end edit form --}}
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
<script src="path/to/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#showFormButton").click(function() {
            $("#deliveryAgentForm").toggle(); // Toggle form's visibility
        });
    });
</script>
<script>
   
   
   $(document).ready(function() {
        $(".edit-button").click(function() {
            var deliveryAgentId = $(this).data("delivery-agent-id");
            $("#edit-form-" + deliveryAgentId).toggle();
        });
});

</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.min.js"></script>

</html>


