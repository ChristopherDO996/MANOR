<?php
include('top2.php');
?>
<nav class="menu-navigation-round">
    <a href="acidos.php" class="selected">Ácidos</a>
    <a href="basicos.php">Básicos</a>
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
            <h3 class="section-title">Ácidos</h3>
            <span class="section-divider"></span>
            <p class="section-description">Colorantes químicos utilizados para fibras proteicas así como también algunas fibras sintéticas. Son brillantes y muy resistentes a la luz. También ofrece una excelente migración, compatibilidad y excelente nivelación. Son colorantes de agua caliente en polvo altamente concentrado que producen un color uniforme. Agotan bien y no se desvanecerán con el lavado. De todos los colorantes, los colorantes ácidos tiene la gama más brillante de todos. Se aplica típicamente en un baño que puede variar desde fuertemente acido a neutro, y por lo general temperaturas cercanas al punto de ebullición.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 about-img wow fadeInLeft">
                <img src="../img/products/acido.jpg" alt="" class="border border-dark rounded-circle">
            </div>
            <div class="col-sm content wow fadeInUp">
                <div class="row">
                    <table class="table col-sm-10">
                        <thead>
                            <tr>
                                <td class="font-weight-bold text-center">ÁCIDO TEXTIL</td>
                                <td class="font-weight-bold text-center">ÁCIDO INDUSTRIAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Para la tintura o estampado de lana, seda y poliamida.</td>
                                <td class="text-center">Utilizados para tintura de cuero, tintas, papel y jabones.</td>
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
                                <option value="#b0dd29">AMARILLO ACIDO 17</option>
                                <option value="#fee600">AMARILLO ACIDO 23</option>
                                <option value="#f3ac30">AMARILLO ACIDO 36</option>
                                <option value="#fac800">AMARILLO ACIDO 49</option>
                                <option value="#d4a60c">AMARILLO ACIDO 73</option>
                                <option value="#fff500">AMARILLO ACIDO 184</option>
                                <option value="#ffe825">AMARILLO ACIDO 204</option>
                                <option value="#feb038">AMARILLO ACIDO 219</option>
                                <option value="#0f123b">AZUL ACIDO 9</option>
                                <option value="#2b74df">AZUL ACIDO 62</option>
                                <option value="#2b74df">AZUL ACIDO 113</option>
                                <option value="#86d3ff">AZUL ACIDO 142</option>
                                <option value="#1223a8">AZUL ACIDO 260</option>
                                <option value="#1024BF">AZUL ACIDO 284</option>
                                <option value="#1c3063">AZUL ACIDO 324</option>
                                <option value="#ff6600">NARANJA ACIDO 7</option>
                                <option value="#d77303">NARANJA ACIDO 156</option>
                                <option value="#7a3923">CAFÉ ACIDO 14</option>
                                <option value="#116e20">VERDE ACIDO 16</option>
                                <option value="#353537">VIOLETA ACIDO 49</option>
                                <option value="#0d0a0b">NEGRO ACIDO 1</option>
                                <option value="#302c29">NEGRO ACIDO 2</option>
                                <option value="#1a1615">NEGRO ACIDO 11</option>
                                <option value="#0c0c00">NEGRO ACIDO 52</option>
                                <option value="#191b18">NEGRO ACIDO 172</option>
                                <option value="#60070b">ROJO ACIDO 1</option>
                                <option value="#953330">ROJO ACIDO 52</option>
                                <option value="#640302">ROJO ACIDO 57</option>
                                <option value="#ca1319">ROJO ACIDO 73</option>
                                <option value="#850b03">ROJO ACIDO 114</option>
                                <option value="#db2825">ROJO ACIDO 131</option>
                                <option value="#c1231c">ROJO ACIDO 299</option>
                                <option value="#c92e21">ROJO ACIDO 337</option>
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