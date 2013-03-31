<!DOCTYPE html>
<html<?php if (!isset($_GET['nocache'])): ?> manifest="cache.manifest.php"<?php endif; ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>LoneStar PHP 2013</title>
    <link rel="stylesheet" href="styles/themes/lsp13/lsp13.min.css?<?php echo $version; ?>" />
    <link rel="stylesheet" href="styles/themes/default/jquery.mobile.structure-1.3.0.min.css?<?php echo $version; ?>" />
    <link rel="stylesheet" href="styles/site.css?<?php echo $version; ?>" />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,700|Open+Sans+Condensed:700,300|Sanchez' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="styles/add2home.css?<?php echo $version; ?>" />
    <script type="text/javascript">
    var addToHomeConfig = {
        animationIn: 'fade',
        animationOut: 'drop',
        lifespan:10000,
        expire:2,
        touchIcon:true,
        message:'Install this offline app to your %device. Tap `%icon` and then `<strong>Add to Home Screen</strong>`.'
    };
    </script>
    <script type="application/javascript" src="scripts/add2home.js?<?php echo $version; ?>" async></script>
    <script src="scripts/jquery.min.js?<?php echo $version; ?>"></script>
    <script>
        $(document).bind("mobileinit", function(){
            $.extend($.mobile, {
                defaultPageTransition: 'slide'
            });
        });
    </script>
    <script src="scripts/jquery.mobile-1.3.0.min.js?<?php echo $version; ?>"></script>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png?<?php echo $version; ?>">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72.png?<?php echo $version; ?>">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png?<?php echo $version; ?>">
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png?<?php echo $version; ?>">

    <!-- For non-Retina iPhone, iPod Touch -->
    <link rel="apple-touch-startup-image" media="(device-width: 320px)" href="splash-screen-320.jpg?<?php echo $version; ?>" />
    <!-- For Retina iPhone, iPod Touch -->
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" href="splash-screen-640.jpg?<?php echo $version; ?>" />
</head>

<body>
    
<div data-role="page" id="home">
    <?php print render('templates/header.php'); ?>
    <div data-role="content">
        
        <div class="logo">Lone Star PHP 2012</div>
        
        <ul data-role="listview" data-inset="true" data-theme="c">
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="#sessions">Session List</a></li>
            <li><a href="#speakers">Speakers</a></li>
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
