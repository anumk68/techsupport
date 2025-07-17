@extends('frontend.include.app')
@section('content')

<section class="user_login py_8">
    <div class="container">
    <h2>Create New Account</h2>
    <p>Already have an account? <a href="#">Log in instead!</a></p>
    <form>
      <div class="form-group">
        <input type="text" placeholder="First Name" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Last Name" required>
      </div>
      <div class="form-group">
        <input type="email" class="filled" placeholder="email" required>
      </div>
      <div class="form-group">
        <input type="password" class="filled" placeholder="Password" required>
      </div>
      <div class="form-group">
        <input type="password" placeholder="Confirm Password" required>
      </div>
      <button type="submit" class="btn-register">REGISTER</button>
    </form>
  </div>
</section>
@endsection