<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bkkwoiv7gknpsdqntsm8-mysql.services.clever-cloud.com","uvthsmof8njamtkh","weSpsacgZXazqedt7PC7","bkkwoiv7gknpsdqntsm8");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }
