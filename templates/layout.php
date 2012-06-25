<!DOCTYPE html>
<html manifest="cache.manifest.php">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>LoneStar PHP 2012</title>
    <link rel="stylesheet"  href="css/themes/lsp12/lsp12.css" />
    <link rel="stylesheet"  href="css/themes/default/jquery.mobile.structure-1.1.0.css" />
    <link rel="stylesheet"  href="css/site.css" />
    <script src="js/jquery.js"></script>
    <script>
        $(document).bind("mobileinit", function(){
            $.extend($.mobile, {
                defaultPageTransition: 'slide'
            });
        });
    </script>
    <script src="js/jquery.mobile-1.1.0.js"></script>

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
    <link rel="apple-touch-startup-image" media="(device-width: 320px)" href="splash-screen-320.png" />
    <!-- For Retina iPhone, iPod Touch -->
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" href="splash-screen-640.png" />
</head>

<body>
    
<div data-role="page" id="home">
    <?php print render('templates/header.php'); ?>
    <div data-role="content">
        
        <div class="logo">Lone Star PHP 2012</div>
        
        <ul data-role="listview" data-inset="true" data-theme="c">
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="#sessions">Session List</a></li>
            <li><a href="#">Events &amp; Meals</a></li>
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
