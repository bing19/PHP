<?php


function getFile () {
	include 'functions.php';

	$file = $directory . 'file.txt';
	$data = [
		['Евгений', 'Davidoff', '+380954906178'], ['Serg', 'Fits', '+380954906178']
	];
	//write_file($file, $data);
	read_file($file);

}

getFile ();