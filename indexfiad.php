<!DOCTYPE html>
<html lang="es">

<head>
  <title>UABC - FIAD</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="UABC FIAD">
  <meta name="author" content="Blank Design Factory">
  <link rel="icon" href="/img/common/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600,700|Roboto:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/site.css" rel="stylesheet">
	<link href="css/template_index.css" rel="stylesheet">
<style>
#myCarousel{    
    width: 250px;  
   background-color: rgba(33,81,20,.9);	
}
#carousel2-item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */	 
    overflow-y: scroll;
}
p.notas{
	text-align:justify;
	font-size:12px;
	color:white;
}
div.ex1 {
  width: 270px;
  height: 280px;
 position: absolute;
  top: 517px;
  right: -18px;
}
#carousel2-caption {
    width:96%;
    height:100%;
    left:4px !important;
	right:4px;    
}
#blink{
 animation:blinkingText 1.2s infinite;
 color: #1c87c9;
 font-size: 16px;
text-align: right;
font-weight: bold;
}
@keyframes blinkingText{
	    0%{     color: #FFC90E;    }
    49%{    color: #FFC90E; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
	    100%{   color: #FFC90E;    }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="http://fiad.ens.uabc.mx/index.php" alt="Inicio">
		<span class="header-logo-image-small"></span>
	</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
		</button>

	<div class="headery">
		<a class="navbar-brand d-none d-lg-block" href="http://fiad.ens.uabc.mx/index.php" alt="Inicio">
			<div class="header-logo-image-large d-none d-lg-block"></div>
		</a>
	  <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
	    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
		    <li>
					<a  class="nav-link" href="http://fiad.ens.uabc.mx/index.php" alt="Inicio">INICIO</a>
				</li>
		    <li class="nav-item dropdown">
					<div>
						<a class="nav-link dropdown-toggle"  href="http://fiad.ens.uabc.mx/facultad/index.php" alt="Facultad" class="dropdown-toggle" data-toggle="dropdown">FACULTAD</a>
						<ul class="dropdown-menu">
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/index.php">Bienvenida </a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/mision.php">Misión y Visión</a></li>
<!-- 							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/objetivos.php">Informes de Gestion</a></li>  -->
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/historia.php">Historia</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/organigrama.php">Manual de Organización</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/directorio.php">Directorio</a></li>
						        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/modelo.php">Modelo Educativo</a></li>
    							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/protocolos.php">Protocolos</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/consejo.php">Consejo Técnico y Univ.</a></li>
						        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/comit-vinculacin.php">Consejo de Vinculaci&oacute;n</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/egresados.php">Estudios Egresados</a></li>
							<!-- <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/recomendaciones.php">Recomendaciones JG</a></li> -->
     							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/convocatorias.php">Convocatorias</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/coil.php">Collaborative Online International Learning</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/desarrollofiad.php">Plan Desarrollo FIAD</a></li>
						        <a class="dropdown-item" href="https://sites.google.com/uabc.edu.mx/actualizaciondocentebio/inicio" target="_blank">Actualización Docente</a></li>
                                                   	<a class="dropdown-item" href="http://fiad.ens.uabc.mx/normatividad/codigo_etica.pdf" target="_blank">Código de Ética Universitario</a></li>
<!--							<a class="nav-link dropdown-toggle"  href="http://fiad.ens.uabc.mx/facultad/acreditaciones.php" alt="Acreditaciones" class="dropdown-toggle" data-toggle="dropdown">Acreditaciones</a></li>
                                                        <ul class="dropdown-menu">
-->
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/internacionales.php">Acreditaciones Internacionales</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/nacionales.php">Acreditaciones Nacionales</a></li>
  							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/facultad/intersemestrales.php">Cursos intersemestrales</a></li>
<!-- </ul> -->
					 </ul>
				</li>
		    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  href="http://fiad.ens.uabc.mx/planes/arquitectura/index.php" alt="Planes de estudio" class="dropdown-toggle" data-toggle="dropdown">PLANES DE ESTUDIO <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/tronco/index.php">Tronco Común</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/arquitectura/index.php">Arquitectura</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/bioingenieria/index.php">Bioingeniería</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/civil/index.php">Ingeniería Civil</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/computacion/index.php">Ingeniería en Computación </a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/electronica/index.php">Ingeniería en Electrónica</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/industrial/index.php">Ingeniería Industrial</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/nanotecnologia/index.php">Ingeniería en Nanotecnología</a></li>
							 <a class="dropdown-item" href="http://fiad.ens.uabc.mx/planes/software/index.php">Ingeniero en Software</a></li>

					 </ul>
				</li>
		<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  href="http://fiad.ens.uabc.mx/horarios/index.php"  alt="Horarios" class="dropdown-toggle" data-toggle="dropdown">HORARIOS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/horarios/index.php">Horarios</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/horarios/examenes.php">Fechas ordinarios</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/horarios/fechas-extraordinarios.php">Fechas extraordinarios</a></li>
   							<a class="dropdown-item" href="https://fiad.edupage.org/timetable/" target="_blank">Horarios de salones</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/colegiados/Colegiados.html" target="_blank">Exámenes Colegiados</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/colegiados/Departamentales.html"  target="_blank">Exámenes Departamentales</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/colegiados/Trayecto.html"  target="_blank">Exámenes de Trayecto</a></li>
						</ul>
				</li>
				<li class="nav-item dropdown">
			    	<a  class="nav-link dropdown-toggle" href="http://fiad.ens.uabc.mx/alumnos/index.php" alt="Alumnos" class="dropdown-toggle" data-toggle="dropdown">ALUMNOS  <span class="caret"></span></a>
						<div class="dropdown-menu">
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/aoep.php">Nuevo Ingreso</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/index.php">Titulación </a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/aoep.php">Atención Psicopedagógica</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/proginsttray.php">Programa Institucional con Trayectoria</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/becas.php">Becas</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/intercambio.php">Intercambio estudiantil</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/internacionalizacion.php">Programa de Internacionalización</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/movilidad.php">Movilidad interna</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/reinscripciones.php">Reinscripciones</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/tutorias.php">Tutorías</a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/programaasesorias.php">Programa de Asesorías</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/servicio_social_comunitario.php">Servicio Social Comunitario</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/servicio_social_profesional.php">Servicio Social Profesional</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/practicas.php">Prácticas Profesionales</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/examenes-departamentales.php">Exámenes departamentales</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/evaluacion_permantente.php">Evaluación Permanente</a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/intersemestrales.php">Cursos intersemestrales</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/educacion_continua.php">Educación Contínua</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/convenios.php">Convenios FIAD</a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/justificantes.php">Justificantes</a>
							 <a class="dropdown-item" href="http://fiad.ens.uabc.mx/alumnos/quejas.php">Buzón de quejas</a>
						</div>
				</li>

				<li class="nav-item dropdown">
		    	<a  class="nav-link dropdown-toggle" href="http://fiad.ens.uabc.mx/recursos/index.php" alt="Recursos" class="dropdown-toggle" data-toggle="dropdown">RECURSOS  <span class="caret"></span></a>
					<div class="dropdown-menu">
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/index.php">Encuestas y formatos </a>
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/eventos.php">Próximos Eventos </a>
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/laboratorios.php">Laboratorios </a>
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/revista.php">Revista Tetrápodo </a>
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/bolsa.php">Bolsa de Trabajo </a>
                                                                <a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/hora_universitaria.php">Hora Universitaria </a>
								<a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/publicaciones.php">Publicaciones </a>

					</div>
				</li>
		    <li>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://fiad.ens.uabc.mx/posgrado/index.php" alt="Posgrado" class="dropdown-toggle" data-toggle="dropdown">POSGRADO <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/index.php">Posgrado e Investigación</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/posgrado.php">Posgrado FIAD </a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/noticias.php">Noticias Posgrado </a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/cuerpos.php">Investigación FIAD </a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/extension.php">Extensión y Vinculación  </a>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/egreso.php">Perfil de Egreso </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/objetivos.php">Objetivos del programa </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/plan-de-estudios.php">Plan de estudios </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/alumnos.php">Alumnos matriculados </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/nucleo.php">Núcleo académico </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/lgac.php">Líneas generación y/o aplicación del conocimiento </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/tutoria.php">Tutoría </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/productividad.php">Productividad académica </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/colaboracion.php">Colaboración con otros sectores </a>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/posgrado/procesos.php">Procesos administrativos </a>
						</li>
					</ul>
				 </div>

					<a  class="nav-link" ></a>
				</li>
				<li>
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" alt="Normatividad" class="dropdown-toggle" data-toggle="dropdown">NORMATIVIDAD<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<a class="dropdown-item" href="http://sriagral.uabc.mx/Externos/AbogadoGeneral/Tabuladores/2022/SPSU/01.pdf" target="_blank">Contrato Colectivo SPSU</a></li>
							<a class="dropdown-item" href="http://sriagral.uabc.mx/Externos/AbogadoGeneral/Reglamentos/Estatutos/03_EstatutoEscolarUABC_Reforma_May_202021.pdf" target="_blank">Estatuto Escolar UABC</a></li>
							<a class="dropdown-item" href="http://sriagral.uabc.mx/Externos/AbogadoGeneral/Reglamentos/Estatutos/01_EstatutoPersonalAcademicoOctubre2014.pdf" target="_blank">Estatuto Personal Académico</a></li>
							<a class="dropdown-item" href="https://drive.google.com/file/d/1trhWXgGu7ILqMeV3EUFgkYEvEFouOir7/view?usp=sharing" target="_blank">Manual Organizacional FIAD</a></li>                    							     <a class="dropdown-item" href="http://www.uabc.mx/formacionbasica/modeloedu.html" target="_blank">Modelo Educativo UABC (Compacto)</a></li>
							<a class="dropdown-item" href="http://web.uabc.mx/formacionbasica/documentos/ModeloEducativodelaUABC2018.pdf" target="_blank">Modelo Educativo UABC</a></li>
							<a class="dropdown-item" href="http://planeacion.uabc.mx/pdi2023/docs/UABC_PDI_2023-2027_Ejecutivo.pdf" target="_blank">Plan de Desarrollo Institucional</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/normatividad/ri_fiad_2025.pdf" target="_blank">Reglamento Interno FIAD</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/normatividad/codigo_etica.pdf" target="_blank">Código de Ética Universitario</a></li>
                                                        <a class="dropdown-item" href="https://www.uabc.mx/wp-content/uploads/bsk-pdf-manager/2023/10/Programa-Institucional-para-la-Cultura-de-Paz-UABC_.pdf" target="_blank">Prog. Inst. para la Cultura de Paz</a></li>
							<a class="dropdown-item" href="https://sriagral.uabc.mx/externos/abogadogeneral/Acuerdos/Rector/69.pdf" target="_blank">Declaratoria Cero Tolerancia</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/perch/resources/documents/g-615-ee.pdf" target="_blank">Protocolo Atención Violencia de Género</a>
					</ul>
				    </div>
					</li>
	                                <li>
                                        <div class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="" alt="Transparencia" class="dropdown-toggle" data-toggle="dropdown">TRANSPARENCIA<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/transparencia/recomendaciones.php">Recomendaciones JG</a></li>
						      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/transparencia/objetivos.php">Informes de Gestión</a></li>
						      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/transparencia/perfil-de-directivos.php">Perfil de Directivos</a></li>
						      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/transparencia/designacion.php">Designación de director 2023-2027</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/transparencia/control-interno.php">Control Interno</a></li>
						      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/recursos/recomendaciones_it.pdf">Recomendaciones respaldos y seguridad</a></li>



                               </ul>
</div>
</li>

                            <li>
     <div class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="" alt="Covid" class="dropdown-toggle" data-toggle="dropdown">SALUD<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/salud/protocoloEM.pdf" target="_blank">Protocolo de Emergencias Médicas</a></li>
 <a class="dropdown-item" href="http://fiad.ens.uabc.mx/salud/dispensario.pdf" target="_blank">Dispensario Médico y de primeros auxilios</a></li>
 <a class="dropdown-item" href="http://fiad.ens.uabc.mx/salud/botiquin.pdf" target="_blank">Botiquin de primeros auxilios</a></li>
</ul>
</div>

<!--
                                        <div class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="" alt="Covid" class="dropdown-toggle" data-toggle="dropdown">COVID<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/protocoloCovid(oct2021).pdf" target="_blank">Protocolo COVID</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/Regreso2022-1.pdf" target="_blank">Plan Regreso Actividades 2022-1</a></li>
                                                      <a class="dropdown-item" href="https://youtu.be/OcNsLrB_3mA" target="_blank">Video uso CimaPass Cimarron</a></li>
                                                      <a class="dropdown-item" href="https://drive.google.com/file/d/1CO3WSBPgsd1sKs2FH_CCze-pW9XADnC9/view?usp=sharing" target="_blank">Video uso CimaPass Centinela</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/instrucciones_alumnos.pdf" target="_blank">Instrucciones alumnos con actividad presencial</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/instrucciones_tecnicos_rl.pdf" target="_blank">Instrucciones técnicos resp. de laboratorio</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/instrucciones_docentes_filtro.pdf" target="_blank">Instrucciones docente en filtro sanitario</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/instrucciones_docentes_practica.pdf" target="_blank">Instrucciones docentes resp. práctica lab.</a></li>
                                                      <a class="dropdown-item" href="http://fiad.ens.uabc.mx/covid/pruebas_covid.jpeg" target="_blank">Centro de diagnóstico COVID-19 UABC</a></li>

                               </ul>
</div>
-->
</li>

 <li>
                                        <div class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="" alt="Expo" class="dropdown-toggle" data-toggle="dropdown">EXPOCIENCIA<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/expo/expo2025.php">2025</a></li>
                                                        <a class="dropdown-item" href="http://fiad.ens.uabc.mx/expo/expo2024.php">2024</a></li>
						      	<a class="dropdown-item" href="http://fiad.ens.uabc.mx/expo/expo2023.php">2023</a></li>
							<a class="dropdown-item" href="http://fiad.ens.uabc.mx/expo/expo2022.php">2022</a></li>

                               </ul>
</div>
</li>


				<li><a  class="nav-link" href="http://fiad.ens.uabc.mx/contacto/index.php" alt="Contacto">CONTACTO</a></li>

				<li class="search">  <form id="form1_search" action="/search.php" method="get">
    <div>
        <label for="form1_q"></label>
        <input id="form1_q" name="q" class="search-input" placeholder="BUSCAR" type="search">
        <input class="search-button" value="Ir" type="submit">
    </div>
</form>
</li>
	    </ul>
<a href="http://fiad.ens.uabc.mx/en/index.php"><img src="http://fiad.ens.uabc.mx/img/common/usa-flag.png" alt="english" /></a>

  	</div>
	</div>

</nav>

<!-- Home Cover -->
<div class="container-fluid home-cover">
  <div class="row">
    <div class="col-1 bienvenidos1 headertext1">
      <div class=" verticaltext_content" > FIAD <br>
      </div>
    </div>
       <div class="col col-sm-6 col-lg-4 bienvenidos headertext">
                        <div class="row">
                                <div class="horizontaltext_content">
                                        <h2 class="white-header"> Bienvenidos</h2>
                                        <h3 class="white-header"> A la facultad de Ingeniería, Arquitectura y Diseño </h3>
                                </div>
                        </div>
        </div>
<div class="ex1">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
             <li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
       <li data-target="#myCarousel" data-slide-to="8"></li>
        </ol>
        <!-- Wrapper for carousel items -->
       <div class="carousel-inner">
<div class="carousel-item active" id="carousel2-item"> <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">Cultura de Paz</h6>
                <a href="http://fiad.ens.uabc.mx/cultura_paz/UGDIE_042026.pdf" target="_blank">
       <img src="cultura_paz/cp_042026.png" height="210px" width="220px" alt="Cultura de Paz"/></a>
</div>
</div>

<div class="carousel-item" id="carousel2-item">                        <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">Cero Tolerancia</h6>
                <a href="img/infografia_0T.png" target="_blank">
       <img src="img/info_cero.png" height="210px" width="220px" alt="Cero Tolerancia"/></a>                </div>
</div>

<div class="carousel-item" id="carousel2-item">                        <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">Brindando Acceso</h6>
                <a href="https://fundacionuabc.org/convocatorias/" target="_blank">
       <img src="img/acceso2026.jpg" height="210px" width="220px" alt="Fundacion UABC"/></a>                </div>
            </div>

<div class="carousel-item" id="carousel2-item">                        <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">NOTICIAS</h6>
                <a href="https://alumni.fundacionuabc.org" target="_blank">
       <img src="noticias/uabc_alumni.png" height="210px" width="220px" alt="Fundacion UABC"/></a>                </div>
            </div>

<div class="carousel-item" id="carousel2-item"> <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">NOTICIAS</h6>
<center>
<a href="https://drive.google.com/drive/folders/0B6ObgK3Mm9MTfkpoWUFMdTM4OHV4cDRQbFJtTEEwV1plMGZjWG1pdjJIeTBQT0otM1c1WG8?resourcekey=0-hZCMnkNRy-3jCC0ADNA2hg&usp=sharing" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg><br>
<h6 style="color:white;font-weight:bold;">Acervos Digitales</h6></a>
</center></div>
</div>

            <div class="carousel-item" id="carousel2-item">                        <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold;">NOTICIAS</h6>
                     <!-- <h7>Actividades docentes y de investigaci&oacute;n</h7>-->
          <p class="notas">Los catedr&aacute;ticos de la FIAD concluyeron las actividades docentes de
forma virtual durante la segunda mitad del periodo 2020-1, atendiendo
las indicaciones sanitarias. #La UABC no se detiene.</p>
                </div>
            </div>
            <div class="carousel-item" id="carousel2-item">
                <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold">NOTICIAS</h6>
                     
<!--<h7>Actividades docentes y de investigaci&oacute;n</h7>-->
          <p class="notas">Se realiz&oacute; una colecta entre los estudiantes de Tronco Com&uacute;n y
profesores de Ingenier&iacute;a para apoyar a la comunidad Ensenadense por
medio de la casa Gabriel a ni&ntilde;os discapacitados.</p>
                </div>
            </div>
            <div class="carousel-item" id="carousel2-item">
                <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold">NOTICIAS</h6>
  
                       <!-- <h7>Actividades docentes y de investigaci&oacute;n</h7>-->
          <p class="notas">El CA "Comunicaciones e instrumentaci&oacute;n electr&oacute;nica" y el CA de
"Modelado y s&iacute;ntesis de materiales" se encuentran trabajando en un
prototipo para el an&aacute;lisis de muestras biol&oacute;gicas.</p>
                </div>
            </div>
			<div class="carousel-item" id="carousel2-item">
                <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold">NOTICIAS</h6>

                        <!-- <h7>Titulaci&oacute;n</h7>-->
          <p class="notas">En atenci&oacute;n al comunicado "Actualizaci&oacute;n del Plan de Continuidad
Acad&eacute;mica al 25 de mayo de 2020" (Fecha del aviso: 27 de mayo de 2020)
en el que se espec&iacute;fica textualmente en el apartado 5.4:<br>
"Los tr&aacute;mites de emisi&oacute;n de certificados de estudios profesionales, cartas
de pasante, t&iacute;tulos profesionales y diplomas de grado, entre otros, se
reanudar&aacute;n al t&eacute;rmino de la contingencia sanitaria".<br>
Por lo que los sistemas de titulaci&oacute;n est&aacute;n cerrados.<br>
De la misma manera, en concordancia con instancias federales y estatales
tampoco hay fecha programada para tomas de protesta y/o actos
acad&eacute;micos.<br>
Gracias por su comprensi&oacute;n.</p><br>
                </div>
            </div>
			<div class="carousel-item" id="carousel2-item">
                <div class="carousel-caption" id="carousel2-caption">
<h6 style="color:white;font-weight:bold">NOTICIAS</h6>

<!--                        INVESTIGACI&Oacute;N -->
          <p class="notas">Publicaciones cient&iacute;ficas de miembros de nuestra Facultad:<br>
		  <i>Postmortem histopathology and detection of venom by ELISA following suicide by cobra (Naja kaouthia) envenomation.</i>
		  Dayanira Paniagua, Kendall Crowns, Michelle Montonera, Anne Wertheimer, Alejandro Alag&oacute;n &amp; Leslie Boyer.
		Forensic Toxicology volume 38, pages 523-528(2020).
		  </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  	<div class="col col-sm-6 col-lg-4 bienvenidos headertext">
			<div class="row">
				<div class="horizontaltext_content">
					<h2 class="white-header"> Pagos licenciatura</h2>
					<h3 class="white-header"> Pagos para nuevo ingreso y reingreso del martes 13 al jueves 15 de agosto de 2019.</h3>
	
				</div>
			</div>
  	</div>
    -->   

	</div>
  <div class="row no-gutter">
    <div class="col-10 col-offset-1 carreras">
			  <div><a href="http://fiad.ens.uabc.mx/planes/civil/index.php"><img src="img/common/ingenieria_civil.png" alt=""> <br> Ingeniería Civil</a></div>
        <div class="career-divider"></div>
			   <div ><a href="http://fiad.ens.uabc.mx/planes/electronica/index.php"><img src="img/common/ingenieria_electronica.png" alt=""> <br> Ingeniería Electrónica</a></div>
        <div class="career-divider"></div>
         <div ><a href="http://fiad.ens.uabc.mx/planes/computacion/index.php"><img src="img/common/ingenieria_computacion.png" alt=""> <br> Ingeniería Computación</a></div>
        <div class="career-divider"></div>
         <div ><a href="http://fiad.ens.uabc.mx/planes/industrial/index.php"><img src="img/common/ingenieria_industrial.png" alt=""> <br> Ingeniería Industrial</a></div>
        <div class="career-divider"></div>
         <div ><a href="http://fiad.ens.uabc.mx/planes/arquitectura/index.php"><img src="img/common/arquitectura.png" alt=""> <br> Arquitectura</a></div>
        <div class="career-divider"></div>
         <div ><a href="http://fiad.ens.uabc.mx/planes/bioingenieria/index.php"><img src="img/common/bioingenieria.png" alt=""> <br>Bioingeniería</a></div>
        <div class="career-divider"></div>
         <div ><a href="http://fiad.ens.uabc.mx/planes/nanotecnologia/index.php"><img src="img/common/nanotecnologia.png" alt=""> <br>Nanotecnología</a></div>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color:#088C4E;">

  <!-- Row0, Slogan-->
  <div class="row no-gutter">
    <div class="slogan">
      <div class="col-12 slogan-wrapper">
          Mi destino es la cima <br>
          <span class="yellow-dash"><a href="#top"><img src="/img/index/down.png"/ style="width:26px;"></a></span>
      </div>
    </div>
  </div>

  <!-- Row 2, Desarrolla la creatividad, Foto, Becas -->
  <div class="row no-gutter row2">
		  <div class="col-12 col-sm-6  col-lg-4 bg-yellow">
          <img class="centered" src="http://fiad.ens.uabc.mx/img/index/desarrolla.png" alt="" > <br>
      </div>

			<div class="col-12 col-sm-6 col-lg-4 image-holder-square d-none d-lg-block" id="taller">
      </div>

			<div class="col-12 col-sm-6 col-lg-4 bg-red">
        <img class="" src="http://fiad.ens.uabc.mx/img/index/grad.png" alt="" > <br>
		   	<h2 class="red-header"> Becas (UABC, Fundación, SEP, ...) </h2>
        <img class="" src="http://fiad.ens.uabc.mx/img/index/b_guinda.png" alt="" > <br>
        <h3>Apoyos a estudiantes</h3>
        <p style="width: 80%;">Conoce más acerca de los apoyos financieros que ofrecemos a nuestros estudiantes.</p>
      <div class="bg-arrowlink">
        <a href="http://fiad.ens.uabc.mx/alumnos/becas.php">
          <img src="http://fiad.ens.uabc.mx/img/index/flecha_roja.png" alt="" />
        </a><br>
      </div></div>
  </div>
  <!-- Row 3, Foto, Posgrado e Investigación -->
  <div class="row no-gutter row3">
    <div class="col-12 col-sm-6 col-lg-8 image-holder-rectangle" id="crafts"></div>

	   <div class="col-12 col-sm-6 col-lg-4 bg-darkblue">
       <img class="" src="http://fiad.ens.uabc.mx/img/index/lab.png" alt="" > <br>
	  	<h2 class="darkblue-header"> Posgrado </h2><h2 class="white"> e Investigación</h2>
      <img class="" src="http://fiad.ens.uabc.mx/img/index/b_azul.png" alt="" > <br>
      <h3>Maestría y Doctorado en Ciencias e Ingeniería </h3>
      <p style="width: 90%;">Conoce nuestra oferta educativa en el área de estudios de posgrado.</p>
      <div class="bg-arrowlink">
        <a href="http://fiad.ens.uabc.mx/posgrado/index.php">
          <img src="http://fiad.ens.uabc.mx/img/index/flecha_azul.png" alt="" />
        </a><br>
      </div>
	  </div>
  </div>
  <!-- row no-gutter 4, Noticias Importantes, Slides, Foto -->
  <div class="row no-gutter row4">
	   <div class="col-12 col-sm-6  col-lg-4 bg-purple1" id="eventos">
       <img class="centered" src="http://fiad.ens.uabc.mx/img/index/noticias.png" alt="" />
     </div>

    <div class="col-12 col-sm-6  col-lg-4 bg-purple2">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

                    <div class="carousel-item news-links">
  <a href="http://fiad.uabc.mx/perch/resources/documents/calendario_reinscripciones_20262.pdf" alt="">
    <h3 class="purple">Calendario de Reinscripciones</h3>
    <h3 class="white"> 2026-2</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="https://drive.google.com/file/d/1uPbMGjImXcS0lfh1nVpW1XaLwaNu2nmQ/view?usp=sharing" alt="">
    <h3 class="purple">Asignación de materias por convocatoria o problemas en subasta</h3>
    <h3 class="white"> 2026-1</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="https://drive.google.com/file/d/1YmMD18bjLhK0Vkh-VRzuqbNZx7-TFzq7/view" alt="">
    <h3 class="purple">Convocatoria</h3>
    <h3 class="white"> Acreditación o Equivalencia 2026-1</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="https://drive.google.com/file/d/1FmXI9eeu8xRaaQlIMtNJv15PU6wryQWj/view" alt="">
    <h3 class="purple">Convocatoria para reingreso de alumnos</h3>
    <h3 class="white"> que interrumpieron sus estudios 2026-1</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="https://drive.google.com/file/d/18XrQ7wfDQO7Gj58UjC6R77WVuFa4pDlc/view" alt="">
    <h3 class="purple">Calendario de actividades</h3>
    <h3 class="white"> escolares 2025-2 y 2026-1</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="https://drive.google.com/file/d/1kMeZZVGfYVnA5_h0InsYSMtwld4aS2_r/view" alt="">
    <h3 class="purple">Convocatoria Concurso de Selección</h3>
    <h3 class="white"> para el Ingreso a Licenciatura 2025-1</h3>
   </a>
</div>
<div class="carousel-item news-links">
  <a href="http://sriagral.uabc.mx/Secretaria_General/PPREDEPA/index.html" alt="">
    <h3 class="purple">Programa de Reconocimiento al Desempeño del Personal Académico</h3>
    <h3 class="white"> 2025-2026</h3>
   </a>
</div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

   </div>
  <div class="col-12 col-sm-6  col-lg-4 d-none d-lg-block">
<iframe src="https://calendar.google.com/calendar/embed?src=c_1d7f4e2f13a95999832a102148d23da3c765482bb9d0b1cf932b0a4d82a8c1bb%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="100%" height="300" frameborder="0" scrolling="auto"></iframe>
<!--
  <div class="col-12 col-sm-6  col-lg-4 image-holder-rectangle d-none d-lg-block" id="worker"></div>
-->
 
 </div>
  <!-- Row 5, Documentos Necesarios -->
  <div class="row no-gutter bg-green row5" id="bg-green1">
      <div class="col-12 col-sm-5 col-xl-4">
         <div class="section-header">
          <img src="img/index/hoja.png" alt="" class="square-icon">
          <h2 class="green-header">Documentos </h2>
          <h2 class="white-header">necesarios</h2>
    			<img src="img/index/b_verde.png" class="square-icon"/>
        </div>
      </div>

      <div class="col">
        <div class="row section-documents">
            <div class="col-2 col-sm-3"><img class="mx-auto" src="http://fiad.ens.uabc.mx/img/index/monito.png" style="display:block;"/></div>
            <div class="col">
              <h3>Documentos y Actividades</h3>
              <p style="width: 80%;">A continuación se muestran las etapas y serie de actividades que los alumnos  deberan realizar durante su vida estudiantil desde la etapa disciplinaria a la terminal.</p>
            </div>
        </div>
      </div>
  </div>
  <!-- Row 6, Etapas Header -->
  <div class="row no-gutter bg-green row6" id="bg-green2">
      <div class="col-12 col-lg-4 etapas1"></div>
      <div class="col-12 col-lg-4 etapas2"></div>
      <div class="col-12 col-lg-4 etapas3"></div>
  </div>
  <!-- Row 7, Documentos de etapas -->
  <div class="row no-gutter bg-greens row7">
    <div class="col-12 col-lg-4 etapas green1">
        <h2>Disciplinaria</h2>
        <img class="mx-auto" src="http://fiad.ens.uabc.mx/img/index/lightgreen_bar.png" alt="" style="display:block;"> <br>
        <ul>
           <li class="customtooltip">Servicio Social Profesional (SSP) <img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right"/>
             <span class="customtooltiptext"><b>Servicio Social Profesional (SSP). </b>Para asignarse es necesario haber cubierto el 60 % de los créditos totales del plan de estudios. Es requisito haberse asignado a un programa de SSP  antes de cubrir el 85 % de los créditos totales del plan de estudios. A los tres meses de haberse asignado, se deberá subir el reporte trimestral del SSP.</span>
           </li>
            <li class="customtooltip">Ayudantías (docente o investigación)<img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right">
              <span class="customtooltiptext"><b>Ayudantías (docente o investigación). </b> Para poder asignarse se debe haber concluido la etapa básica. Pueden tenerse máximo 2 ayudantías durante todo el programa educativo que se cursa.</span>
            </li>
        </ul>
    </div>

    <div class="col-12 col-lg-4 etapas green2">
      <h2>Terminal</h2>
      <img class="mx-auto" src="http://fiad.ens.uabc.mx/img/index/lightgreen_bar.png" alt="" style="display:block;"> <br>
        <p>
            Es requisito haberse asignado a un programa de SSP  antes de cubrir el <strong> 85 % de los créditos totales</strong> del plan de estudios. Si no se cumple este requisito, la carga académica será sólo de tres unidades de aprendizaje.
            <ul>
                <li class="customtooltip">Prácticas profesionales (PP) <img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right">
                      <span class="customtooltiptext"><b>Prácticas profesionales (PP). </b>Para asignarse se debe haber cubierto el 70 % de créditos totales del plan que se cursa. (Habiendo liberado la primera etapa del servicio social), así como tener activo el seguro facultativo. El período de asignación es dos semanas antes y dos semanas después de haber iniciado el semestre, para que queden acreditadas en el mismo semestre. </span>
                </li>
                <li>PVVC</li>
            </ul>
        </p>
    </div>

    <div class="col-12 col-lg-4 etapas green3">
      <h2>Trámites de Egreso</h2>
      <img class="mx-auto" src="http://fiad.ens.uabc.mx/img/index/lightgreen_bar.png" alt="" style="display:block;"> <br>
      <ul>
          <li class="customtooltip">Kardex en ceros (Historial académico en ceros)<img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right">
            <span class="customtooltiptext"><b>Kardex en ceros (Historial académico en ceros </b>Al terminar el programa educativo, cuando se haya completado el total de los créditos, se deben comenzar los trámites de Egreso, que consisten en tramitar los Certificados y después el título.</span>
          </li>
          <li class="customtooltip">Certificados<img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right">
            <span class="customtooltiptext"><b>Certificados.  </b>Cuando se tenga el historial académico en ceros, deben tramitarse los certificados: a) Certificado de Pasante y b) Certificado de Estudios Profesionales. El trámite se lleva a cabo en el Departamento de Servicios Estudiantiles y Gestión Escolar.</span>
          </li>
          <li class="customtooltip">Título<img src="http://fiad.ens.uabc.mx/img/index/mas_verde.png" class="float-right">
            <span class="customtooltiptext"><b>Título.  </b>Una vez recibidos los certificados, se procede al trámite de título, reuniendo los requisitos en la Coordinación de Extensión y Vinculación (CEV) de la FIAD. La toma de protesta se realiza después de haber tramitado el título, debe esperarse un aviso por parte de la CEV. El título debe recogerse cuando llegue a Servicios Estudiantiles y Gestión Escolar, ellos lo notifican por correo electrónico.</span>
          </li>
      </ul>
    </div>
  </div>
</div>
</div> <!--Container Fluid -->


<div class="container-fluid">
  <footer class="footer">
    <div class="container-fluid" style="padding:0">
<!--
<div class="row">
         <div class="col">
                     Pasos diarios para la PAZ
<iframe src="http://fiad.uabc.mx/recursos/eventos/2024/UGDIE_032024.pdf" style="width:100%; height:300px" frameborder="0">
</div>
         <div class="col">
                   
         </div>
 </div>
-->


      <div class="row bg-beige">
        
	 <div class="col-12 col-lg-6">
          <div class="row no-gutter">
            <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/quehacer.svg" alt=""/> <br/> <a href="http://imageninstitucional.uabc.mx/quehacer/" target="_blank"> Qu&eacute;Hacer Cimarr&oacute;n  </a></div>
            <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/uabc_radio.png" alt="" /> <br/> <a href="http://radio.uabc.mx/" target="_blank"> UABC Radio </a></div>
            <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/gaceta.png" alt="" /><br/><a href="http://gaceta.uabc.mx" target="_blank"> Gaceta UABC </a></div>
            <div class="col-4 col-offset-lg-0 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/contraloria.png" alt="" /><br/><a href="http://sriagral.uabc.mx/ContraloriaSocial/" target="_blank"> Contraloría</a></div>
          </div>
        </div>
        
	 <div class="col-12 col-lg-6">
            <div class="row no-gutter">
              <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/transparencia.png" alt="" /><br/><a href="http://sriagral.uabc.mx/transparencia/" target="_blank"> Transparencia </a></div>
              <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/correo.png" alt="" /><br/><a href="http://correo.uabc.edu.mx/" target="_blank"> Correo </a></div>
              <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/biblioteca.png" alt="" /><br/><a href="http://www.uabc.mx/biblioteca/" target="_blank"> Biblioteca </a></div>
              <div class="col-4 col-lg-3"><img src="http://fiad.ens.uabc.mx/img/common/imagen.png" alt="" /><br/><a href="http://www.imagenuabc.tv/" target="_blank"> IMAGENUABC.TV </a></div>
            </div>
        </div>
        </div>
      

	
	<div class="row gold-footer">
          <div class="col-12 col-sm-6 col-md-3 col-lg-4 gold-footer-dark">
            <div style="height:100%">
                  <img src="http://fiad.ens.uabc.mx/img/common/quote.png" alt="Mi destino es la cima." /> <br/>
            </div>

          </div>
          <div class="col gold-footer-light">
            <div class="row links-footer footer-headers">
                <div class="col-6 col-lg-3">
                  <div class="row footer-titles">
                    <h1>Nuestra facultad</h1>
                  </div>
                  <div class="row">
                    <div class="col">
                      <img src="http://fiad.ens.uabc.mx/img/common/orange_bar.png" alt="" /> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/mision.php">Misión</a> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/mision.php">Visión</a> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/historia.php">Historia</a> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/modelo.php">Modelo Educativo</a> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/organigrama.php">Organigrama</a> <br/>
                      <a href="http://fiad.ens.uabc.mx/facultad/index.php">Acreditación</a> <br/>
                    </div>
                </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="row footer-titles">
                    <h1>Programas</h1>
                  </div>
                  <div class="row">
                        <div class="col">
                          <img src="http://fiad.ens.uabc.mx/img/common/orange_bar.png" alt="" /><br/>
                          <a href="http://fiad.ens.uabc.mx/planes/civil/index.php">Ing. Civil</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/industrial/index.php">Ing. Industrial</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/electronica/index.php">Ing. en Electrónica</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/computacion/index.php">Ing. en Computación</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/bioingenieria/index.php">Bioingeniería</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/nanotecnologia/index.php">Nanotecnología</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/arquitectura/index.php">Arquitectura</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/planes/software/index.php">Ing. en Software</a> <br/>

                        </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="row footer-titles">
                    <h1>Servicios</h1>
                  </div>
                  <div class="row">
                        <div class="col">
                          <img src="http://fiad.ens.uabc.mx/img/common/orange_bar.png" alt="" /><br/>
                          <a href="http://fiad.ens.uabc.mx/alumnos/becas.php">Becas</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/alumnos/index.php">Centro de cómputo</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/alumnos/servicio_social_comunitario.php">Servicio Social</a> <br/>
                          <a href="http://fiad.ens.uabc.mx/alumnos/titulacion.php">Titulación</a> <br/>
                        </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="row footer-titles">
                    <h1>Sitios de Interés</h1>
                  </div>
                  <div class="row">
                        <div class="col">
                          <img src="http://fiad.ens.uabc.mx/img/common/orange_bar.png" alt="" /><br/>
                          <a href="http://www.uabc.mx/">Página UABC</a> <br/>
                <!--          <a href="http://fiad.ens.uabc.mx/">Sitio FIAD anterior</a> <br/> -->

                        </div>
                  </div>
                </div>
            </div>
            <div class="row links-footer">

            </div>
          </div>

      </div>
      <div class="row gray-footer">
            <div class="col-lg-4">
                <a href="http://transparencia.uabc.mx/Aviso_Privacidad/index.html" target="_blank"> Aviso de Privacidad </a>&nbsp;|&nbsp;<a href="http://fiad.ens.uabc.mx/terminos.php"> Términos de uso</a>
            </div>
            <div class="col-lg-3">&copy; 2026 derechos reservados UABC<br>Última actualización: 26 de mayo de 2026 </div>
            <div class="col-lg-2">
                <a href="https://www.facebook.com/uabc.fiad/" alt="facebook fiad" target="_blank"><img class="footer-social-media" src="http://fiad.ens.uabc.mx/img/common/fb.png" alt=""/></a>
                <a href="https://twitter.com/UabcEnsenada" alt="twitter uabc" target="_blank"><img class="footer-social-media" src="http://fiad.ens.uabc.mx/img/common/twitter.png" alt=""/></a>
                <a href="https://instagram.com/fiad.uabc " target="_blank"><img class="footer-social-media" src="http://fiad.ens.uabc.mx/img/common/instagram.jpg" alt="" /></a>
                <img class="footer-social-media" src="http://fiad.ens.uabc.mx/img/common/mail.png" alt="" target="_blank"/></a>
            </div>
           <div class="col-lg-3">
              <div id="google_translate_element"></div><script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
              }
              </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
      </div>

    </div>
  </footer>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
-->
<script src="http://fiad.ens.uabc.mx/js/jquery-3.2.1.slim.min.js"></script>
<script src="http://fiad.ens.uabc.mx/js/popper.min.js"></script>
<script src="http://fiad.ens.uabc.mx/js/bootstrap.min.js"></script>
<script src="http://fiad.ens.uabc.mx/js/scrollreveal.min.js"></script>

<script>
  $(".news-links:first" ).addClass("active");
</script>
</body>
</html>
