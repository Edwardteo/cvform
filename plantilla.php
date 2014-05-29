<?php
$data['herramientas'][0]['nombre_herramienta']="C#";
$data['herramientas'][0]['descripcion']="asdasdas das d asd asd as da sd asd a sd asd sd sa d as d asd as d as d asd as dsa d100";
$data['herramientas'][0]["dominio"]="100";
$data['idiomas'][0]['idioma']="Ingles";
$data['idiomas'][0]['dominio']="100";
$data['idiomas'][0]["certificado"]="pet";
$data['escolaridad'][0]['nombre_escuela']="Josefa Ortiz de Dominguez";
$data['escolaridad'][0]['fecha_inicio']="1999-01-01";
$data['escolaridad'][0]["fecha_fin"]="2006-01-01";
$data['escolaridad'][0]["nivel"]="Primaria";
$data['experiencia'][0]['nombre_empresa']="Josefa Ortiz de Dominguez";
$data['experiencia'][0]['fecha_inicio']="1999-01-01";
$data['experiencia'][0]["fecha_fin"]="2006-01-01";
$data['experiencia'][0]["puesto"]="Primaria";
$data['experiencia'][0]["funciones"]="Primaria";
$data['personales']["nombre"]="Eduardo";
$data['personales']["apaterno"]="Teofilo";
$data['personales']["amaterno"]="Ontiveros";
$data['personales']["fecha_nacimiento"]="1992-10-18";
$data['personales']["nacionalidad"]="Mexicano";
$data['personales']["estado_civil"]="Soltero";
$data['personales']["codigo_postal"]="54110";
$data['personales']["telefono"]="5540724638";
$data['personales']["email"]="eteo92@gmail.com";
?>

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
					<label>Fecha de Nacimiento: <?=$data['personales']['fecha_nacimiento']?></label></br>
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
	</body>
</html>