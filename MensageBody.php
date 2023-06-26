<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>

<style>
   body{
    background-color: #553322;
   }

    .balao2{
    margin: 0 auto; 
    background: white;
    font-family: 'open sans';
    font-size: 0.85em;
    line-height: 1.6em;  
    border-radius: 8px;
    width: 300px;
    height: auto;
    color: black;
    padding: 15px;
    position: relative;
    margin-top: 30px;
}
.balao2:after{ /*Triangulo*/
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    /*Faz seta "apontar para baixo. Definir o valor como 'top' fará ela "apontar para cima" */
    /*Aqui entra a cor da "aba" do balão */
    border-bottom: 15px solid white;
    top: -14px; /*localização. Experimente alterar para 'bottom'*/
    left: 45%;
}
</style>
</head>
<body>
    <div class="balao2">
        Mensagem Sub
    </div>
</body>
</html>