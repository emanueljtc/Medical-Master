<style>
.titulo{
	font-family: monospace;
	font-size:40px;
	font-weight:bold;
}

h3{
			text-decoration: none;
			font-family: "monospace", Georgia, Serif;

}
h1{
			text-decoration: none;
			font-family: "monospace", Georgia, Serif;

}
table {
    	width: 100%;
		text-align: center;
		border-collapse: collapse;
		text-decoration: none;
		font-family: monospace;
    font-size: 15px;
}

table .cabeza
{
	background-color:#adc4cc;

}

table .contenido
{
	background-color:#00c0ef;
}

table .subtitulo
{
	background-color:#CAEDDE;
}

.centrar
{
	text-align:center;
}

a{
	text-decoration: none;
}
a:link {
    color: #000;
		text-decoration: none;
}
</style>

													<br><br>

<table class="tabla">
	<tr class="cabeza">
	<img src="http://localhost/medical_master/app/webroot/img/logo.png" align="left" height="200" width="200">

	<!-- <img src="http://localhost/medical_master/app/webroot/img/images.jpg" align="right" height="200" width="200"> -->
	<img src="http://localhost/medical_master/app/webroot/img/floresta.gif" align="right" height="200" width="200">

														<center>
								<h1>Dr. Gustavo Torres Sanchez</h1>
											<h3>Cirujano - Oncólogo</h3>
						<h4>MSDS: 23392 - CMA: 2082 - CI: 4567839 </h4>

														</center>
		</tr>
	<tr class="cabeza">

		<td class="centrar titulo" colspan="3">RECIBO DE PAGO</td>
	</tr>
	<tr class="contenido">
		<td class="centrar" style="background-color: fff;"></td>
		<td class="centrar"><h2>FACTURA Nº:<?php echo h($charge['Charge']['id']); ?></h2></td>
		<td class="centrar"></td>
	</tr>
	<tr class="cabeza">
		<td><strong>PACIENTE:</strong></td>
		<td><strong>CEDULA:</strong></td>
		<td><strong>FECHA DE PAGO: </strong>:</td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo $this->Html->link($charge['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id']), array('class' => 'a')); ?></strong></td>
		<td><strong><?php echo $this->Html->link($charge['Person']['dni'], array('controller' => 'people', 'action' => 'view', $charge['Person']['id']), array('class' => 'a')); ?></strong></td>
		<td><strong><?php echo h($charge['Charge']['modified']); ?></strong></td>
	</tr>
	<tr class="cabeza">
		<td><strong>Nº CITA : </strong></td>
		<td><strong>ESTADO :</strong></td>
		<td><strong>TIPO DE PAGO :</strong></td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo $this->Html->link($charge['Citation']['id'], array('controller' => 'citations', 'action' => 'view', $charge['Citation']['id']), array('class' => '')); ?></strong></td>
		<td><strong><?php echo h($charge['Charge']['state_charge']); ?></strong></td>
		<td><strong><?php echo $this->Html->link($charge['Typepayment']['type_payment'], array('controller' => 'typepayments', 'action' => 'view', $charge['Typepayment']['id']), array('class' => '')); ?></strong></td>
	</tr>
	<tr class="subtitulo">
		<td colspan="3"></td>
	</tr>
	<tr class="cabeza">
		<td><strong>OBSERVACIONES:</strong></td>
		<td></td>
		<td></td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo h($charge['Charge']['observations']); ?></strong></td>
		<td></td>
		<td></td>
	</tr>
	<tr class="contenido">
		<td></td>
		<td><h4>MONTO TOTAL: </h4></td>
		<td><strong><?php echo h($charge['Charge']['total_cost']); ?></strong></td>
	</tr>
</table>


</div>










<!-- <div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div > -->
