<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aldo Fakhry</title>
    <style type="text/css">
      body{
        margin:40px auto;
        max-width:650px;
        line-height:1.6;
        font-size:18px;
        color:#444;
        padding:0
        10px}
      h1,h2,h3{
        line-height:1.2}
    </style>
</head>
  <body>
    <h1>
      Login
    </h1>
    <form class="form-horizontal" action="login.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <div class="">
          <input type="text" name="username" value="">
        </div>
      </div>

      <div class="from-group">
        <label>Password</label>
        <div class="">
          <input type="password" name="password" value="">
        </div>
      </div>

      <div class="form-group">
        <label></label>
        <div class="">
          <button type="submit">Login</button>
        </div>
      </div>

    </form>
  </body>
</html>
