<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=u360738135_dbalfa",
						"u360738135_dbalfa",
						"Qaz098*in",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}

