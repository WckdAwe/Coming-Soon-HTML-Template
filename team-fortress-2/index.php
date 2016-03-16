<!DOCTYPE html>
<?php
require_once('../../../../private_html/codebase.php');
$template = new \codebase\Templates\DemoTemplate();
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Coming Soon Template Demo</title>
        <?php echo $template->getHead(); ?>
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="/" class="brand">
                        <img src="/assets/images/logo.png" width="120" height="40" alt="Logo" />
                    </a>
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li><a href="/">Back to main page</a></li>
                            <li><a href="http://source-link-example.com">Source Code</a></li>
                            <li><a href="http://download-link-example.com">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <iframe id="demo-frame" src="index.html"></iframe>
        <!--<a href="http://google.com">Click me</a>-->
        <?php echo $template->getFooter(); ?>
    </body>
</html>