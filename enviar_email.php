<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Kata Email</title>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style> article, aside, figure, footer, header, hgroup, menu, nav, section { display: block; } </style>
	
</head>
<body>
	<div class="container">
		
			<?php
				error_reporting(0);
				$destinatario= 'aloisio@elianapedrosa.com.br';
				$assunto= $_POST['Assunto'];
				$corpo= $_POST['Mensangem'];
	
				if(mail($destinatario, $assunto, $corpo)):
	
			?>
				<p>Seu email foi enviado. Obrigado.</p>
	
			<?php else: ?>
	
				<p>Não foi possível enviar seu email. Tente novamente mais tarde.</p>
	
			<?php endif; ?>
			
			
	</div>
</body>
</html>