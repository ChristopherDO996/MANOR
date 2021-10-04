<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php" class="selected">Básicos</a>
    <a href="blanco_optico.php">Blanco óptico</a>
    <a href="dispersos.php">Dispersos</a>
    <a href="pigmentos.php">Pigmentos</a>
    <a href="reactivos.php">Reactivos</a>
    <a href="solventes.php">Solventes</a>
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Básicos</h3>
            <span class="section-divider"></span>
            <p class="section-description">Los colorantes básicos son colorantes cargados positivamente. Debido a su carga positiva, los colorantes básicos reaccionan con compuestos cargados negativamente. Los colorantes básicos son conocidos por su amplia gama de tonos, brillo y vitalidad. Son altamente preferidos cuando se tiñe material sintético. Debido a sus propiedades catiónicas o de carga positiva, los colorantes básicos se utilizan para una gran variedad de aplicaciones para productos con propiedades aniónicas.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 about-img wow fadeInLeft">
                <img src="../img/products/basicos.png" alt="" class="border border-primary rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <table class="table col-sm-10">
                        <thead>
                            <tr>
                                <td class="font-weight-bold text-center">BÁSICO TEXTIL</td>
                                <td class="font-weight-bold text-center">BÁSICO INDUSTRIAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Entre sus principales usos predomina la fibra de Acrilico.</td>
                                <td class="text-center">Ideales para teñir plásticos como acrílicos, tintes, revestimientos, papel y productos industriales.</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-info text-white" data-toggle="modal" data-target="#exampleModalCenter">Catálogo de colores</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- #about -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-dismiss="modal" data-backdrop="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Catálogo de colores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-md-6">
                            <p class="mt-3 mb-4 text-center">Por favor seleccione el color deseado</p>
                            <select name="colors" id="colores" class="form-control">
                                <option value="">Seleccione un color...</option>
                                <option value="#">AMARILLO BASICO 13</option>
                                <option value="#">AMARILLO BASICO 19</option>
                                <option value="#">AMARILLO BASICO 28</option>
                                <option value="#">AMARILLO BASICO 40</option>
                                <option value="#">AZUL BASICO 26</option>
                                <option value="#">AZUL BASICO 3</option>
                                <option value="#">AZUL BASICO 41 250%</option>
                                <option value="#">AZUL BASICO 9</option>
                                <option value="#">ROJO BASICO 14</option>
                                <option value="#">ROJO BASICO 18</option>
                                <option value="#">ROJO BASICO 46 220%</option>
                                <option value="#">VIOLETA BASICO 16</option>
                                <option value="#">VIOLETA DE METHILO</option>
                                <option value="#">VERDE BASICO 4</option>
                                <option value="#">CRISOIDINA</option>
                                <option value="#">RHODAMINA</option>
                                <option value="#">AURAMINA</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="ovalo w-100 h-100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p class="text-right font-italic"><small>Distribuidora MANOR</small></p>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>