<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id=nature class="video-js vjs-default-skin" width="512" height="288" controls> </video>
  </div>
</div>


<?php include "footer.php" ?>

<script>
  var player = videojs('nature');
  player.ready(function() {
    player.src({
      src: 'video/nature/nature.mpd',
      type: 'application/dash+xml'
    });

    player.play();
  });
</script>