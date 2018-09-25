<?php include 'header.php';?>	

	<div class="header-img">
		<img src="img/casas.jpg" class="img-responsive">
	</div>
	<div class="sp10x"></div>
	
	<div class="container">
    	<div class="row">
			<div class="col-sm-24 col-xs-24 col-md-24 col-lg-24">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-24 col-xs-12 col-md-12 col-lg-12 text-center">
								<a href="#" class="active fntP fnt22" id="login-form-link">Comprar</a>
							</div>
							<div class="col-sm-24 col-xs-12 col-md-12 col-lg-12 text-center">
								<a href="#" id="register-form-link2" class="fntP fnt22">Rentar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="sp4x"></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-24">
								<div id="login-form" style="display:block">
									<p class="titleventa">PARA VENTA</p>
									<h2 class="subtitleventa">ULTIMAS PROPIEDADES PARA VENTA</h2>
								</div>
								<div id="register-form" style="display:none">
									<p class="titleventa">PARA RENTA</p>
									<h2 class="subtitleventa">ULTIMAS PROPIEDADES PARA RENTA</h2>
								</div>
								
							</div>
						</div>
					</div>
				</div><!--panel-->
			</div><!--col24-->
		</div><!--row-->
	</div><!--container-->



	<div class="sp20x"></div>


	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3733.4414788067347!2d-103.39200468495508!3d20.651610486203893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1537593828176" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

	<script type="text/javascript">
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link2').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link2').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

	</script>

	<div class="clearfix"></div>


<?php include 'footer.php';?>