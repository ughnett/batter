<!DOCTYPE html>
<html>

<head>

    <title><?php echo stripslashes(Settings::get('site_name')); ?></title>

    <!--metatags-->
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <!-- CSS -->
    <?php echo asset::css('request_style.css', array('media' => 'all')); ?>

    <?php if (Settings::get('frontend_css')): ?>
    	<style type="text/css"><?php echo Settings::get('frontend_css'); ?></style>
    <?php endif; ?>
 
</head>

<body class="index <?php echo is_admin() ? 'admin' : 'not-admin';?>">





<?php echo $template['body']; ?>





<?php if (is_admin()): ?>
    <!-- Back to admin -->
	<?php echo anchor('admin', __('global:backtoadmin')); ?>
<?php endif; ?>





</body>
</html>