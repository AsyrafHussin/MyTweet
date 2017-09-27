<!DOCTYPE html>
<html>
<head>
    <title>MyTweet | Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
    body{
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
        background-image: linear-gradient(to right, #58aee9 ,#36cc97);
        border-bottom: 1px solid #309383;
    }

    .navbar .navbar-brand{
        display: inline-block;
        float: none;
        color: #fff;
        padding-left: 20%;
    }

    .btn-tweet{
        background: #1da1f2;
        border-radius: 20px;
        text-weight: boder;
        font-size: 18px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .form-control{
        border-radius: 0px;
        border: 1px solid #e6ecf0;
        box-shadow: none !important;
    }

    .form-control::-webkit-input-placeholder {
      color: #aab8c2;
      font-weight: bolder;
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header" style="text-align: center;width: 100%;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyTweet</a>
          <a style="float: right;color: #fff; margin-top: 1.5%;" href="/">Have an account? <strong>Log in</strong></a>        
        </div>
      </div>
    </nav>

    <div class="container" style="padding-top: 7%;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="padding: 5%;padding-top: 0;">
              <p style='color: black; font-size: 27px; font-weight: bold; text-align: left; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'>Join MyTweet today.</p><br>
              <form>
                  <div class="row">
                      <input type="text" class="form-control input-lg" style="height:50px" placeholder="Full name"><br>

                      <input type="text" class="form-control input-lg" style="height:50px" placeholder="Email"><br>

                      <input type="password" class="form-control input-lg" style="height:50px" placeholder="Password"><br>

                      <label style="color: #667590;" class="checkbox-inline"><input type="checkbox" value=""> 
                      Personalize MyTweet based on where you've seen MyTweet content on the web. 
                      <a href="#">Learn more</a>.
                      </label><br><br>

                      <button class="btn btn-info btn-tweet btn-block" style="height: 55px;">Sign up</button><br>

                      <p style="color: #657786;font-size: 12px;">
                          By signing up, you agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>, including <a href="#">Cookie Use</a>. Others will be able to find you by email or phone number when provided.
                      </p><br>

                      <a href="#">Advanced options</a>
                  </div>
              </form>  
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>