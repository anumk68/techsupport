@extends('frontend.include.app')
@section('content')



<section class="user_login py_8">
     <div class="container">
    <h2>Login to Your Account</h2>
    <form>
      <div class="form-group">
        <input type="email" placeholder="Email" value="" required>
      </div>
      <div class="form-group">
        <input type="password" placeholder="Password" required>
      </div>
      <div class="form-remember">
        <input type="checkbox" id="rememberMe">
        <label for="rememberMe">Remember me</label>
      </div>
      <button type="submit" class="btn-login">LOGIN</button>
    </form>
    <div class="register-link">
      No account? <a href="#">Create one here.</a>
    </div>
  </div>
</section>
@endsection