<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


		<!-- <nav class="white">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo">Logo</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Navbar Link</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav> -->


		
				<div class="container">
					<br><br>
					<h1 class="center" style="color: #4dd0e1">É hora de Festa</h1>
					<div class="row center">
						<h5 class="col s12" style="color: #0d47a1">Conheça o mais novo e moderno salão de buffet infantil de Sao Carlos</h5>
					</div>
					<!-- <div class="row center">
						<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
					</div> -->
					<br><br>
				</div>
			


		<div class="section-cols">
			<div class="section">

				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m6">
						<div class="icon-block">
							<!-- <h5 class="center">Conheça o Salão Cuco Maluko</h5> -->

							<div class="cuco1-img"><img src="<?= $home?>/image/cuco1.png"></div>

							<div class="text-section-cols">
								<p class="light">Breve descrição sobre a diferença entre os 2 salões.</p>
								<div class="inf">
									<p class="light" style="line-height: 5px;">Rua Dr. Duarte Nunes, 158- Vila Prado - São Carlos/SP.</p>
									<p class="light" style="line-height: 5px;">Fone: (16) 3415-2444 - E-mail: contato@cucomaluko.com.br</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="icon-block">
							<!-- <h5 class="center">Conheça o Salão Estação Cuco Maluko</h5> -->

							<div class="cuco2-img"><img src="<?= $home ?>/image/cuco2.png"></div>

							<div class="text-section-cols">
								<p class="light">Breve descrição sobre a diferença entre os 2 salões.</p>
								<div class="inf">
									<p class="light" style="line-height: 5px;">Rua General Osório, 38 - Jardim São Carlos - São Carlos/SP.</p>
									<p class="light" style="line-height: 5px;">Fone: (16) 3415-6880 - E-mail: estacao@cucomaluko.com.br</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l12 s12">
				  <h5 class="white-text">Cuco Maluco</h5>
				  <p class="grey-text text-lighten-4" style="line-height: 20px;">Texto sobre a empresa, Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>

				
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
			Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">ICMC Júnior</a>
			</div>
		</div>
		</footer>


<?php get_footer(); ?>