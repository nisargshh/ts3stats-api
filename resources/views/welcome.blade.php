<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="ipform" method="post">
      {{ csrf_field() }}
      <input type="text" name="ips" value="">
      <input type="submit" name="submit-button" value="submit">
    </form>
  </body>
</html>
