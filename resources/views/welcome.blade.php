<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hacking Design - Hackaton</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="../css/main.css" />
        <link rel="stylesheet" href="../css/custom.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Hacking Design</h1>
							<p class="major">Un evento donde se une la comunidad de programadores y diseñadores de la ciudad, con un objetivo en común...</p>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Saber Más</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="../images/banner.jpg" alt="" />
						</div>
					</section>

				<!-- Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>¡Juntos para crear grandes cosas!</h2>
							<p>Organizados en grupos, y con la ayuda de mentores, tendrán el reto de culminar un proyecto digital en solo 40 horas de maratón.</p>
							<ul class="actions vertical">
                            <li><a href="#two" class="button big wide smooth-scroll-middle">Quiero entrar al reto</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="../images/hackaton.jpg" alt="" />
						</div>
					</section>

				<!-- Three -->
					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" id="two">
						<div class="content">
							<h2>Conéctate con los grandes</h2>
							<p>Conoce a los mejores expertos en diseño gráfico y programación y establece conexión con las comunidades profesionales de la ciudad.</p>
							<ul class="actions vertical">
                            <li><a href="#three" class="button big wide smooth-scroll-middle">Me gusta hacer nuevos amigos</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="../images/hackaton3.jpg" alt="" />
						</div>
					</section>

				<!-- Four -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="three">
						<div class="content">
							<h2>Conocimiento y ganas de aprender en un solo lugar</h2>
							<p>Mentores y Profesionales expertos dispuestos a enseñarte. Participando junto a ellos pondrás a prueba tus capacidades y descubrirás de todo lo que eres capáz.</p>
							<ul class="actions vertical">
                            <li><a href="#four" class="button big wide smooth-scroll-middle">Listo para aprender</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/mentors.jpg" alt="" />
						</div>
					</section>

				<!-- Five -->
					<section class="spotlight style1 content-align-center" id="four">
                  
						<div class="inner wall">
							<h2>Sábado 23 de Junio de 2018 - Barquisimeto Estado Lara</h2>
							<p>A las 8 am, comienza el reto de 40 horas seguidas para lograr culminar los proyectos y retos planteados, con pernocta en el sitio del evento.</p>
                            <p>Entrada: Profesionales 600.000 Bs, Estudiantes: Gratis</p>						
                        </div>					

					</section>

				<!-- Six -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>¿Qué necesitas para participar?</h2>
							<p>Es un evento con una duración de 40 horas seguidas, en la cual podrás opcionalmente pernoctar en el sitio y compartir al máximo la experiencia, llevando alguno de estos elementos hará más comoda tu estadía en el evento.</p>
							<div class="items style1 medium onscroll-fade-in">
								<section>
									<span class="icon style2 major fa-laptop"></span>
									<h3>PC Desktop / Laptop</h3>
									<p>El evento cuenta con seguridad, podrás llevar tu computadora, mouse, teclados y todo lo necesario para trabajar más cómodamente.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bed"></span>
									<h3>Kit Sleeping</h3>
									<p>Si deseas quedarte en el evento durante la noche, puedes llevar tus ítems para dormir más comodamente (Colchones inflables, colchoneta, entre otros).</p>
								</section>
								<section>
									<span class="icon style2 major fa-wifi"></span>
									<h3>Conectividad</h3>
									<p>Puedes llevar tus módem 3G/4G para facilitar tu conectividad a internet como plan B.</p>
								</section>
								<section>
									<span class="icon style2 major fa-cutlery"></span>
									<h3>Snacks</h3>
									<p>Tienes libertad de llevar tus snacks preferidos para consumir durante el evento.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bolt"></span>
									<h3>Tu Proyecto</h3>
									<p>Tienes una idea en mente?, ven y compártela y posiblemente sea seleccionada para ser desarrollada.</p>
								</section>
								<section>
									<span class="icon style2 major fa-users"></span>
									<h3>Tu Equipo</h3>
									<p>Invita a tus amigos del medio, y junto a ellos participa en el reto.</p>
								</section>
							
							</div>
						</div>
					</section>

				<!-- Seven -->
					<section class="wrapper style1 align-center">
						<div class="inner medium">
							<h2>¿Quieres participar? Regístrate en este formulario</h2>
							<form method="post" action="#">

								<div class="field half first">
									<label for="name">Nombre y Apellido</label>
									<input type="text" name="name" id="names" value="" />
								</div>
								<div class="field half">
									<label for="email">Correo Electrónico</label>
									<input type="email" name="email" id="email" value="" />
								</div>
                                <div class="field half first">
									<label for="name">¿En qué Ciudad te encuentras?</label>
									<input type="text" name="name" id="city" value="" />
								</div>
								<div class="field half">
									<label for="email">Ocupación - Especialidad</label>
									<input type="text" name="email" id="ocupation" value="" />
								</div>
                                <div class="field half first">
									<label for="name">¿Cómo supiste del evento?</label>
									<input type="text" name="name" id="howknow" value="" />
								</div>
								<div class="field half">
									<label for="email">¿Estás dispuesto a pernoctar en el evento?</label>
                                  
									<input type="text" name="email" id="overnight" value="" />
								</div>
                                <div class="field half first">
									<label for="name">¿Dispones de computadora para usar en el evento?</label>
									<input type="text" name="name" id="havepc" value="" />
								</div>
								<div class="field half">
									<label for="email">¿Cuál es tu nivel de estudios?</label>
									<input type="text" name="email" id="levelstudies" value="" />
								</div>
                                <div class="field half first">
									<label for="name">¿En qué tecnologías - Herramientas te manejas?</label>
									<input type="text" name="name" id="technologies" value="" />
								</div>
								<div class="field half">
									<label for="email">¿Tienes alguna idea en mente para desarrollar?</label>
									<input type="text" name="email" id="projectinmind" value="" />
								</div>
								<div class="field">
									<label for="message">Si tienes alguna duda adicional indicala acá</label>
									<textarea name="message" id="questions" rows="6"></textarea>
								</div>
								<ul class="actions">
									<li><input type="button" name="submit" onclick="SaveParticipant()" id="submit" value="Enviar Registro" /></li>
								</ul>
							</form>

						</div>
					</section>

			

			</div>

		<!-- Scripts -->
			<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.scrollex.min.js"></script>
			<script src="../js/jquery.scrolly.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/util.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
			<script src="../js/main.js"></script>
            <script src="../js/custom.js"></script>

	</body>
</html>