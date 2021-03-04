<html>
<body>
  <?php
    //if($_POST!="" & $_POST!="")
    switch ($_POST["op"]) {
      case "sum":
        echo $_POST["a_num"]+$_POST["b_num"];
        break;
      case "res":
        echo $_POST["a_num"]-$_POST["b_num"];
        break;
      case "mul":
        echo $_POST["a_num"]*$_POST["b_num"];
        break;
      case "div":
        if ($_POST["b_num"] == 0){
          echo 'El divisor 0. Intente con otro número.';
        } else {
          echo $_POST["a_num"] / $_POST["b_num"];
        }
        break;
      default:
        // code...
        break;
    }


    set_error_handler(function () {
      throw new Exception('Ach!');
    });
  ?>
<body>
</html>

<!-- 
try {
          echo $_POST["a_num"]/$_POST["b_num"];
        } catch( Exception $e ){
          echo "Define otro divisor".PHP_EOL;
          echo "n/a";
        }
-->