@extends('layouts.master', ['title' => 'Login'])

@section('navigation')
  <nav class="navbar navbar-default navbar-shadow">
    <div class="container container-padding">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MyTweet</a>
      </div>
    </div>
  </nav>
@endsection

@section('content')
  <div class="container container-padding">
      <div class="jumbotron">
        <div class="container container-padding login-content">
          <p class="login-title">Log in to MyTweet</p>
          <form>
              <div class="row">
                  <div class="col-md-6">
                    <input type="text" placeholder="Email or username" class="form-control input-login" >
                    <br>
                    <input type="text" placeholder="Password" class="form-control input-login">  
                  </div>
              </div><br>
              <button class="btn btn-info btn-tweet login-margin">Log in</button>
              <label class="login-helpe login-helper-black" class="checkbox-inline"><input type="checkbox" value=""> Remember me</label>
              <span class="separator">&middot;</span>
              <a class="primary-link login-helper" href="#">Forgot password?</a>
              <br><br>
              <p class="login-helper">New to MyTweet? 
                  <a class="primary-link" href="signup">Sign up now »</a>
              </p>
              <p class="login-helper">Already using MyTweet via text message? 
                  <a class="primary-link" href="#">Activate your account »</a>
              </p>
          </form>
        </div>
      </div>
  </div>
@endsection