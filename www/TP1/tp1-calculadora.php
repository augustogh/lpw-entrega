<html>

<head>
    <link rel="stylesheet" href="./css/stylus-calc.css">
</head>

<body>
    <title>TP1</title>
    <div>
        <h1>Calcular</h1>
    </div>
    <form action="resultado.php" method="POST">
        Valor A: <input type="number" name="a_num" value="0" /> Valor B: <input type="number" name="b_num" value="0" />
        <div class="radio">
                <h2>Operación</h2>
                <input type="radio" name="op" value="sum" checked/>
                <label for="sumar">sumar</label>

                <input type="radio" name="op" value="res" />
                <label for="restar">restar</label>

                <input type="radio" name="op" value="mul" />
                <label for="multiplicar">multiplicar</label>

                <input type="radio" name="op" value="div" />
                <label for="dividir">dividir</label>
        </div>
        <br><input type="submit" value="Calcular">
    </form>

</body>

</html>