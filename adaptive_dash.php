<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id="videoPlayer" width="512" height="288" controls></video>
  </div>
</div>
<script>
  var url = "video/rock/rock-480p_dash.mpd";
  var player = dashjs.MediaPlayer().create();
  player.initialize(document.querySelector("#videoPlayer"), url, true);

  console.log(player.getBitrateInfoListFor('#videoPlayer'));

  player.play();
</script>

<?php include "footer.php" ?>