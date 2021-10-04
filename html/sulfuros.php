<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php">Básicos</a>
    <a href="blanco_optico.php">Blanco óptico</a>
    <a href="dispersos.php">Dispersos</a>
    <a href="pigmentos.php">Pigmentos</a>
    <a href="reactivos.php">Reactivos</a>
    <a href="solventes.php">Solventes</a>
    <a href="sulfuros.php" class="selected">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Sulfuros</h3>
            <span class="section-divider"></span>
            <p class="section-description">Son colorantes sintéticos que forman compuestos insolubles en agua y con alto peso molecular. Colorantes con elevadas solideces al lavado. Esta buena resistencia al lavado se debe a su mayor tamaño molecular e insolubilidad en agua.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 about-img wow fadeInLeft">
                <img src="../img/products/sulfuro.png" alt="" class="border border-info rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <div class="col-sm content wow fadeInUp">
                        <div class="row">
                            <p class="col col-sm-10 text-center">Los colorantes de azufre se llaman así porque todos contienen enlaces de azufre dentro de sus moléculas.<br>Estos son tintes insolubles en agua y no tienen afinidad por los productos celulósicos como tales, pero se solubilizan cuando se tratan con una solución alcalina débil de sulfuro de sodio o cualquier otro agente reductor para formar un compuesto leuco.<br>Cuando se convierte en un compuesto leuco son solubles en agua y tienen afinidad por los materiales celulósicos tales como algodón, viscosa, yute, etc.</p>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm content wow fadeInLeft">
                            <a class="btn btn-info text-white" data-toggle="modal" data-target="#exampleModalCenter">Catálogo de colores</a>
                        </div>
                    </div>
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
                                <option value="#">AMARILLO SULFURO 2</option>
                                <option value="#">AZUL SULFURO 7</option>
                                <option value="#">NEGRO SULFURO 1</option>
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