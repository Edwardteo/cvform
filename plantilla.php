<!DOCTYPE html>
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Curriculum</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<body id="body">

		<h1 id="centro"><label >Curriculum Vitae</label><h1>
			<section>
				<div id="titulo"><label>Datos Personales</label></div>
				<div id="datos">
					<label>Nombre: <?php echo $data['personales']['nombre']?> <?=$data['personales']['apaterno']?> <?=$data['personales']['amaterno']?></label></br>
					<label>Fecha de Nacimiento: <?php echo $data['personales']['fecha_nacimiento']?></label></br>
					<label>Nacionalidad: <?php echo $data['personales']['nacionalidad']?></label></br>
					<label>Estado Civil: <?php echo $data['personales']['estado_civil']?></label></br>
					<label>Codigo Postal: <?php echo $data['personales']['codigo_postal']?></label></br>
					<label>Telefono: <?php echo $data['personales']['telefono']?></label></br>
					<label>Email: <?php echo $data['personales']['email']?></label></br>
				</div>
			</section>
			<section>
				<div id="titulo"><label>Datos Escolares</label></div>
				<div id="datos">
					<?php foreach ($data['escolaridad'] as $key => $esc) { ?>			
					<label>Nombre de Escuela: <?php echo $esc['nombre_escuela']?> </label></br>
					<label>Fecha de Ingreso: <?php echo $esc['fecha_inicio']?></label></br>
					<label>Fecha de Egreso: <?php echo $esc['fecha_fin']?></label></br>
					<label>Nivel: <?php echo $esc['nivel']?></label></br>
					<?php } ?>
				</div>
			</section>
			<section>
				<div id="titulo"><label>Experiencia Laboral</label></div>
				<div id="datos">
					<?php foreach ($data['experiencia'] as $key => $exp) { ?>			
					<label>Nombre de Empresa: <?php echo $exp['nombre_empresa']?> </label></br>
					<label>Fecha de Ingreso: <?php echo $exp['fecha_inicio']?></label></br>
					<label>Fecha de Salida: <?php echo $exp['fecha_fin']?></label></br>
					<label>Puesto: <?php echo $exp['puesto']?></label></br>
					<label>Funciones: <?php echo $exp['funciones']?></label></br>
					<?php } ?>
				</div>
			</section>
			<section>
				<div id="titulo"><label>Idiomas</label></div>
				<div id="datos">
					<?php foreach ($data['idiomas'] as $key => $idm) { ?>			
					<label>Idioma: <?php echo $idm['idioma']?> </label></br>
					<label>Dominio: <?php echo $idm['dominio']?> %</label></br>
					<label>Certidficaciones: <?php echo $idm['certificado']?></label></br>
					<?php } ?>
				</div>
			</section>
			<section>
				<div id="titulo"><label>Herramientas Informaticas</label></div>
				<div id="datos">
					<?php foreach ($data['herramientas'] as $key => $hrm) { ?>			
					<label>Nombre de Herramienta: <?php echo $hrm['nombre_herramienta']?> </label></br>
					<label>Descripcion: <?php echo $hrm['descripcion']?></label></br>
					<label>Dominio: <?php echo $hrm['dominio']?> %</label></br>
					<?php } ?>
				</div>
			</section>
			<div id="izq">
				<input type="button" value="Nuevo" onclick="location.href='salida.php'" style="width:100px;height:50px"></br>
				<input type="button" value="Imprimir" onclick="print();" style="width:100px;height:50px"></br>
			</div>
	</body>
</html>