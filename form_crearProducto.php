<?php
require("Estructura/Header.php");
?>

<!-- Formulario -->
<article>
    <form action="crearProducto.php" method="post">
        <h2>Agrega tu producto favorito a nuestro menú</h2>
        <div class="row">
            <div class="col-sm-12">
                <input class="contactus" placeholder="Nombre" type="text" name="txtNombre" />
            </div>
            <div class="col-sm-12">
                <input class="contactus" placeholder="Categoria" type="text" name="txtCategoria" />
            </div>
            <div class="col-sm-12">
                <input class="contactus" placeholder="Precio" type="number" name="txtPrecio" />
            </div>
            <div class="col-sm-12">
                <input class="contactus" placeholder="Distribuidor" type="text" name="txtDistribuidor" />
            </div>
            <div class="col-sm-12">
                <input type="submit" class="send" value="Enviar" />
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