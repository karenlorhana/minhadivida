<head>
        <title>INSERIR GASTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body{
                background-image:url(https://www.htmlcsscolor.com/preview/gallery/4682B4.png);
                padding-top:50px;
                padding-right:25px;
                padding-left:25px;
                padding-bottom:50px;
            }
        </style>
    </head>
    <center> 
        <h1>Insira seus gastos:</h1>
        <br>
        <form name="gastos" action="indexS.php" method="post">
            <b>Local de compra:</b> <input type="text" name="local">
            <br>
            <br>
            <b>Data:</b>
            <input type="date" name="data" value="data"> 
            <br>
            <br>
            <b>Valor:</b> <input type="number" name="valor">
            <br>
            <br>

            <b>Tipos:</b>

            <select name="tipos">
                    <option name="vazio"> Tipos </option>
                <option name="cartao"> Cartão </option>
                <option name="dinheiro"> Dinheiro </option>
                </select>
           
            <br>
            <br>
           <input type="submit" name="enviar">
            <br>
            </form>
    </center>
    </body>
</html>