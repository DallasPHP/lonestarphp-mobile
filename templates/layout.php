<!DOCTYPE html>
<html manifest="cache.manifest.php">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoneStar PHP 2012</title>
    <link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.1.0.css" />
    <script src="js/jquery.js"></script>
    <script>
        $(document).bind("mobileinit", function(){
            $.extend($.mobile, {
                defaultPageTransition: 'slide'
            });
        });
    </script>
    <script src="js/jquery.mobile-1.1.0.min.js"></script>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png">
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png">

    <!-- For non-Retina iPhone, iPod Touch -->
    <link rel="apple-touch-startup-image" href="splash-screen-320.png" />
    <!-- For Retina iPhone, iPod Touch -->
    <link rel="apple-touch-startup-image" sizes="640x960" href="splash-screen-640.png" />
</head>
<body>
    
<div data-role="page" id="home">
    <?php print $header; ?>
    <div data-role="content">


        <ul data-role="listview" data-inset="true">
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="#">Topics</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Speakers</a></li>
        </ul>

    </div>
</div>

<?php
foreach (new GlobIterator('pages/*.html.php') as $template) {
    echo render($template->getPathname());
}
?>

</body>
</html>
