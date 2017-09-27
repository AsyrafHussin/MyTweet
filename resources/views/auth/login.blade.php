<!DOCTYPE html>
<html>
<head>
    <title>MyTweet | Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
    body{
        background: #e6ecf0;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 16px;
    }

    a{
        color: #37a1e3;
    }

    .container{
        padding-left: 5%;
        padding-right: 5%;
    }
    
    .navbar{
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.1);
    }

    .jumbotron{
        background: #fff;
        border: 1px solid #d4d8da;
    }

    .btn-tweet{
        background: #1da1f2;
        border-radius: 20px;
        text-weight: bold;
        font-size: 16px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .signup-helper{
        font-size: 14px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container">
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

    <div class="container">
        <div class="jumbotron">
          <div class="container" style="padding:10%;margin-top:-10%;padding-bottom:0px;">
            <h3>Log in to MyTweet</h3><br>
            <form>
                <div class="row">
                    <div class="col-md-6">
                      <input type="text" placeholder="Email or username" class="form-control" >
                      <br>
                      <input type="text" placeholder="Password" class="form-control">  
                    </div>
                </div><br>
                <button class="btn btn-info btn-tweet" style="margin-right: 10px;">Login in</button>
                <label class="checkbox-inline"><input type="checkbox" value=""> Remember me</label>
                <span class="separator">&middot;</span>
                <a href="#">Forgot password?</a>
                <br><br>
                <p style="font-size: 16px;color: #657786;font-weight: 400;">New to MyTweet? 
                    <a href="#">Sign up now »</a>
                </p>
                <p style="font-size: 16px;color: #657786;font-weight: 400;">Already using Twitter via text message? 
                    <a href="#">Activate your account »</a>
                </p>
            </form>
          </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>