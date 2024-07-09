
<?php
        // PHP Data Objects(PDO) Sample Code:
        try {
            $conn = new PDO("sqlsrv:server = tcp:dadossimples.database.windows.net,1433; Database = lockertec_banco", "teste", "qwe456123!");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print ("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "teste", "pwd" => "qwe456123!", "Database" => "lockertec_banco", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:dadossimples.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
