<div class="col s12" id="divResultadosBusqueda">

    <div class="tituloContenido card" style="justify-content: center;">

        <h5>Resultados de la búsqueda:</h5>

        <div class="col s12 row">
            <?php foreach ($data["real"] as $realEstate) : ?>
                <?php if (!in_array($realEstate["Id"], array_column($data["myGoods"], 'id_real_estate'))) : ?>
                    <div class="col s12">

                        <div class="card bg-tertiary">

                            <div class="card-content white-text row">

                                <div class="col s12 m6">
                                    <img src="<?php echo ROUTE_URL . 'assets/home/img/home.jpg' ?>" class="responsive-img">
                                </div>

                                <div class="col s12 m6">

                                    <div class="row">

                                        <div class="col s12 m7">
                                            <h6>Dirección : </h6>
                                            <h6><?php echo $realEstate["Direccion"] ?></h6>
                                        </div>

                                        <div class="col s12 m5">
                                            <h6>Ciudad : </h6>
                                            <h6><?php echo $realEstate["Ciudad"] ?></h6>
                                        </div>

                                        <div class="col s12 m7">
                                            <h6>Teléfono : </h6>
                                            <h6><?php echo $realEstate["Telefono"] ?></h6>
                                        </div>

                                        <div class="col s12 m5">
                                            <h6>Código Postal : </h6>
                                            <h6><?php echo $realEstate["Codigo_Postal"] ?></h6>
                                        </div>

                                        <div class="col s12 m7">
                                            <h6>Tipo : </h6>
                                            <h6><?php echo $realEstate["Tipo"] ?></h6>
                                        </div>

                                        <div class="col s12 m4">
                                            <h6>Precio : </h6>
                                            <h6><?php echo $realEstate["Precio"] ?></h6>
                                        </div>

                                        <div>
                                            <form action="<?php echo ROUTE_URL; ?>good/create" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $realEstate["Id"] ?>">
                                                <button class="white-text text-darken-2 waves-effect waves-light btn-large bg-secondary ml-5">Guardar</button>
                                            </form>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="divider"></div>

                <?php endif ?>
            <?php endforeach ?>

        </div>

    </div>

</div>