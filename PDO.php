<?php

$servername "localhost"; $username "root";

$password E $database "latihan";

try { $conn new PDO("mysql: host = $servername; donate "$database", $username, $password);

// set the PDO error mode to exception $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE EXCEPTION);

echo "Connection sukses!";

}

catch(PDOException $e);

echo "Connection gagal:" $e->getMessage();

}

?>