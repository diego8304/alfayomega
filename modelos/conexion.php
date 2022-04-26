<?php

class Conexion{

	public function conectar(){

        try{


			$link = new PDO("mysql:host=localhost;dbname=dbalfa",
							"root",
							"",
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
								PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
							);


			return $link;

		}catch (PDOException $e) {
			exit("ERROR: ".$e->getMessage());
		
		
		}


	}


}

