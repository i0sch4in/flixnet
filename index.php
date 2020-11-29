<?php include_once "navbar.php" ?>

<div class="container">
    <div class="row">
        <h2>Streaming estatikoa</h2>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="img/mike_thumbnail.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">HTML5</h5>
                    <p class="card-text">HTML5-en berezko bideo-erreproduzigailuarekin egindako streaming-a</p>
                    <a href="static_html5.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card">
                <img src=" img/airpods_thumbnail.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Video.js</h5>
                    <p class="card-text">Video.js liburutegiaren erreproduzigaularekin egindako streaming-a</p>
                    <a href="static_videojs.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <h2>Streaming dinamikoa <span class="font-weight-bold">(ABR)</span></h2>
    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <img src="img/nature2_thumbnail2.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dash</h5>
                    <p class="card-text">Dash.js liburutegiarekin egindako Adaptive Bitrate streaming-a</p>
                    <a href="adaptive_dash.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="img/nature2_thumbnail2.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dash Controlbar</h5>
                    <p class="card-text">Dash.js liburutegiarekin egindako streaming-a, kontrol barra gehituta</p>
                    <a href="adaptive_controls.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card">
                <img src="img/nature2_thumbnail.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Video.js</h5>
                    <p class="card-text">Video.js liburutegiarekin egindako Adaptive Bitrate streaming-a</p>
                    <a href="adaptive_videojs.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>


    </div>

    <div class="row mt-4">
        <h2>Live Streaming</h2>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="img/livestreaming_thumbnail.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Live Streaming</h5>
                    <p class="card-text">Video.js liburutegiarekin egindako HLS motako live streaming-a</p>
                    <a href="live.php" class="btn btn-primary stretched-link">Sartu</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once "footer.php" ?>