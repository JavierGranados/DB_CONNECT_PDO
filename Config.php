<?php
/*************************************************************
  DATA OF CONNECTION - DATOS DE CONEXION
*************************************************************/
  define('ENV','dev');
  define('DB',
    [  
      'dsn'=>  (ENV === 'dev') ? 'mysql:host=localhost;dbname=YOU_DATABASE' : '',
      'user'=> (ENV === 'dev') ? 'root' : '',
      'password'=> (ENV === 'dev') ? '': ''
    ]
  );   

