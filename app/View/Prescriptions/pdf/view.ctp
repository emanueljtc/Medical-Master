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
		h3{
					text-decoration: none;
					font-family: "monospace", Georgia, Serif;
					font-size: 15px;

		}
		h1{
					text-decoration: none;
					font-family: "monospace", Georgia, Serif;
					font-size: 25px;
		}
		p{
			text-decoration: none;
			text-align: justify;
			font-family: "Times New Roman", Georgia, Serif;
			font-size: 130%;
			text-indent: 3em;
		}
		a:link {
		    color: #000;
				text-decoration: none;
		}
		.a {
			position: absolute;
			top: 252px;
			right: 100px;
			width: 610px;
			height: 370px;
			border-radius: 14px;
			border: 2px solid #73AD21;
			text-align: center;
			text-transform: uppercase;
			font-size: 20px;
			font-family: monospace;
			font-weight: bold;
			background-image:url("http://localhost/medical_master/app/webroot/img/medicalmaster2.png");
			background-color: rgba(100, 147, 237, 0.39);
			background-repeat: no-repeat;
			background-position: center;

			}
		.b {
			position: absolute;
			top: 255px;
			right: 100px;
			width: 610px;
			height: 370px;
			border-radius: 14px;
			border: 2px solid #73AD21;
			text-align: center;
			text-transform: uppercase;
			font-size: 20px;
			font-family: monospace;
			font-weight: bold;
			background-image:url("http://localhost/medical_master/app/webroot/img/medicalmaster2.png");
			background-color: rgba(100, 147, 237, 0.39);
			background-repeat: no-repeat;
			background-position: center;
		}
		.recipe1 {
			position: absolute;
			top: 630px;
			right: 12%;
			width: 797px;
			height: 437px;

		}
		.recipe2 {
		    position: absolute;
		    top: 0px;
		    right: 12%;
		    width: 797px;
		    height: 437px;


		}
		.indicaciones {
			position: absolute;
			top: 210px;
			right: -50px;
			width: 797px;
			height: 437px;
			text-transform: uppercase;
			display: -webkit-inline-box;
			font-size: 15px;

		}
		.tratamiento {
			position: absolute;
		    top: 205px;
		    right: -50px;
		    width: 797px;
		    height: 437px;
		    text-transform: uppercase;
				display: -webkit-inline-box;
				font-size: 15px;

		}
		.fecha{
			font-size: 20px;
			font-weight: bold;
			text-decoration: none;
			text-align: right;
		}

</style>

<div class="recipe2">
		<div class="fecha">
		<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
		</div >
			<!-- <img src="http://localhost/medical_master/app/webroot/img/images.jpg" align="left" height="200" width="200"> -->
			<img src="http://localhost/medical_master/app/webroot/img/logo.png" align="left" height="200" width="200">

			<!-- <img src="http://localhost/medical_master/app/webroot/img/images.jpg" align="right" height="200" width="200"> -->
			<img src="http://localhost/medical_master/app/webroot/img/floresta.gif" align="right" height="200" width="200">

																<center>
										<h1>Dr. Gustavo Torres Sanchez</h1>
										<h3>Cirujano General - Cirujano Oncólogo</h3>
								<h4>MSDS: 23392 - CMA: 2082 - RIF: V-4567839-0 </h4>

																</center>

	<div class="tratamiento">
		<h3><?php echo "Tratamiento"."-"."Paciente:".$this->Html->link($prescription['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $prescription['Person']['id']), array('class' => '')); ?></h3>
		<h3><?php echo h("-"."Recipe:".$prescription['Prescription']['id']); ?></h3>

	</div>
		<div class="a">
			<br>
			<?php echo h($prescription['Prescription']['prescription']); ?>
		</div>
</div>


<div class="recipe1">


			<!-- <img src="http://localhost/medical_master/app/webroot/img/images.jpg" align="left" height="200" width="200"> -->
			<img src="http://localhost/medical_master/app/webroot/img/logo.png" align="left" height="200" width="200">



			<!-- <img src="http://localhost/medical_master/app/webroot/img/images.jpg" align="right" height="200" width="200"> -->
			<img src="http://localhost/medical_master/app/webroot/img/floresta.gif" align="right" height="200" width="200">

																<center>
										<h1>Dr. Gustavo Torres Sanchez</h1>
										<h3>Cirujano General - Cirujano Oncólogo</h3>
						<h4>MSDS: 23392 - CMA: 2082 - RIF: V-4567839-0 </h4>

												      </center>
		<div class="indicaciones">
			<h3><?php echo "Indicaciones"."-"."Paciente:".$this->Html->link($prescription['Person']['full_name'], array('controller' => 'people', 'action' => 'view', $prescription['Person']['id'])); ?></h3>
			<h3><?php echo h("-"."Recipe:".$prescription['Prescription']['id']); ?></h3>
		</div>
		<div class="b">
				<br>
				<?php echo h($prescription['Prescription']['indications']); ?>
		</div>
</div>
