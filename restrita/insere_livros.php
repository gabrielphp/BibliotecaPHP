<?php
	include 'conecta.php';

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$genero = $_POST['select'];
	$editora = $_POST['editora'];
	$paginas = $_POST['paginas'];
	$exemplares = $_POST['exemplares'];
	



$consulta = $conexao -> prepare("INSERT INTO livros(titulo, autor, genero, editora, paginas, qtdeExemplares) VALUES('$titulo', '$autor', '$genero', '$editora', '$paginas', $exemplares)");


	$consulta -> execute();


	header('location: index.php');

?>