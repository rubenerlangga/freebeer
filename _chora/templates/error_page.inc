<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo _("Error") ?> <?php echo $errcode ?></title>
</head>
<body>
<h2><?php echo _("Error Encountered") ?> - <?php echo $errcode ?></h2>
<p />
<b><?php echo $errmsg ?></b>
<p />
<hr />
<small><i>
<?php echo _("Please contact") ?> <a href="mailto:<?php echo $GLOBALS['conf']['options']['adminEmail'] ?>">
<?php echo $conf['options']['adminName'] ?></a> <?php echo _("for further information.") ?>
</i></small>
</body>
</html>
