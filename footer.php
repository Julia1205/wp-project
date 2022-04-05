<?php wp_footer();?>
		<footer class="align-bottom pt-3 mt-5" style="background-image: url('<?php echo(get_template_directory_uri().'/img/filigrane-footer.jpg'); ?>'); background-repeat: no-repeat; background-position: top;">
			<div class="container">
				<div class="row">
					<!-- Footer links-->
					<div class="col-lg-4 mb-5 mb-lg-0 text-center">
						<h4 class="text-uppercase mb-4">Les ventes aux enchères</h4>
						<a class="btn btn-light" href="<?php echo(the_permalink('164'));?>">Faire estimer un bien</a>
						<a class="btn btn-light" href="#!">Comment participer</a>
					</div>
										<!-- Footer Location-->
										<div class="col-lg-4 mb-5 mb-lg-0">
					  <h4 class="text-uppercase mb-4 text-center">Nos ventes</h4>
						<p class="lead mb-0 ventes">
							<a href="<?php the_permalink('179'); ?>">Les prochaines ventes</a>
						</p>
						<p class="lead mb-0 ventes">
							<a href="<?php the_permalink('176'); ?>">Les ventes passées</a>
						</p>
					</div>

					<!-- Footer About Text-->
					<div class="col-lg-4">
						<h4 class="text-uppercase mb-4 text-center">A propos d'Auctiolive</h4>
						<p class="lead mb-0">
						Auctiolive est un projet pédagogique réalisé dans le but d'apprendre la réalisation d'un thème Wordpress
						</p>
					</div>
					<a href="<?php the_permalink('3'); ?>">Politique de confidentialité</a>
				</div>
			</div>
			<div class="container JS">
				<div class="row mt-lg-5">
					<p class="text-center">Copyright © <?php echo date('Y'); ?> <a href="https://www.julie-sigrist.fr" target="_blank">Julie Sigrist</a></p>
				</div>         
			</div>
		</footer>
	</body>
</html>