<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php">Ácidos</a>
    <a href="basicos.php">Básicos</a>
    <a href="blanco_optico.php">Blanco óptico</a>
    <a href="dispersos.php" class="selected">Dispersos</a>
    <a href="pigmentos.php">Pigmentos</a>
    <a href="reactivos.php">Reactivos</a>
    <a href="solventes.php">Solventes</a>
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Dispersos</h3>
            <span class="section-divider"></span>
            <p class="section-description">Los colorantes dispersos son colorantes no iónicos con baja solubilidad en agua y son adecuados para el teñido de fibras hidrófobicas de la dispersión coloidal. Son los únicos colorantes insolubles en agua que tiñen el poliéster y fibras de acetato.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 about-img wow fadeInLeft">
                <img src="../img/products/dispersos.jpg" alt="" class="border border-info rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <p class="col col-sm-10 text-center">Además de ser usado en conjunción con un agente dispersante, los colorantes dispersos logran los mejores resultados cuando el proceso de tintura tiene lugar a altas temperaturas, producen colores uniformes, audaces y con excelente resistencia a la luz. <br>Los colorantes dispersos se utilizan para teñir ésteres de celulosa artificiales y fibras sintéticas especialmente acetato y fibras de poliéster y a veces, nylon y fibras acrílicas.</p>
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
                                <option value="#">AMARILLO DISPERSO 119</option>
                                <option value="#">AMARILLO DISPERSO 211</option>
                                <option value="#">AMARILLO DISPERSO 3</option>
                                <option value="#">AMARILLO DISPERSO 54</option>
                                <option value="#">AMARILLO DISPERSO 82</option>
                                <option value="#">AZUL DISPERSO 183</option>
                                <option value="#">AZUL DISPERSO 3</option>
                                <option value="#">AZUL DISPERSO 56 150%</option>
                                <option value="#">AZUL DISPERSO 60</option>
                                <option value="#">AZUL DISPERSO 79</option>
                                <option value="#">AZUL DISPERSO EXSF</option>
                                <option value="#">ROJO DISPERSO 1</option>
                                <option value="#">ROJO DISPERSO 167 150%</option>
                                <option value="#">ROJO DISPERSO 277</option>
                                <option value="#">ROJO DISPERSO 343</option>
                                <option value="#">ROJO DISPERSO 60 200%</option>
                                <option value="#">ROJO DISPERSO 73</option>
                                <option value="#">NARANJA DISPERSO 25</option>
                                <option value="#">NARANJA DISPERSO 30</option>
                                <option value="#">NEGRO DISPERSO EXSF</option>
                                <option value="#">VERDE DISPERSO 9</option>
                                <option value="#">VIOLETA DISPERSO 28</option>
                                <option value="#">VIOLETA DISPERSO 63</option>
                                <option value="#">VIOLETA DISPERSO 77</option>
                                <option value="#">VIOLETA DISPERSO 99</option>
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