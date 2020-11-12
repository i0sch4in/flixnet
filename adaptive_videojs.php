<?php include "navbar.php" ?>
<script>
    var videojs = require('videojs');
    require('@silvermine/videojs-quality-selector')(videojs);
</script>

<div class="container">
  <div class="row">
  <video id=rock width=600 height=300 class="video-js vjs-default-skin" controls> </video>
  </div>
</div>

<script>
  var player = videojs('rock');
  player.src({ src: "video/rock/rock-1080p_dash.mpd", type: 'application/dash+xml'});
  player.play();
</script>

<?php include "footer.php" ?>