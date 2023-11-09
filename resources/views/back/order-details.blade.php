<!-- Offcanvas Box Start -->
<div class="offcanvas offcanvas-end order-offcanvas" tabindex="-1" id="order-details"
    aria-labelledby="offcanvasExampleLabel" aria-expanded="false">
    <div class="offcanvas-header">
        <h4 class="offcanvas-title" id="offcanvasExampleLabel"> #{{ $order->id }}</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <!-- Include the Blade partial for order details -->
        @include('back.order-details')
    </div>
</div>
<!-- Offcanvas Box End -->
