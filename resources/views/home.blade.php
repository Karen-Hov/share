<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





{{--    <meta property="fb:app_id" content="XXXXXXXX" />--}}
{{--    <meta property="og:locale" content="en_US" />--}}
{{--    <meta property="og:type" content="article" />--}}
{{--    <meta property="og:title" content="Jonn - Cute Kid South Armenia" />--}}
{{--    <meta property="og:description" content="For 1 Vote: Text KID zzzz to 41868. Texts costs R2. Read more..." />--}}
{{--    <meta property="og:url" content="https://www.scutekid.co.za/competition/june-2015/?entry=xxxx" />--}}
{{--    <meta property="og:site_name" content="Cute Kid South Armenia" />--}}
{{--    <meta property="og:image" content="https://www.scutekid.co.za/wp-content/uploads/2015/05/my-image.jpg" />--}}

{{--    <meta property="og:image:width" content="720" />--}}
{{--    <meta property="og:image:height" content="720" />--}}



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script></script>
</head>
<body>
<header class="header size">
    <div class="amazing"><p>#youre<b>amazing</b></p></div>
    <div class="titleDiv">
        <div class="frame"><img src="{{asset('img/frame.png')}}"></div>
        <div class="title">SIMPLY AMAZING</div>
    </div>
    <div class="icon">
        <div class="fb">
            <img src="{{asset('img/image 3.1.png')}}">
        </div>
        <div class="insta">
            <img src="{{asset('img/image 2.1.png')}}">
        </div>
    </div>
</header>
<nav>
    <div class="imgDiv">
        @if($image)
{{--                <img src="{{asset('images/'.$image->href)}}">--}}
            <img src="{{asset('img/image.png')}}">
                    @endif
    </div>
    <div class="textI">
        <div class="images">
            <img src="{{asset('img/image 2.png')}}">
        </div>
        <div class="text">WE ARE ALL AMAZING. ESPECIALLY YOU</div>
    </div>
    <div class="button" onclick="display()">
        <div class="share">SHARE</div>
    </div>
    <div class="icon2">
        <div class="insta">
            <img src="{{asset('img/image 2.1.png')}}">
        </div>
        <div class="fb">
            <img src="{{asset('img/image 3.1.png')}}">
        </div>
    </div>
    <div class="textEnd">IDEA BY ZUCK TEAM</div>
</nav>
<section id="section">
    <div class="container">
        <div class="shareVia">SHARE VIA</div>
        <div class="site">
            <div class="fbDiv">
                <div class="siteDiv" onclick="">
{{--                    <a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLink.com&display=popup">--}}
                    <a href="https://facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank">
                        <img src="{{asset('img/image 3.2.png')}}">
                    </a>
                </div>
                <div class="f">FACEBOOK</div>

            </div>
            <div class="instaDiv">
                <div class="siteDiv">
                    <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener">
                         <img src="{{asset('img/image 2.2.png')}}">
                    </a>
                </div>
                <div class="i">INSTAGRAM</div>
            </div>
            <div class="linkDiv">
               <div class="siteDiv1"><img src="{{asset('img/image 4.png')}}"></div>
                <div class="link">COPY LINK</div>
            </div>
        </div>
    </div>
</section>
<script>
    function display(){
        document.getElementById("section").style.display = "flex";
    }
</script>
</body>
</html>

