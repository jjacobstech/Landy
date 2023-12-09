<?php
if ($this->uri->segment(3)) {
	$data = $this->uri->segment(3);
} else {
	$data = 0;
}
?>

<!-- <script id="group" data-name="<?= $data  ?>" src="<?php echo base_url(); ?>assets/livetrack.js"></script> -->
<div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 475px;">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q=lagos&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://online.stopwatch-timer.net/">timer
                stopwatch</a><br><a href="https://www.onclock.net/"></a><br>
            <style>
            .mapouter {
                margin: 0%;
                border: 0ch;
                padding: 0%;
                position: relative;
                text-align: right;
                height: 1000px;
                width: auto;
            }
            </style><a href="https://www.ongooglemaps.com">google map net</a>
            <style>
            .gmap_canvas {
                margin: 0%;
                border: 0ch;
                padding: 0%;
                overflow: hidden;
                background: none !important;
                height: 1200px;
                width: auto;
            }
            </style>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/fontawesome-markers.min.js"></script>

<div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 650px"></div>
</div>
</div>