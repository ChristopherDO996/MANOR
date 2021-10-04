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
    <a href="sulfuros.php">Sulfuros</a>
    <a href="directos.php" class="selected">Directos</a>
</nav>
<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title">Directos</h3>
            <span class="section-divider"></span>
            <p class="section-description">Colorantes solubles en agua utilizados en la tintura de todo tipo de fibra celulósica y mezclas. Son excelentes en la tintura por agotamiento en fibras celulósicas y resistentes a la luz.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 about-img wow fadeInLeft">
                <img src="../img/products/directos.jpg" alt="" class="border border-info rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <div class="col-sm content wow fadeInUp">
                        <div class="row">
                            <p class="col col-sm-10 text-center">Sin un tratamiento posterior adecuado, los tintes directos sangran un poco con cada lavado.<br>Casi siempre son tintes azo, con algunas similitudes con los colorantes ácidos. Su forma plana y su longitud les permiten estar a lo largo de las fibras de celulosa y maximizar las fuerzas de Van der Waals, dipolo e hidrógeno.<br>Los colorantes directos se usan en fibras de celulosa como algodón, rayón y lino.</p>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm content wow fadeInLeft">
                            <p align="center">
                                <a class="btn btn-info text-white" data-toggle="modal" data-target="#exampleModalCenter">Catálogo de colores</a>
                            </p>
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
                                <option value="#">AMARILLO DIRECTO 4GL</option>
                                <option value="#">AMARILLO DIRECTO 50</option>
                                <option value="#">AMARILLO DIRECTO 86</option>
                                <option value="#">AZUL DIRECTO 15</option>
                                <option value="#">AZUL DIRECTO 151</option>
                                <option value="#">AZUL DIRECTO 199</option>
                                <option value="#">AZUL DIRECTO 200</option>
                                <option value="#">AZUL DIRECTO 201</option>
                                <option value="#">AZUL DIRECTO 86</option>
                                <option value="#">CAFÉ DIRECTO 2</option>
                                <option value="#">CAFÉ DIRECTO 95</option>
                                <option value="#">NARANJA DIRECTO 26</option>
                                <option value="#">NARANJA DIRECTO 34</option>
                                <option value="#">NARANJA DIRECTO 39</option>
                                <option value="#">NEGRO DIRECTO 22</option>
                                <option value="#">NEGRO DIRECTO 38</option>
                                <option value="#">VERDE DIRECTO 1</option>
                                <option value="#">VERDE DIRECTO 6</option>
                                <option value="#">VIOLETA DIRECTO 9</option>
                                <option value="#">ROJO DIRECTO 224</option>
                                <option value="#">ROJO DIRECTO 227</option>
                                <option value="#">ROJO DIRECTO 23</option>
                                <option value="#">ROJO DIRECTO 243</option>
                                <option value="#">ROJO DIRECTO 28</option>
                                <option value="#">ROJO DIRECTO 80</option>
                                <option value="#">ROJO DIRECTO 81</option>
                                <option value="#">ROJO DIRECTO 83</option>
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