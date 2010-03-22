<?php
	$destinatario= 'aloisio@elianapedrosa.com.br';
	$assunto=  'Assunto: Teste';
	$corpo= ' Apenas 1 test.';
	mail($destinatario, $assunto, $corpo);

	$assunto= $_POST['Assunto'];
	$corpo= $_POST['Mensangem'];

?>

	