<?php

$conexion = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($conn, "database-jair.mysql.database.azure.com", "Administrador", "alianza123limaJ", "base", 3306, MYSQLI_CLIENT_SSL);
