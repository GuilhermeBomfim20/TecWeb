<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTROLE DE GRAVIDADE</title>
    <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" sizes="192x192" href="img/user.png">
    <link rel="stylesheet" href="index2.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>



<body class="bg-light">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <<h1 class="display-3" >SISTEMA</h1>
            <h1 class="display-4">CONTROLE DE GRAVIDADE </h1>
           <input type="button" onclick="sair: location.href='index.php';" value="Sair">
        </div>
    </div>

        <input type="text" id="t1" placeholder=" Digite o nome do paciente..." style="margin-left:450px; width: 390px; height: 38px;" />
 
    <button class="btn btn-secondary" id="b1" onclick="insert()" style="margin-left: 7px; height: 40px;">inserir</button>
   
    <br><br>

    <div id="verde">
       <b> <strong style="font-size: 20px;  color: #000000">POUCO URGENTE</strong></b>
    </div>
    <div id="amarelo">
        <b><strong style="font-size: 20px; color: #000000">URGENTE</strong></b>
    </div>
    <div id="vermelho">
        <b><strong style="font-size: 20px; color: #000000">EMERGÊNCIA</strong></b>
    </div>

    <script>
        function insert() {
            var x = document.getElementById('t1').value;
            $("body").append("<p><strong>" + x + "<strong></p>");
            document.getElementById('t1').value = '';
            $(function() {
                $("p").draggable();
            });
        }
    </script>


</body>

</html>