<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>latian2</title>

	<style>
		.warna-baris 
		{ background-color: gold; }	
	</style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php if ($i % 2 == 1) : ?>
				<tr class="warna-baris">
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for ($j = 1; $j <= 5 ; $j++) : ?>
					<td> <?= "$i , $j"; ?></td>
				<?php endfor; ?>
			</tr>
			
		<?php endfor; ?>
	</table>
</body>
</html>