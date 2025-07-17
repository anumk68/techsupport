@extends('frontend.include.app')
@section('content')

<section class="cart_section">
    <div class="container py-5">
  <h2 class="fw-bold mb-4">Cart</h2>
  <div class="row g-4">
    
    <!-- Left Column -->
    <div class="col-lg-7">
      <div class="card p-4 card-shadow">
        <h5 class="fw-bold mb-3">
          <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" alt="icon" width="24" class="me-2">
          One Time Fix
        </h5>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>PC Optimization</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Removing malicious extensions from browser</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Uninstalling 3rd party applications</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Optimizing Windows startup</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Updating Printer Drivers</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Updating system services</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Printer setup (Wifi or LAN)</li>
          <li class="mb-2"><i class="bi bi-check2-circle check-icon me-2"></i>Setting up wireless printer via phone</li>
        </ul>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <span class="fw-bold fs-5">$99.00</span>
          <button class="btn chat-btn">Start Chat</button>
        </div>
      </div>
      <p class="mt-4 fs-5">What else can we help with?</p>
    </div>

    <!-- Right Column -->
    <div class="col-lg-5">
      <div class="card p-4 card-shadow">
        <h6 class="fw-bold mb-3">Order Summary</h6>

        <div class="alert alert-success py-2 d-flex justify-content-between align-items-center">
          <span class="small">Plan added to cart.</span>
          <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
        </div>

        <div class="border rounded p-3 mb-3">
          <div class="d-flex justify-content-between">
            <strong>One Time Fix</strong>
            <strong>$99.00</strong>
          </div>
          <p class="text-muted small mb-2">Fast and easy solutions for your computer or printer problems.</p>
          <a href="#" class="text-danger small"><i class="bi bi-trash"></i> Remove</a>
        </div>

        <ul class="list-unstyled mb-3">
          <li class="d-flex justify-content-between"><span>Item(s)</span><span>1</span></li>
          <li class="d-flex justify-content-between"><span>Sub Total</span><span>$99.00</span></li>
        </ul>

        <hr>
        <div class="d-flex justify-content-between fw-bold mb-3">
          <span>Total</span><span>$99.00</span>
        </div>
       <div class="checkout_btn">
         <button class="btn btn-primary w-100 ">Checkout</button>
       </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection