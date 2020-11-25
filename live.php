<?php include "navbar.php" ?>

<div class="container">
  <div class="row-md" id="player">
    <video-js id=vid1 width="512" height="288" class="vjs-default-skin" controls />
  </div>
  <!-- <div class="alert-danger" id="message" hidden>
    Bideoa ezin izan da erreproduzitu.
  </div> -->
  <div class="row mt-4">
    <p>Live Streaminga abiarazteko, streaming egin ezazu hurrengo zerbitzarira:</p>
  </div>
  <div class="row">
    <pre>
      server: rtmp://35.180.172.30:1935/live
      key:    my-stream-key
    </pre>
  </div>
</div>

<script>
  var player = videojs('vid1', {
    errorDisplay: false
  });
  player.src({
    src: 'http://35.180.172.30/live/my-stream-key/index.m3u8',
    type: 'application/x-mpegURL',
    withCredentials: true
  });
  // player.on("error", function() {
  //   $("#message").show();
  // })
  player.play();
</script>

<?php include "footer.php" ?>