<div class="ContentWrapper MargueriteBackground ContentTop">
    <div class="Content clearfix">
        <div class="Split Right Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/two.png" alt="Marguerite">
        </div>
        <div class="Split Left Clear">
            <span class="DesktopOnly"><br /><br /></span>
            <img class="ContentImage" src="<?= $assetRoot ?>images/marguerite/title.png" alt="Marguerite">
            <p class="S">
                The must-have transit app for Stanford's Marguerite Shuttle on Windows Phone.
            </p>
            <a class="Button MargueriteButton XXS SemiBold" href="<?= $indexRoot ?>projects/marguerite">See More</a>
        </div>
    </div>
</div>
<div class="ContentWrapper DarkBackground" style="background-image:url('<?= $assetRoot ?>images/shad/background.png">
    <div class="Content clearfix">
        <div class="Split Left Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/shad/tablet.png" alt="Shad">
        </div>
        <div class="Split Right">
            <div class="XL">Shad</div>
            <p class="S">
                Shad is a 3D video game with platform-style gameplay, complex rigid-body
                physics, trippy graphics and detailed cloth simulation.
            </p>
            <a class="Button PurpleBackground XXS SemiBold" href="<?= $indexRoot ?>projects/shad">See More</a>
        </div>
    </div>
</div>
<div class="ContentWrapper YellowBackground">
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
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#mosaic-grid-target').mosaic({
                        source: $('#mosaic-grid-source'),
                        width: 388,
                        height: 198,
                        min_rows: 2,
                        max_rows: 3,
                        columns: 2,
                        speed: 500,
                        interval: 2000,
                        spacing: 1,
                        remove_source: true,
                        alternate_columns: true,
                        orientation: 'horizontal',
                        easing: 'easeInOutQuart',
                        pause_animation: true,
                        autoplay: true,
                        loop_type: 'reverse',
                        random_columns: true,
                        navigation_buttons: 'never'
                    }).mosaicgallery({
                        scale_image: true,
                        overlay_style: 'top',
                        on_click: 'lightbox',
                        overlay_animation_speed: 250,
                        lightbox_overlay: true,
                        lightbox_overlay_style: 'right',
                        lightbox_transition_speed: 250,
                        error_image: '<?= $assetRoot ?>images/error.gif',
                        error_image_hd: '<?= $assetRoot ?>images/error-hd.gif',
                        blank_image: '<?= $assetRoot ?>images/blank.gif',
                        popup_overlay: true,
                        overlay_title: true
                    });
                });
            </script>
            <div style="height:232px;position:relative;width:393px;padding:21px 0 0 7px;margin:0 -2em 0 -2em;display:inline-block;background:url('<?= $assetRoot ?>images/mosaic/tablet.png')">
                <div>
                    <div id="mosaic-grid-target"></div>
                </div>
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:url('<?= $assetRoot ?>images/mosaic/shadow.png') no-repeat center center"></div>
            </div>
            <div id="mosaic-grid-source" style="display: none;">
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/1_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/2_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/3_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/4_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/5_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/6_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/7_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/8_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/9_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/10_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/11_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/12_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/13_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/14_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/15_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/16_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/17_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/18_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/19_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/20_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/21_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/22_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/23_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/24_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/25_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/26_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/27_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/28_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/29_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/30_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/31_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/32_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/33_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/34_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/35_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/36_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/37_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/38_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/39_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/40_thumb.jpg">
                </div>
                <div class="mosaic-cell">
                    <img alt="Mosaic Image" class="mosaic-gallery-image" src="<?= $assetRoot ?>images/mosaic/41_thumb.jpg">
                </div>
            </div>
        </div>
        <div class="Split Left">
            <div class="XL">Mosaic</div>
            <p class="S">
                Mosaic is a flexible javascript framework for creating dynamic and interactive content galleries.
            </p>
            <a class="Button CrimsonBackground XXS SemiBold" href="<?= $indexRoot ?>projects/mosaic">See More</a>
        </div>
    </div>
</div>
<div class="ContentWrapper WhiteBackground">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XL">InMap</div>
            <p class="S">InMap is an interactive map solution with indoor support for locations such as malls or university campuses.</p>
            <a class="Button PurpleBackground XXS SemiBold" href="<?= $indexRoot ?>projects/inmap">See More</a>
            <iframe src="/<?= $contentRoot ?>cimam-small.php" scrolling="auto" style="width:100%;height:500px;border:1px solid #999;margin-top:20px"></iframe>
        </div>
    </div>
</div>
<div class="ContentWrapper LightGrayBackground">
    <div class="Content clearfix">
        <div class="Split Left Center">
            <img class="ContentImage" src="<?= $assetRoot ?>images/avrwizard/project.png" alt="AVR Wizard">
        </div>
        <div class="Split Right">
            <div class="XL">AVR Wizard</div>
            <p class="S">AVR Wizard is an open-source Windows software for generating configuration code for Atmel&apos;s AVR 8-bit ATmega micro-controllers.</p>
            <a class="Button CreamBackground XXS SemiBold" href="<?= $indexRoot ?>projects/avrwizard">See More</a>
        </div>
    </div>
</div>
<div class="ContentWrapper DarkBackground">
    <div class="Content clearfix">
        <div class="Full">
            <div class="XL">Skynet</div>
            <p class="S">Skynet is a framework architecture for efficiently simulating large feed-forward neural networks in a distributed fashion.</p>
            <a class="Button CrimsonBackground XXS SemiBold" href="<?= $indexRoot ?>projects/skynet">See More</a>
            <img class="ContentImage" src="<?= $assetRoot ?>images/skynet/architecture.png" alt="Skynet">
        </div>
    </div>
</div>
<?php if ($debug) { ?>
    <div class="ContentWrapper YellowBackground">
        <div class="Content clearfix">
            <div class="Split">
                <div class="XL">SDLX</div>
                <p class="S">This project comprises of a Verilog implementation of an SDLX processor, and a lab manual for an undergraduate course on computer organization and systems.</p>
            </div>
            <div class="Split"></div>
        </div>
    </div>
<?php } ?>