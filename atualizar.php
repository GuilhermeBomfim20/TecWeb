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
$idade=$_GET['idade'];
$id = $_GET['id'];
$sql = "update exemplo2 
set nome='$nome', 
  idade=$idade
  where id=$id";
  
$count = $dbh->exec($sql );
echo "<p>$count registro(s) foi atualizado</p>";
echo "<a href=index.php>Voltar</a></p>";
?>