<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php">Básicos</a>
    <a href="blanco_optico.php">Blanco óptico</a>
    <a href="dispersos.php">Dispersos</a>
    <a href="pigmentos.php">Pigmentos</a>
    <a href="reactivos.php" class="selected">Reactivos</a>
    <a href="solventes.php">Solventes</a>
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Reactivos</h3>
            <span class="section-divider"></span>
            <p class="section-description">Los colorantes reactivos son una clase de sustancias orgánicas altamente coloreadas, utilizadas principalmente para teñir textiles, que se adhieren a sus sustratos mediante una reacción química que forma un enlace covalente entre la molécula de tinte y la de la fibra, mejorando significativamente la estabilidad del color y la capacidad de lavado del producto. El colorante se convierte así en una parte de la fibra y es mucho menos probable que se elimine por lavado que los colorantes que se adhieren por adsorción.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 about-img wow fadeInLeft">
                <img src="../img/products/reactivos.jpg" alt="" class="border border-info rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <p class="col col-sm-10 text-center">Los colorantes reactivos se dividen en tres grupos; los monoclorotriacina, vinisulfon y al realizar una mezcla de color con estos dos grupos se crean los bifuncionales que se pueden teñir tanto en bajas como en altas temperaturas.<br>El grupo monoclorotriacina se caracteriza por sus altas temperaturas a la hora de su teñido (85 ° y 90°C) buena sustantividad, excelentes valores de agotamiento y de fijación.<br>El grupo vinisulfon se caracteriza por su teñido a baja temperatura (60°c), excelentes propiedades de solidez y da buenos resultados incluso en las fibras más difíciles. Obteniendo excelentes resultados en la fibra de algodón, viscosa y mezclas.<br>Debido a su fuerte anclaje a la fibra tienen excelentes solideces, son muy brillantes y tiene una extensa paleta de colores.<br>Los colorantes reactivos también se pueden usar para teñir lana y nylon, en el último caso se aplican en condiciones débilmente ácidas.</p>
                </div>
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
                                <option value="#">AMARILLO REACTIVO 105</option>
                                <option value="#">AMARILLO REACTIVO 145</option>
                                <option value="#">AMARILLO REACTIVO 160</option>
                                <option value="#">AMARILLO REACTIVO 84</option>
                                <option value="#">AZUL REACTIVO 160</option>
                                <option value="#">AZUL REACTIVO 171</option>
                                <option value="#">AZUL REACTIVO 19</option>
                                <option value="#">AZUL REACTIVO 198</option>
                                <option value="#">AZUL REACTIVO 21</option>
                                <option value="#">AZUL REACTIVO 221</option>
                                <option value="#">AZUL REACTIVO 222</option>
                                <option value="#">AZUL REACTIVO 49</option>
                                <option value="#">AZUL REACTIVO 71</option>
                                <option value="#">NARANJA REACTIVO 122</option>
                                <option value="#">NARANJA REACTIVO 16</option>
                                <option value="#">NARANJA REACTIVO 84</option>
                                <option value="#">NEGRO REACTIVO 5 150%</option>
                                <option value="#">NEGRO REACTIVO CDR</option>
                                <option value="#">NEGRO REACTIVO CDG</option>
                                <option value="#">NEGRO REACTIVO SUPER R</option>
                                <option value="#">ROJO REACTIVO 120</option>
                                <option value="#">ROJO REACTIVO 141</option>
                                <option value="#">ROJO REACTIVO 195</option>
                                <option value="#">ROJO REACTIVO 239</option>
                                <option value="#">VERDE REACTIVO 19A</option>
                                <option value="#">VERDE REACTIVO HF-6B</option>
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