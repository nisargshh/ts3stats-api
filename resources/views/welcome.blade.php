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
    </div>

  </div>


</body>
</html>
