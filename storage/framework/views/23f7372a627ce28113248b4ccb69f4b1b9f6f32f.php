<head>
    <meta charset="UTF-8">
    <title> AdminLTE 2 with Laravel - <?php echo $__env->yieldContent('htmlheader_title', 'Your title here'); ?> </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta property="csrf-token" name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('/css/all.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo e(asset('public/plugins/jqwidgets/styles/jqx.base.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('public/plugins/jqwidgets/styles/jqx.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        var APP_URL = <?php echo json_encode(url('/')); ?>

        
    </script>
<script type="text/javascript" src="<?php echo asset('public/js/jquery-1.11.1.min.js'); ?>"></script>
<!-- <script src="<?php echo asset('public/js/jquery-3.1.0.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/app/lib/angular.min.js'); ?>"></script> -->


<!--<script src="<?php echo asset('public/js/angular.min.js'); ?>"></script>-->

<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxcore.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/plugins/jqwidgets/jqxdata.js'); ?>"></script>
</head>
