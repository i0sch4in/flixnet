<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>

    <!-- video.js dash.js  -->
    <link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    <script src="http://cdn.dashjs.org/v3.1.0/dash.all.min.js"></script>
    <script src="lib/videojs-dash.min.js"></script>
    <script src="lib/ControlBar.js"></script>
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
    <script src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>




    <link rel="icon" href="img/netflix-icon.svg">
    <title>FlixNet</title>
    <!-- <script>
    //irudiaren "arrastratzea" desaktibatzeko
      $('img').on('dragstart', function(event) { event.preventDefault(); });
    </script> -->
  </head>
  <body>
    <div class="jumbotron bg-dark">
      <a href="../php/index.php">
      <div class="row justify-content-center">
        <img src="img/netflix-seeklogo.svg" alt="netflix-title">
      </div>
      </a>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-4">
          <div class="container">
            <ul class="navbar-nav h5">
              <li class="nav-item">
                <a class="nav-link" href="index.php">VoD - HTML5</a>
              </li>
              <li class="nav-item">
		<a class="nav-link" href="videojs.php">VoD - Video.js</a>
	      </li>
	      <li class="nav-item">
                <a class="nav-link" href="adaptive.php">VoD - adaptive with DASH</a>
	      </li>
	      <li class="nav-item">
                <a class="nav-link" href="streaming.php">Streaming</a>
	      </li>
              </li>
            </ul>
          </div>
        </nav>
    </div>
