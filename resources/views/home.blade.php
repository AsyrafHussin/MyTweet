<!DOCTYPE html>
<html>
<head>
    <title>MyTweet | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.7.22/css/materialdesignicons.min.css">

    <style>
    .nav-pills-custom>li>a {
        color: lightgrey;
    }

    .nav-pills-custom>li>a:focus,
    .nav-pills-custom>li>a:hover {
        background: none;
        color: grey;
    }

    .panel-custom>.panel-heading {
        background: none;
        border-bottom: none;
    }
    
    .form-control-nav{
        background-color: #fff;
        border: 1px solid #e6ecf0;
        box-shadow: none !important;
        border-radius:15px;
        height: 35px;
        width: 250px;
        text-indent: 10px;
    }

    .form-control-nav:focus{
        -webkit-box-shadow: none;
        outline: -webkit-focus-ring-color auto 0px;
        border-color: #1da1f2;
    }

    .form-control-nav::-webkit-input-placeholder {
      color: #657786;
      font-weight: normal;
      font-size: 14px;
      padding-left: 10px;
    } 

    .form-tweet{
        border: 1px solid #c6e4f7;
        height: 40px;
        border-radius: 10px;
    }   

    .form-tweet::-webkit-input-placeholder {
      color: #1b95e0;
      font-weight: normal;
      font-size: 14px;
    }

    .navbar-default .navbar-collapse, .navbar-default{
    background-color: white;
    }
    .panel-footer{
        background-color: #e8f4fb;
    }
    .well{
        background-color: #fff;
        border: none;
    }
    a{
        color:#1b95e0;
    }
    div.panel-heading{
        padding-top:15px;
        padding-bottom: 0px;
    }

    .form-control-feedback{
        line-height:35px;
    }
    .panel-info{
        border:1px lightgrey solid;
    }

    .btn-tweet{
        background: #1da1f2;
        border-radius: 20px;
        font-weight: bold;
        font-size: 16px;
        padding-right: 15px;
        padding-left: 15px;
        border: 0px;
    }

    .btn-tweet-outline{
        background: #fff;
        border-radius: 20px;
        font-weight: bolder;
        font-size: 12px;
        width: 100px;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        height: 30px;
    }

    .panel{
        border: none;
    }

    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-static-top navbar-shadow">
        <div class="container container-main">
            <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
                <ul class="nav navbar-nav">
                    <li class="active" style="margin-top: -4px;">
                        <a href="#fake" style="font-weight: bold;font-size: 13px;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                        <span style="font-size: 25px;">&#8226;</span> 
                        <span style="font-size: 20px;" class="fa fa-home"></span> Home
                        </a>
                    </li>
                    <li>
                        <a href="#fake" style="font-weight: bold;font-size: 13px;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span style="font-size: 20px;" class="fa fa-bell-o"></span> Notifications</a>
                    </li>
                    <li>
                        <a href="#fake" style="font-weight: bold;font-size: 13px;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span style="font-size: 20px;" class="fa fa-envelope-o"></span> Messages</a>
                    </li>
                </ul>
                <div class="navbar-form navbar-right">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control-nav" placeholder="Search MyTweet">
                        <span class="fa fa-search form-control-feedback"></span>
                    </div>

                    <img style="width:35px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                    <button class="btn btn-primary btn-tweet">
                        Tweet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-main">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding:0;">
                        <div style="position: relative;">
                            <a href="#"><img class="img-responsive" alt="" src="https://pbs.twimg.com/profile_banners/776421982912909312/1473957426/1500x500"></a>
                            <img style="width:70px; border-radius: 50%;margin-left:10px;margin-right:10px;border: 2px solid white;position: absolute;top: 60px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            <p style="text-align: center; margin-top: 5px;">
                                <span style="font-size: 18px;font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Asyraf Hussin</span><br>
                                <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">@asyrafhussin</span>
                            </p>
                        </div>
                        <div class="row" style="padding: 20px;padding-top: 0;padding-bottom:0;">
                            <div class="col-xs-3">
                                <p>
                                    <span style="color: #6a7b8a;font-size: 12px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Tweets</span>
                                    <span style="color: #1B95E0;font-size: 18px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">1.5M</span>
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <p>
                                    <span style="color: #6a7b8a;font-size: 12px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Following</span>
                                    <span style="color: #1B95E0;font-size: 18px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">10</span>
                                </p>
                            </div>
                            <div class="col-xs-5">
                                <p>
                                    <span style="color: #6a7b8a;font-size: 12px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Followers</span>
                                    <span style="color: #1B95E0;font-size: 18px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">9.9B</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-custom">
                    <div class="panel-heading">
                        <span style="font-size: 18px; font-weight: bold;font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Trends for you</span>
                        <span class="separator">&middot;</span>
                        <a style="font-size: 12px;" href="#">Change</a>
                    </div>

                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">North Korea</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">104K Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">Hugh Hefner</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">644K Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">#MalaysianGP</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">4,057 Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">Saudi Arabia</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">153K Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">Rome</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">27.4K Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">Islamic</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">30.1K Tweets</span>
                            </li>
                            <li style="margin-bottom: 10px;"><a style="color: #1B95E0;font-size: 14px; font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" href="#">#Rohingya</a><br>
                            <span style="color:#657786;font-size: 14px;font-weight: regular; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">20.2K Tweets</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading" style="background-color: #e8f4fb;">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:35px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <div class="form-group has-feedback">
                                    <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                                    <input type="text" class="form-control form-tweet" placeholder="What's happening?">
                                    <span style="color:#7fc4ee;" class="fa fa-file-image-o form-control-feedback" aria-hidden="true"></span>
                                    <span id="search2" class="sr-only">(success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="media" align="center">
                            <a href="#">See 2.6B new Tweets</a>
                        </div>
                    </div>    
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                    <div class="panel-body">
                        <div class="media">
                            <a class="media-left" href="#fake">
                                <img style="width:48px; border-radius: 50%;margin-left:10px;margin-right:10px;" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </a>
                            <div class="media-body">
                                <p>
                                   <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                   <span style="color:#657786;">@asyrafhussin</span>
                                   <span class="separator">&middot;</span>
                                   <span style="color:#657786;">25M</span>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed pharetra arcu. Vestibulum sit amet iaculis mi.</p>
                                <ul class="nav nav-pills nav-pills-custom">
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-comment-o"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 10.5M</span></i></a></li>
                                    <li><a href="#"><i style="color:#17bf63;" class="fa fa-retweet"> <span style='font-weight: bold;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'> 2.6B</span></i></a></li>
                                    <li><a href="#"><i style="color:#657786;" class="fa fa-heart-o"> <span style="font-weight: bold;"> 9.9B</span></i> </a></li>
                                    <li><a href="#"><span style="color:#657786;" class="fa fa-envelope-o"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr style="margin:0;">
                </div>

                <br>
                <br>
                <br>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default panel-custom">
                    <div class="panel-heading">
                        <span style="font-size: 18px; font-weight: bold;font-weight: bold; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">Who to follow</span>
                        <span class="separator">&middot;</span>
                        <a style="font-size: 12px;" href="#">Refresh</a>                        
                        <span class="separator">&middot;</span>
                        <a style="font-size: 12px;" href="#">View all</a>
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <img style="width:50px; border-radius: 50%" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                    <span style="color:#657786;">@asyrafhussin</span>
                                </p>
                                <button class="btn btn-primary btn-tweet-outline" style="margin-top:-8px;">
                                    Follow
                                </button>
                            </div>
                        </div><hr>
                        <div class="media">
                            <div class="media-left">
                                <img style="width:50px; border-radius: 50%" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                    <span style="color:#657786;">@asyrafhussin</span>
                                </p>
                                <button class="btn btn-primary btn-tweet-outline" style="margin-top:-8px;">
                                    Follow
                                </button>
                            </div>
                        </div><hr>
                        <div class="media">
                            <div class="media-left">
                                <img style="width:50px; border-radius: 50%" src="https://pbs.twimg.com/profile_images/879605960880168960/9F1K0fqv_400x400.jpg" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <span style="font-size:14px;color:black;font-weight:bold;">Asyraf Hussin</span>
                                    <span style="color:#657786;">@asyrafhussin</span>
                                </p>
                                <button class="btn btn-primary btn-tweet-outline" style="margin-top:-8px;">
                                    Follow
                                </button>
                            </div>
                        </div><hr>
                        <div>
                            <a style="font-size: 13px;color: #2e9ee3;" href="#"><i style="font-size: 17px;" class="mdi mdi-account-multiple-outline"></i> Find people you know</a>
                        </div>
                    </div>
                </div>
                <div class="well well-sm" style="font-size: 12px;">
                    <ul class="list-inline">
                        <li><span style="color: #657786;">© 2017 MyTweet</span></li>
                        <li><a style="color: #657786;" href="#">About</a></li>
                        <li><a style="color: #657786;" href="#">Help Center</a></li>
                        <li><a style="color: #657786;" href="#">Terms</a></li>
                        <li><a style="color: #657786;" href="#">Privacy policy</a></li>
                        <li><a style="color: #657786;" href="#">Cookies</a></li>
                        <li><a style="color: #657786;" href="#">Ads info</a></li>
                        <li><a style="color: #657786;" href="#">Brand</a></li>
                        <li><a style="color: #657786;" href="#">Blog</a></li>
                        <li><a style="color: #657786;" href="#">Status</a></li>
                        <li><a style="color: #657786;" href="#">Apps</a></li>
                        <li><a style="color: #657786;" href="#">Jobs</a></li>
                        <li><a style="color: #657786;" href="#">Advertise</a></li>
                        <li><a style="color: #657786;" href="#">Businesses</a></li>
                        <li><a style="color: #657786;" href="#">Developers</a></li>
                    </ul>
                    <hr>
                    <a style="font-size: 13px;color: #2e9ee3;" href="#"><i style="font-size: 14px;" class="fa fa-external-link"></i> Advertise with MyTweet</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>