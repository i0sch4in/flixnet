<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id=rock class="video-js vjs-default-skin" width="512" height="288" controls> </video>
  </div>
</div>


<?php include "footer.php" ?>

<script>
  var player = videojs('rock');
  player.src({
    src: "video/rock/rock-480p_dash.mpd",
    type: 'application/dash+xml'
  });
  player.play();

  player.qualityLevels().on('addqualitylevel', function(event) {
    console.log(event.qualityLevel);
  });
</script>