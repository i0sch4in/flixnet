<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
  <video id=rock width=600 height=300 class="video-js vjs-default-skin" controls> </video>
  </div>
</div>


<?php include "footer.php" ?>

<script>
  var player = videojs('rock');
  player.src({ src: "video/rock/rock-1080p_dash.mpd", type: 'application/dash+xml'});
  player.play();

  player.qualityLevels().on('addqualitylevel', function(event) {
  console.log(event.qualityLevel);
  });
  player.qualityLevels().on('change', function() {
  console.log('Quality Level changed!');
  console.log('New level:', qualityLevels[qualityLevels.selectedIndex]);
  });
</script>