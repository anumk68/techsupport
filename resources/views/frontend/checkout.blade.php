@extends('frontend.include.app')
@section('content')
<section class="checkout_page py_8">
  <div class="container">
    <div class="row">
      <!-- Billing Details -->
      <div class="col-md-7 mb-4">
        <h4 class="mb-3">Billing details</h4>
        <form>
          <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="name" />
            </div>
            <div class="col">
              <input type="email" class="form-control" placeholder="email" />
            </div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Phone *" />
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="House number and street name" />
          </div>
          <div class="row mb-3">
            <div class="col">
              <select class="form-select"><option>Select Country</option></select>
            </div>
            <div class="col">
              <select class="form-select"><option>Select State</option></select>
            </div>
            <div class="col">
              <select class="form-select"><option>Select City</option></select>
            </div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Postcode / ZIP" />
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
          </div>
        </form>
      </div>

      <!-- Your Order -->
      <div class="col-md-5">
        <div class="p-4 border">
          <h5 class="mb-3">Your Order</h5>
          <table class="table mb-3">
            <thead>
              <tr>
                <th>Product</th>
                <th class="text-end">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>One Time Fix</td><td class="text-end">$99</td></tr>
         
        
              <tr><th>Total</th><td class="text-end fw-bold">₹2,268.00</td></tr>
            </tbody>
          </table>
          <button class="theme-btn -100">PLACE ORDER</button>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection