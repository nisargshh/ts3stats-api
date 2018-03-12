<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ts3Stats</title>
  <meta charset="UTF-8">
  <meta name="description" content="Statistics for your teamspeak 3 server.">
  <meta name="keywords" content="Teamspeak, Stats, Statistics, TS3, Server, Client, Graph">
  <meta name="author" content="Nisarg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/cover.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">
  <script src="{{ URL::asset('js/cover.js') }}" charset="utf-8"></script>
  <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1915081235451921",
    enable_page_level_ads: true
  });
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111767445-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111767445-1');
</script>

</head>
<body>

  <div class="container-fluid">
    <div class="homepage-hero-module">
      <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
          <source src="{{ URL::asset('cover/cloudlapse/Clouds_Lapse.mp4') }}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          <source src="{{ URL::asset('cover/cloudlapse/Clouds_Lapse.webm') }}" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
          <img src="" alt="">
        </div>
      </div>
    </div>

    <div class="overimage">
      <div class="heading">
        Record Your Teamspeak Stats Now!
      </div>
      <form class="ipform" method="post" class="serverform">
        {{ csrf_field() }}
        <input type="text" name="ips" value="" placeholder="ts.example.com / 192.168.100.1:2018" required>
        <input type="image" name="submit-button" src="{{ URL::asset('icons/recording.png') }}" alt="submit">
      </form>
      <span class="donate">Dontations Appreciated</span>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
        ">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>

    </div>

  </div>




</body>
</html>
