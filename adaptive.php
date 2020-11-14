<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id="vid" class="video-js vjs-default-skin" data-dashjs-player="" autoplay="" src="video/rock/rock-1080p_dash.mpd" controls></video>
  </div>
</div>
<script>

let player = $("video#vid")
let bitrates = player.getBitrateInfoList()
console.log(bitrates);

</script>

<?php include "footer.php" ?>
