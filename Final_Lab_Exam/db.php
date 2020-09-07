<?php

    $host = "127.0.0.1";

    $dbuser = "root";

    $dbpass = "";
    
    $dbname = "webtech";

    function DBconnect(){
          global $host;
          global $dbadmin;
          global $dbpassword;
          global $dbname;

    
        return $conn = mysqli_connect($host,$dbadmin,$dbpassword,$dbname);
    }

?>  