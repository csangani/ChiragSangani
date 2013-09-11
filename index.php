<?php

function GenerateObfuscatedLink($link) {
    $key = rand(1, 64);
    $callback = function($val) use ($key) {
                return chr(ord($val) ^ $key);
            };
    $obfuscatedUrl = implode(array_map($callback, str_split($link)));

    echo "href=\"" . htmlentities($obfuscatedUrl) . "\" onclick=\"DeobfuscateLink(" . $key . ",event);\"";
}

function GenerateObfuscatedText($text) {
    $key = rand(1, 4);
    $callback = function($val) use ($key) {
                return chr(ord($val) ^ $key);
            };

    $obfuscatedText = implode(array_map($callback, str_split($text)));

    echo "<script type=\"text/javascript\">DeobfuscateText(\"" . htmlentities($obfuscatedText) . "\", " . $key . ");</script>";
}

$indexRoot = str_replace("index.php", "", $_SERVER["PHP_SELF"]);
$contentRoot = "content/";
$assetRoot = $indexRoot . "assets/";
$menuRoot = "menu/";

$page = "404.php";
$FirstLevel = "Four04";

if (isset($_GET["s"]) && isset($_GET["ss"])) {
    $file = $_GET["s"] . "/" . $_GET["ss"] . ".php";
    if (file_exists($contentRoot . $file)) {
        $FirstLevel = $_GET["s"];
        $SecondLevel = $_GET["ss"];
        $page = $file;
    }
} else if (isset($_GET["s"])) {
    $file = $_GET["s"] . ".php";
    if (file_exists($contentRoot . $file)) {
        $FirstLevel = $_GET["s"];
        $page = $file;
    }
} else if (!isset($_GET["sss"])) {
    $page = "about.php";
    $FirstLevel = "about";
}

$debug = (isset($_GET["debug"])) ? true : false;
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta name="description" content="I'm a graduate student in the Silicon valley who is fascinated by technology and design."/>
        <meta name="keywords" content="chirag,sangani,marguerite,stanford,adenzio,andromorr,avr,wizard,shad,inmap,mosaic"/>
        <meta name="author" content="Chirag Sangani"/>
        <meta name="image_src" content="http://www.chiragsangani.com<?= $assetRoot ?>images/me.png"/>
        <meta charset="utf-8" />
        <title>Chirag Sangani</title>
        <link href="<?= $assetRoot ?>css/F.css" type="text/css" rel="stylesheet" />
        <link href="<?= $assetRoot ?>css/style.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="<?= $assetRoot ?>javascript/jquery.js"></script>
        <script type="text/javascript" src="<?= $assetRoot ?>javascript/site.js"></script>
        <style type="text/css">
            .clearfix:after {
                content: ".";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
        </style>
        <!--[if lte IE 7]>
        <style type="text/css">
          .clearfix {
            zoom: 1;     /* triggers hasLayout */
            }  /* Only IE can see inside the conditional comment
            and read this CSS rule. Don't ever use a normal HTML
            comment inside the CC or it will close prematurely. */
        </style>
        <![endif]-->

        <script type="text/javascript">
            $(document).ready(function() {
<?php if (isset($FirstLevel)) { ?>
                    $('#<?= $FirstLevel ?>').addClass('selected');
<?php } ?>
<?php if (isset($SecondLevel)) { ?>
                    $('#<?= $FirstLevel . "-" . $SecondLevel ?>').addClass('selected');
<?php } ?>
            });
        </script>

    </head>
    <body>
        <div id="CS5-HeaderSpace">
        </div>
        <div id="CS5-HeaderWrapper">
            <div id="CS5-Header">
                <div id="CS5-HeaderBody" class="clearfix">
                    <a id="CS5-HeaderTitle" class="L" href="<?= $indexRoot ?>">Chirag Sangani</a>
                    <a id="CS5-HeaderButton"></a>
                </div>
            </div>
            <div id="CS5-NavBar">
                <div id="CS5-NavBarBody">
                    <ul id="CS5-NavBarBar" class="SemiBold XS">
                        <li><a href="<?= $indexRoot ?>" id="about">About Me</a></li>
                        <li><a href="<?= $indexRoot ?>projects" id="projects">Projects</a></li>
                        <li><a href="<?= $indexRoot ?>design" id="design">Design</a></li>
                        <li><a href="<?= $indexRoot ?>contact" id="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div id="CS5-NavBarSecondary">
                <div id="CS5-NavBarSecondaryBody">
                    <ul id="CS5-NavBarSecondaryBar" class="SemiBold XXS">
                        <?php
                        if (file_exists($menuRoot . $FirstLevel . ".php")) {
                            include_once($menuRoot . $FirstLevel . ".php");
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="CS5-Content">
            <?php
            include_once($contentRoot . $page);
            ?>
        </div>
        <div id="CS5-Footer">
            <div id="CS5-FooterBody" class="DRMC">
                <div id="CS5-FooterContent">
                    <ul id="CS5-Footer-Menu" class="SemiBold XS">
                        <li><a href="<?= $indexRoot ?>disclaimer" id="disclaimer">Disclaimer</a></li>
                        <li><a href="<?= $indexRoot ?>tou" id="tou">Terms of Use</a></li>
                    </ul>
                    <div id="CS5-Footer-Copyright">
                        <span class="SemiBold M">Chirag Sangani</span><br />
                        <span class="SemiBold XXS">&copy; 2013 Chirag Sangani</span>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>

        <!-- Start of StatCounter Code for Default Guide -->
        <script type="text/javascript">
            var sc_project = 5374486;
            var sc_invisible = 1;
            var sc_security = "54f79320";
        </script>
        <script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
        <noscript>
            <div class="statcounter">
                <a title="web analytics" href="http://statcounter.com/" target="_blank">
                    <img class="statcounter" src="http://c.statcounter.com/5374486/0/54f79320/1/" alt="web analytics">
                </a>
            </div>
        </noscript>
        <!-- End of StatCounter Code for Default Guide -->
    </body>
</html>