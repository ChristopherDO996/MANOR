<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php">Básicos</a>
    <a href="blanco_optico.php" class="selected">Blanco óptico</a>
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
            <h3 class="section-title">Blanco Óptico</h3>
            <span class="section-divider"></span>
            <p class="section-description">Los blanqueadores textiles son compuestos que mejoran la percepción de blancura, se eligen dependiendo del tipo del material de la fibra. Son compuestos orgánicos incoloros que absorben la luz ultra violeta y la emiten como luz visible generalmente en la banda espectral del azul o rojo, provocando así la sensación visual de blancura.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 about-img wow fadeInLeft">
                <img src="../img/products/blanco.jpg" alt="" class="rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <p class="col col-sm-10 text-center">El blanqueo textil se lleva a cabo en telas que contienen fibras como algodón, lana, nylon, poliéster, acrílico, lino, seda, etc., y que requieren un alto grado de brillantes, blancura o que serán estampadas con fondo blanco ó en tonos claros.</p>
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
                                <option value="#">Blanqueador óptico para jabones</option>
                                <option value="#">Blanqueador óptico para detergentes</option>
                                <option value="#">Blanqueador óptico para textiles (fibras naturales o sintéticas)</option>
                                <option value="#">Blanqueador óptico para resinas</option>
                                <option value="#">Blanqueador óptico para recubrimientos</option>
                                <option value="#">Blanqueador óptico para papel</option>
                                <option value="#">Blanqueador óptico para plásticos</option>
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