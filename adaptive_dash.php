<?php include "navbar.php" ?>

<div class="container">
  <div class="row">
    <video id="videoPlayer" width="512" height="288" controls></video>
  </div>
</div>
<script>
  // var url = "video/rock/rock.mpd";
  var url = "video/nature/nature.mpd";
  var player = dashjs.MediaPlayer().create();
  player.initialize(document.querySelector("#videoPlayer"), url, true);

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

  player.play();
</script>

<?php include "footer.php" ?>