<?php

spl_autoload_register(function ($classe) {
	$arquivo = BASEDIR . '/' . $classe . '.php';

	if (file_exists($arquivo))
		include $arquivo;
	else
		exit("O Arquivo não foi encontrado >> " . $arquivo . "<br/>");
});

?>