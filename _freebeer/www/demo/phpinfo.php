<?php

// $CVSHeader: _freebeer/www/demo/phpinfo.php,v 1.2 2004/03/07 17:51:34 ross Exp $

// Copyright (c) 2002-2004, Ross Smith.  All rights reserved.
// Licensed under the BSD or LGPL License. See license.txt for details.

require_once './_demo.php';

echo html_header_demo('phpinfo()');

if (preg_match('/wget/i', $_SERVER['HTTP_USER_AGENT'])) {
	echo "</body></html>";
	exit(0);
}

$infos = array(
	INFO_GENERAL		=> 'INFO_GENERAL',
	INFO_CREDITS		=> 'INFO_CREDITS',
	INFO_CONFIGURATION	=> 'INFO_CONFIGURATION',
	INFO_MODULES		=> 'INFO_MODULES',
	INFO_ENVIRONMENT	=> 'INFO_ENVIRONMENT',
	INFO_VARIABLES		=> 'INFO_VARIABLES',
	INFO_LICENSE		=> 'INFO_LICENSE',
	INFO_ALL			=> 'INFO_ALL',
);

if (!isset($_REQUEST['info'])) {
	$_REQUEST['info'] = INFO_ALL;
}

foreach($infos as $key => $value) {
	$url = $_SERVER['PHP_SELF'] . '?info=' . $key;
	printf("<a href=\"%s\">%s</a><br />\n", $url, $value);
}

phpinfo($_REQUEST['info']);

?>

<br />

<address>
$CVSHeader: _freebeer/www/demo/phpinfo.php,v 1.2 2004/03/07 17:51:34 ross Exp $
</address>

</body>
</html>
