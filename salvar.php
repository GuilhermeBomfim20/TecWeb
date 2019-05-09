<?php
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$nome=$_GET['nome'];
$idade=$_GET['idade'];//teste
$count = $dbh->exec("insert into exemplo2(nome, idade) 
            values('$nome', '$idade') ");
echo "<p>$count registro foi incluído</p>";
echo "<a href=index.php>Voltar</a></p>";
?>