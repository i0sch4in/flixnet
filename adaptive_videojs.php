<?php include_once "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id=nature class="video-js vjs-default-skin" width="512" height="288" controls autoplay poster="img/nature2_thumbnail.png"> </video>
  </div>
</div>

<script>
  var player = videojs('nature');
  player.ready(function() {
    player.src({
      src: 'video/nature2/nature2.mpd',
      type: 'application/dash+xml'
    });
  });
</script>

<?php include_once "footer.php" ?>