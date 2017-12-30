<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta charset="UTF-8">
  <meta name="description" content="Statistics for your teamspeak 3 server.">
  <meta name="keywords" content="Teamspeak, Stats, Statistics, TS3, Server, Client, Graph">
  <meta name="author" content="Nisarg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>


  <script type="text/javascript" charset="utf-8">
    var dates = <?php echo $dates; ?>;
    var avg = <?php echo $avg ?>;
    var clients = <?php echo $clients ?>;
    var time = <?php echo $time ?>;
    console.log(dates);
  </script>

</head>
<body>
  IP Address: {{ $ip->ip }}<br>
  Recording Start Date: {{ $start->created_at }}
  <canvas id="avgusers" width="100vw" height="20vh"></canvas>
  <canvas id="userstoday" width="100vw" height="20vh"></canvas>

<script src="{{ URL::asset('js/server.js') }}" charset="utf-8"></script>
</body>
</html>
