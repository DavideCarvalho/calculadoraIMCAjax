<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora IMC</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="imc">
                <form id="form">
                    <h1>Calculadora de IMC</h1>
                    <label>Peso</label>
                    <input type="text" id="peso" name="peso" placeholder="KG">
                    <label>Altura</label>
                    <input type="text" id="altura" name="altura" placeholder="KG">
                    <p class="resultado"></p>
                    <button id="btn1">Calcular</button>
                </form>
            </div>
        </div>
        <script src="js/jquery-min.js"></script>
        <script src="js/mask.js"></script>
        <script src="js/script.js"></script>
        
    </body>
</html>
