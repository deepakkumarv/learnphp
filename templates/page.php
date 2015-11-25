<?php
//Page Template

return "
<!DOCTYPE html>
<html>
<head>
	<title>$pageData->title</title>
	<meta http-equiv='Conten-Type' content='text/html;charset=utf-8' />
	$pageData->css
	$pageData->embeddedStyle
</head>
<body>
$pageData->content
</body>
</html>
";