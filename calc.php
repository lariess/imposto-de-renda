<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IRRF</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="ir.css">
</head>
<body>

<header>

<nav class="navbar">

            <a href="index.html"> <img src="./assets/imagens/seta3.png" > </a>
</header>
<div class="form-container">
<form name="IR" action="" method="POST">
<h3 class="title">Calcule o Imposto de Renda</h3>
<input type="text" class="form-control" id="salario" name="salario" require placeholder="digite seu salário" />

<button type="submit" class="butao" name="calcular">Calcular</button>
<button type="reset" class="butao" name="limpar">Limpar</button>

<br>

<?php
if((isset($_POST["calcular"]))){
    echo("<br>");
$s = $_POST["salario"];

$a = 0;
$b = 0;
$c = 0;
$d = 0;

    if ($s <= 1903.98){
        
    echo("Seu salário é Isento");
    
    }
 else if($s<=2826.65){
        
        echo("Seu IR é de 7,5%" );

    }

    else if($s<=3751.05){
       
        echo("Seu IR é de 15%");

    } else if($s<=4664.68){
    
        echo("Seu IR é de 22,5%");

    } else if ($s>4664.68) {
        echo("Seu IR é de 27,5%" );

    } else{
        echo("OOPS!! Digite um valor válido");

    }
}

?>

</div>


    
<!---Arquivos js-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>