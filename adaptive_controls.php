<?php include_once "navbar.php" ?>

<div class="container">
  <div class="row">
    <div class="dash-video-player ">
      <!-- HTML structure needed for the ControlBar -->
      <div class="videoContainer" id="videoContainer">
        <video id="videoPlayer" width="512" height="288" controls allowfullscreen poster="img/nature2_thumbnail3.png"></video>
        <div id="videoController" class="video-controller unselectable">
          <div id="playPauseBtn" class="btn-play-pause" title="Play/Pause">
            <span id="iconPlayPause" class="icon-play"></span>
          </div>
          <span id="videoTime" class="time-display">00:00:00</span>
          <div id="fullscreenBtn" class="btn-fullscreen control-icon-layout" title="Fullscreen">
            <span class="icon-fullscreen-enter"></span>
          </div>
          <div id="bitrateListBtn" class="control-icon-layout" title="Bitrate List">
            <span class="icon-bitrate"></span>
          </div>
          <input type="range" id="volumebar" class="volumebar" value="1" min="0" max="1" step=".01">
          <div id="muteBtn" class="btn-mute control-icon-layout" title="Mute">
            <span id="iconMute" class="icon-mute-off"></span>
          </div>
          <div id="trackSwitchBtn" class="control-icon-layout" title="A/V Tracks">
            <span class="icon-tracks"></span>
          </div>
          <div id="captionBtn" class="btn-caption control-icon-layout" title="Closed Caption">
            <span class="icon-caption"></span>
          </div>
          <span id="videoDuration" class="duration-display">00:00:00</span>
          <div class="seekContainer">
            <div id="seekbar" class="seekbar seekbar-complete">
              <div id="seekbar-buffer" class="seekbar seekbar-buffer"></div>
              <div id="seekbar-play" class="seekbar seekbar-play"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var url = "video/nature2/nature2.mpd";
  var player = dashjs.MediaPlayer().create();
  player.initialize(document.querySelector("#videoPlayer"), url, true);

  var controlbar = new ControlBar(player); //Player is instance of Dash.js MediaPlayer;
  controlbar.initialize();

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

<?php include_once "footer.php" ?>