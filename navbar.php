<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>

  <!---- video.js dash.js  ---->
  <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
  <script src="http://cdn.dashjs.org/v3.1.0/dash.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-dash/2.11.0/videojs-dash.min.js"></script>
  <!-- <script src="http://cdn.dashjs.org/latest/dash.all.debug.js"></script> -->
  <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

  <!-- videojs http streaming -->
  <script src="https://unpkg.com/browse/@videojs/http-streaming@2.3.0/dist/videojs-http-streaming.min.js"></script>

  <!-- controlbar.js -->
  <script src="http://reference.dashif.org/dash.js/latest/contrib/akamai/controlbar/ControlBar.js"></script>
  <link rel="stylesheet" href="http://reference.dashif.org/dash.js/latest/contrib/akamai/controlbar/controlbar.css">

  <link href="style.css" rel="stylesheet">

  <link rel="icon" href="img/netflix-icon.svg">
  <title>FlixNet</title>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 rounded">
    <div class="navbar-header">
      <a href="index.php" class="navbar-brand">
        <img src="img/netflix-seeklogo.svg" height="25" />
      </a>
    </div>
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link active">Hasiera</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            VoD (static)
          </a>
          <div class="dropdown-menu">
            <a href="static_html5.php" class="dropdown-item">HTML5</a>
            <a href="static_videojs.php" class="dropdown-item">VideoJS</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            VoD (ABR)
          </a>
          <div class="dropdown-menu">
            <a href="adaptive_dash.php" class="dropdown-item">Dash</a>
            <a href="adaptive_videojs.php" class="dropdown-item">VideoJS</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="live.php">Live Streaming</a>
        </li>
        </li>
      </ul>
    </div>
  </nav>