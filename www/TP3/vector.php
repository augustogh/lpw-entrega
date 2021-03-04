<!-Crar un formulario donde se ingresen marcas de autos (minimo 6) y al aplicar submit
recupere los datos y arme un vector y lo imprima ordenado.->
<html>
  <body>
    <?php
    /*if($_POST!="" & $_POST!="")
    echo $_POST["a_num"]+$_POST["b_num"];
    sort($numeros, SORT_NUMERIC);
			sort($letras, SORT_STRING); 
			rsort($numeros, SORT_NUMERIC);
      rsort($letras, SORT_STRING);
      
      print_r($coches);
			*/
    //$coches = $_POST["a_coche"];
      $coches = array(
        $_POST["a_coche"],
        $_POST["b_coche"],
        $_POST["c_coche"],
        $_POST["d_coche"],
        $_POST["e_coche"],
        $_POST["f_coche"]
      );
      sort($coches);
      print_r($coches);
    ?>
  <body>
</html>