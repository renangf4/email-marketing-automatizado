<?php
	function getUrlBase($value = '', $base = 'http') {
		echo "$base://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]$value";
	}
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor="#FFFFFF">
	<table align="center" cellpadding="0" cellspacing="0" border="0" width="700" bgcolor="#FFFFFF">
		<tr>
			<td style="
				text-align: center;
				padding-top: 8px;
				padding-bottom: 8px;
				font-family: 'Arial', sans-serif;
				font-size: 12px;
			">
				Caso não consiga visualizar <a href="<?php getUrlBase(); ?>" target="_blank">clique aqui</a>
			</td>
		</tr>
		<tr>
			<td><a href="//r2ntecnologia.com.br" target="_blank" style="line-height: 0 !important;"><img src="<?php getUrlBase(); ?>img/img_01.jpg"></a></td>
		</tr>
		<tr>
			<td><img src="<?php getUrlBase(); ?>img/img_02.jpg"></td>
		</tr>
	</table>
</body>
</html>