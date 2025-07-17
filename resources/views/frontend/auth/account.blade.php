@extends('frontend.include.app')
@section('content')


    <div class="page-banner-wrap page_banner_wrapss text-center bg-cover"
        style="background-image: url('assets/img/privacy_bgimg.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Account</h1>
            </div>
        </div>
    </div>
<section class="account py_8">
  <div class="container">
  <div class="row">
    <!-- Sidebar Navigation -->
    <div class="col-md-3 sidebar">
      <ul class="nav nav-pills flex-md-column flex-row justify-content-around" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="dashboard-tab" data-bs-toggle="pill" data-bs-target="#dashboard" type="button" role="tab"><i class="fa fa-tachometer"></i> Dashboard</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="orders-tab" data-bs-toggle="pill" data-bs-target="#orders" type="button" role="tab"><i class="fa fa-shopping-cart"></i> Orders</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="account-tab" data-bs-toggle="pill" data-bs-target="#account" type="button" role="tab"><i class="fa fa-user"></i> Account Details</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="logout-tab" data-bs-toggle="pill" data-bs-target="#logout" type="button" role="tab"><i class="fa fa-sign-out"></i> Logout</button>
        </li>
      </ul>
    </div>

    <!-- Content Area -->
    <div class="col-md-9 tab-content" id="dashboardTabsContent">
      <!-- Dashboard -->
      <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
        <h4>Dashboard</h4>
        <p>Hello, <strong>mamta devi</strong></p>
        <p>From your account dashboard you can check your recent orders, manage your address and edit your account info.</p>
      </div>

      <!-- Orders -->
      <div class="tab-pane fade" id="orders" role="tabpanel">
        <h4>Orders</h4>
        <div class="table-responsive">
          <table class="table table-bordered mt-3">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Invoice</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>#60</td>
                <td>27, May, 2025</td>
                <td>New</td>
                <td>₹1,598.00</td>
                <td><a href="#">Download</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>#61</td>
                <td>27, May, 2025</td>
                <td>New</td>
                <td>₹2,227.00</td>
                <td><a href="#">Download</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Account Details -->
      <div class="tab-pane fade" id="account" role="tabpanel">
        <h4>Account Details</h4>
        <form class="mt-4">
          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="col-md-6 mb-2">
              <input type="email" class="form-control" placeholder="email">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Phone">
            </div>
            <div class="col-md-6 mb-2">
              <input type="text" class="form-control" placeholder="Zip Code">
            </div>
          </div>

          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Address"></textarea>
          </div>

          <div class="row mb-3">
            <div class="col-md-4 mb-2">
              <input type="text" class="form-control" placeholder="Select Country">
            </div>
            <div class="col-md-4 mb-2">
              <input type="text" class="form-control" placeholder="Select State">
            </div>
            <div class="col-md-4 mb-2">
              <input type="text" class="form-control" placeholder="Select City">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>

      <!-- Logout -->
      <div class="tab-pane fade" id="logout" role="tabpanel">
        <h4>You have been logged out.</h4>
      </div>
    </div>
  </div>
</div>

</section>
@endsection