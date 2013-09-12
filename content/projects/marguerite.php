<div class="ContentWrapper MargueriteBackground ContentTop">
    <div class="Content clearfix">
        <div class="Split Right Center">
            <script src="<?= $assetRoot ?>javascript/jquery.ui.js" type="text/javascript"></script>
            <script src="<?= $assetRoot ?>javascript/jquery.mousewheel.js" type="text/javascript"></script>
            <script src="<?= $assetRoot ?>javascript/mosaic.js" type="text/javascript"></script>
            <script src="<?= $assetRoot ?>javascript/mosaic.gallery.js" type="text/javascript"></script>
            <link href="<?= $assetRoot ?>css/mosaic.css" rel="stylesheet" type="text/css">
            <link href="<?= $assetRoot ?>css/mosaic.style.css" rel="stylesheet" type="text/css">
            <link href="<?= $assetRoot ?>css/mosaic.gallery.css" rel="stylesheet" type="text/css">
            <link href="<?= $assetRoot ?>css/mosaic.gallery.style.css" rel="stylesheet" type="text/css">
            <div style="background:url('<?= $assetRoot ?>images/lumia920white.png') top left no-repeat;width:450px; height:751px;display:inline-block">
                <div style="background:url('<?= $assetRoot ?>images/lumia920lights.png') top left no-repeat;width:450px; height:751px;position:absolute;z-index:99;"></div>
                <div style="padding:71px 47px 147px 47px;width:360px; height:533px;">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#MargueriteMosaicImage').mosaic({
                                source: $('#MargueriteMosaicImageSource'),
                                width: 360,
                                height: 533,
                                min_rows: 1,
                                max_rows: 1,
                                columns: 1,
                                speed: 500,
                                interval: 6000,
                                spacing: 1,
                                remove_source: true,
                                alternate_columns: true,
                                orientation: 'horizontal',
                                easing: 'easeInOutQuart',
                                column_scroll: false,
                                pause_animation: false,
                                autoplay: true,
                                random_columns: true,
                                navigation_buttons: 'never'
                            }).mosaicgallery({
                                scale_image: true,
                                overlay_style: 'top',
                                error_image: '<?= $assetRoot ?>images/error.gif',
                                error_image_hd: '<?= $assetRoot ?>images/error-hd.gif',
                                blank_image: '<?= $assetRoot ?>images/blank.gif',
                                on_click: 'url',
                                overlay_animation_speed: 250
                            });
                        });
                    </script>
                    <div id="MargueriteMosaicImage"></div>
                    <div id="MargueriteMosaicImageSource" style="display: none;">
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/0.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/1.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/2.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/3.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/4.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/5.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/6.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/7.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/8.png">
                        </div>
                        <div class="mosaic-cell">
                            <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/marguerite/9.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Split Left">
            <div class="DesktopOnly" style="height:9em"></div>
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/title.png" style="margin-top:2em">
            <p class="M">
                The must-have transit app for Stanford's Marguerite Shuttle on Windows Phone.
            </p>
            <a href="http://bit.ly/wp-marguerite" class="Button White" style="padding:0">
                <div style="padding:1em 0 1em 0" class="Marguerite SemiBold XXS">Get it now for</div>
                <div style="width:175px;height:25px;background:url('<?= $assetRoot ?>images/wp8.png') center center no-repeat;display:block"></div>
            </a>
        </div>
    </div>
</div>
<div class="ContentWrapper YellowBackground" style="overflow:hidden">
    <div class="Content">
        <div class="Split Right">
            <p class="XL">
                Find nearby departures.
            </p>
            <p class="M">
                Marguerite knows where you are, and finds the nearest departures and stops around you.
            </p>
        </div>
        <div class="Split Left Center" style="margin-bottom:-1em">
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/nearbydepartures.png">
        </div>
    </div>
    <div style="clear:both"></div>
</div>
<div class="ContentWrapper DarkBackground">
    <div class="Content clearfix">
        <div class="Split Left">
            <div class="Split Left">
                <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/savefavorites.png">
            </div>
            <div class="Split Right">
                <div class="XL" style="padding:10px">
                    Save favorites.
                </div>
                <p class="S" style="padding:10px">
                    Save favorites to see quickly information about the stops, routes or departures that you use frequently.
                </p>          
            </div>
        </div>
        <div class="Split Right">
            <div class="Split Left">
                <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/planjourney.png">
            </div>
            <div class="Split Right">
                <div class="XL" style="padding:10px">
                    Plan your journey.
                </div>
                <p class="S" style="padding:10px">
                    Plan journeys across the campus, so you can get around without knowing which routes go where.

                </p>          
            </div>
        </div>
    </div>
</div>
<div class="ContentWrapper WhiteBackground">
    <div class="Content clearfix">
        <div class="Split Right Center" style="margin-top:0">
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/livemap.png">
        </div>
        <div class="Split Left">
            <p class="XL">
                See bus locations live.
            </p>
            <p class="M">
                View a live map that shows the position of each shuttle in real time.
            </p>
        </div>
    </div>
</div>
<div class="ContentWrapper DarkGrayBackground">
    <div class="Content clearfix">
        <div class="Split Left Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/navigate.png">
        </div>
        <div class="Split Right">
            <p class="XL">
                Navigate your way.
            </p>
            <p class="M">
                Get information about your journey, so you can alight at the right stop.
            </p>
        </div>
    </div>
</div>
<div class="ContentWrapper CrimsonBackground">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XXL SemiLight">Get it now.</div>
        </div>
        <div class="Split Center Left">
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/marguerite-qr.png">
        </div>
        <div class="Split Center Right">
            <a href="http://bit.ly/wp-marguerite">
                <img class="ContentImage" src="<?= $assetRoot ?>images/wp8appstore.png" style="margin:55px 0">
            </a>
        </div>
    </div>
</div>