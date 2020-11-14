<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video-js id=vid1 width=600 height=300 class="vjs-default-skin" controls/>
  </div>
</div>

<script>
var player = videojs('vid1');
player.src({
  src: 'http://15.237.144.172/live/my-stream-key/index.m3u8',
  type: 'application/x-mpegURL',
  withCredentials: true
});
player.play();
</script>

<?php include "footer.php" ?>
