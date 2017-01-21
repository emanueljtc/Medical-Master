<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
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
.fecha{
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align: right;
}
</style>

	<div class="fecha">
	<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
	</div >


<br>
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
		<td class="centrar titulo" colspan="5">Lista de Pagos</td>
	</tr>

				<tr class="cabeza">

						<th>Pacientes</th>
						<th>Nº Citas</th>
						<th>Fechas de Pagos</th>
						<th>Tipo de Pagos</th>
						<th>Monto Total</th>
				</tr>

		<tbody>
			<?php $acumulador = 0; ?>

			<?php foreach ($charges as $charge): ?>
			<tr class="contenido">
				<!-- <td><?php echo h($charge['Charge']['id']); ?>&nbsp;</td> -->


				<td><?php echo h($charge['Person']['full_name']); ?>&nbsp;</td>
				<td><?php echo h($charge['Citation']['id']); ?>&nbsp;</td>
				<td><?php echo h($charge['Charge']['modified']);?>&nbsp;</td>
				<td><?php echo h($charge['Typepayment']['type_payment']);?>&nbsp;</td>
				<td><?php echo h($charge['Charge']['total_cost']);?>&nbsp;</td>

				<?php $acumulador += $charge['Charge']['total_cost']; ?>

			</tr>

		<?php endforeach; ?>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>TOTAL</strong></td>
			<td><?php echo $acumulador; ?></td>
		</tr>

</table>
