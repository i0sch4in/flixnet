<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id="videoPlayer" width="512" height="288" controls autoplay></video>
  </div>
</div>
<script>
  var url = "video/nature2/nature2.mpd";
  var player = dashjs.MediaPlayer().create();
  player.initialize(document.querySelector("#videoPlayer"), url, true);
  player.updateSettings({
    'debug': {
      'logLevel': dashjs.Debug.LOG_LEVEL_NONE
    }
  });

  player.on("streamInitialized", function() {
    var bitrates = player.getBitrateInfoListFor("video");
    console.log("list of all bitrates:", bitrates);
  });

  player.on("qualityChangeRendered", function() {
    var index = player.getQualityFor("video");
    var bitrates = player.getBitrateInfoListFor("video");
    var current = bitrates[index];
    console.log("Current index is: ", index, current);
  });
</script>

<?php include "footer.php" ?>