<!-Crar un formulario donde se ingresen marcas de autos (minimo 6) y al aplicar submit
        recupere los datos y arme un vector y lo imprima ordenado.->
<html>
	<head>
		<link rel="stylesheet" href="./stylus.css">
	</head>
	<body>
		<title>TP3</title>
		<div>
			<h1>Marcas de Coches</h1>
		</div>
		<form action="vector.php" method="POST" enctype="multipart/form-data">
			<table>
				<tbody>
					<tr>
						<td>&nbsp;Marca auto (1):</td>
						<td>&nbsp;<input type="nombre" name="a_coche" value="fiat"/> <br/></td>
					</tr>
                    <tr>
                    <td>&nbsp;Marca auto (2):</td>
						<td>&nbsp;<input type="nombre" name="b_coche" value="ford"/> <br/></td>
					</tr>
                    <tr>
                    <td>&nbsp;Marca auto (3):</td>
						<td>&nbsp;<input type="nombre" name="c_coche" value="citroen"/> <br/></td>
					</tr>
					
					<tr>
						<td>&nbsp;Marca auto (4):</td>
						<td>&nbsp;<input type="nombre" name="d_coche" value="peugeot"/> <br/></td>
					</tr>
                    <tr>
                    <td>&nbsp;Marca auto (5):</td>
						<td>&nbsp;<input type="nombre" name="e_coche" value="nisan"/> <br/></td>
					</tr>
                    <tr>
                    <td>&nbsp;Marca auto (6):</td>
						<td>&nbsp;<input type="nombre" name="f_coche" value="jeep"/> <br/></td>
					</tr>
				</tbody> 
			</table>
			<br/>
			<div>
				<br/>
				<input type="submit" name="submit" id="Submit" />
			</div>
			<?php
				
			?>
	</body>
</html>