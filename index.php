<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Página de consulta</title>
<link rel=stylesheet href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>

<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>
 
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</head>
<body>
<br><br>
<a href=novo.php>Novo Registro</a>
<br><br>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
<?php
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = 'SELECT * FROM exemplo2 ';
foreach ($dbh->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['idade']."</td>";
    echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
    echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
    echo "</tr>";
}
?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>