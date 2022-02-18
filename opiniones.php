<?php
require("Estructura/Header.php");
?>

<!-- Formulario -->
<article>
	<form action="php/registrarAgentes.php" method="post">
		<div class="row">
			<div class="col-sm-12">
				<input class="contactus" placeholder="Nombre" type="text" name="txtNombre" />
			</div>
			<div class="col-sm-12">
				<textarea class="textarea" placeholder="Opiniones" type="text" name="txtDescripcion"></textarea>
			</div>
			<div class="col-sm-12">
				<input type="submit" class="send" value="Enviar" />
				<a href="buscar.html">Ver agentes</a>
			</div>
		</div>
	</form>
</article>


<?php
require("Estructura/Footer.php");
?>

</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>