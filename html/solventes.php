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
    <a href="solventes.php" class="selected">Solventes</a>
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Solventes</h3>
            <span class="section-divider"></span>
            <p class="section-description">Son colorantes insolubles en agua, la solubilidad varia con diferentes solventes Estos colorantes tienen buena solubilidad en hidrocarburos alifáticos y aromáticos, parafinas, aceites y ceras.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 about-img wow fadeInLeft">
                <img src="../img/products/solventes.jpg" alt="" class="border border-info rounded">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <div class="col-sm content wow fadeInUp">
                        <div class="row">
                            <p class="col col-sm-10 text-center">Cuando se usa con un solvente orgánico, el proceso de teñido tiene lugar en una solución. Las moléculas de colorantes solventes son no polares (o tienen una pequeña cantidad de polaridad). Esto significa que el proceso de teñido no se produce por ionización (como es el caso con otros tipos de colorantes como los colorantes ácidos). Por esta razón, los colorantes solventes son típicamente insolubles en agua.<br>Su propia naturaleza, soluble en medios no polares, permite su versatilidad y muchos usos. se utilizan en aplicaciones tales como impresión de papel de aluminio, tintas de impresión, rotuladores, bolígrafos, velas y otras ceras, abrillantadores, cueros, tintes para madera, resinas acrílicas, barnices y goma laca. Se usan para señalizar humo y en la industria pirotécnica y también se utilizan para colorear lubricantes en las industrias automotriz e industrial de corte.<br>Sin embargo, la aplicación más frecuente de colorantes solventes es en la industria de los plásticos. Dentro de la comunidad de plásticos industriales, los colorantes a base de solventes se utilizan para colorear una variedad de materiales sólidos, como acetatos, nylon, poliéster, acrílicos, PVC, PMMA, PETP, poliestireno y monómeros de estireno.</p>
                        </div>
                        <div class="col-sm content wow fadeInLeft">
                            <a class="btn btn-info text-white" data-toggle="modal" data-target="#exampleModalCenter">Catálogo de colores</a>
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
                                <option value="#">AMARILLO SOLVENTE 2</option>
                                <option value="#">AZUL SOLVENTE 36</option>
                                <option value="#">NARANJA SOLVENTE 14</option>
                                <option value="#">ROJO SOLVENTE 24</option>
                                <option value="#">ROJO SOLVENTE 41</option>
                                <option value="#">VIOLETA SOLVENTE 26</option>
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