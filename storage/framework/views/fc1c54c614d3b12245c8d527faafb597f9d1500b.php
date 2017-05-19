<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" type="text/css" href="css/component.css">

        <link href="css/main.css" rel="stylesheet" type="text/css">

        <script src="js/modernizr.custom.js"></script>


    </head>
    <body>
        <div class="full-height bodywrapper">
            <?php echo $__env->yieldContent('cover'); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.visible.min.js"></script>
        <script src="js/scrolling-nav.js"></script>
        <script src="js/grid.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
