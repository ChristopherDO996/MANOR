<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php">Básicos</a>
    <a href="blanco_optico.php">Blanco óptico</a>
    <a href="dispersos.php">Dispersos</a>
    <a href="pigmentos.php" class="selected">Pigmentos</a>
    <a href="reactivos.php">Reactivos</a>
    <a href="solventes.php">Solventes</a>
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Pigmentos</h3>
            <span class="section-divider"></span>
        </div>
        <div class="row">
            <div class="col-lg-5 about-img wow fadeInLeft">
                <img src="../img/products/pigmentos.jpg" alt="" class="border border-info rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <p class="col col-sm-10 text-center">Los pigmentos no son solubles en agua y no muestran afinidad por la fibra. A menudo se derivan de minerales, pero también se pueden hacer sintéticamente.<br>Los pigmentos normalmente se dispersan en vehículos o sustratos para aplicación, como por ejemplo en la fabricación de tintas, pinturas, plásticos u otros materiales poliméricos.<br>Un pigmento puro permite que muy poca luz blanca escape, produciendo un color altamente saturado, y gran colorido del material sobre el que se aplica. Mantienen mucho tiempo su color y resisten el calor intenso, la luz intensa y la exposición a los agentes químicos o del clima.<br>Los pigmentos se utilizan para pinturas de artistas, acabados de autos y letreros que reflejan la luz. Los pigmentos se usan en pinturas, tintas, plásticos, telas, por nombrar algunos ejemplos.</p>
                </div>
                <br>
                <br>
                <div class="col-sm content wow fadeInLeft">
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
                                <option value="#">PIGMENTO AMARILLO 12</option>
                                <option value="#">PIGMENTO AMARILLO 13</option>
                                <option value="#">PIGMENTO AMARILLO 74</option>
                                <option value="#">PIGMENTO AMARILLO 83</option>
                                <option value="#">AMARILLO CHROMO DEEP</option>
                                <option value="#">AMARILLO CHROMO LEMON</option>
                                <option value="#">AMARILLO CHROMO ORANGE</option>
                                <option value="#">PIGMENTO AZUL 15:0</option>
                                <option value="#">PIGMENTO AZUL 15:1</option>
                                <option value="#">PIGMENTO AZUL 15:3</option>
                                <option value="#">PIGMENTO AZUL 15:4</option>
                                <option value="#">PIGMENTO AZUL 27</option>
                                <option value="#">PIGMENTO AZUL 29</option>
                                <option value="#">PIGMENTO VERDE 7</option>
                                <option value="#">PIGMENTO VIOLETA 23</option>
                                <option value="#">PIGMENTO VIOLETA 27</option>
                                <option value="#">PIGMENTO VIOLETA 3</option>
                                <option value="#">PIGMENTO NARANJA MOLIBDATO</option>
                                <option value="#">PIGMENTO ROJO 112</option>
                                <option value="#">PIGMENTO ROJO 122</option>
                                <option value="#">PIGMENTO ROJO 146</option>
                                <option value="#">PIGMENTO ROJO 2</option>
                                <option value="#">PIGMENTO ROJO 48:2</option>
                                <option value="#">PIGMENTO ROJO 48:3</option>
                                <option value="#">PIGMENTO ROJO 49:1</option>
                                <option value="#">PIGMENTO ROJO 53:1</option>
                                <option value="#">PIGMENTO ROJO 57:1</option>
                                <option value="#">PIGMENTO ROJO 63:1</option>
                                <option value="#">PIGMENTO ROJO 81</option>
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