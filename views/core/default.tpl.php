<!doctype html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
	<div id="header">
		<h2><?=@$header?></h2>
	</div>
	<div id="main" role="main">
		<?=@$main?>
	</div>
	<div id="footer">
		<?=$footer?>
	</div>
</body>
</html>