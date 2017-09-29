<!DOCTYPE html>
<html>
<head>
    <title>MyTweet | Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="white-body">

    <nav class="navbar navbar-default navbar-register">
      <div class="container container-padding">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyTweet</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Have an account? <strong>Log in</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container container-padding container-register">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <p class="register-title">Join MyTweet today.</p><br>
              <form>
                  <div class="row">
                      <input type="text" class="form-control input-lg input-register" placeholder="Full name"><br>

                      <input type="text" class="form-control input-lg input-register" placeholder="Email"><br>

                      <input type="password" class="form-control input-lg input-register" placeholder="Password"><br>

                      <label class="checkbox-inline register-label"><input type="checkbox" value=""> 
                      Personalize MyTweet based on where you've seen MyTweet content on the web. 
                      <a href="#">Learn more</a>.
                      </label><br><br>

                      <button class="btn btn-info btn-tweet btn-block btn-register">Sign up</button><br>

                      <p class="register-label register-info">
                          By signing up, you agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>, 
                          including <a href="#">Cookie Use</a>. Others will be able to find you by email or phone number when provided.
                      </p>
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