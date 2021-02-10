<div class="col s12">

    <div class="tituloContenido card" style="justify-content: center;">

        <h5>Mis bienes:</h5>

        <div class="col s12 row">
            <?php foreach ($data["goods"] as $good) : ?>
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
                                            <h6><?php echo $good->address ?></h6>
                                        </div>

                                        <div class="col s12 m5">
                                            <h6>Ciudad : </h6>
                                            <h6><?php echo $good->city ?></h6>
                                        </div>

                                        <div class="col s12 m7">
                                            <h6>Teléfono : </h6>
                                            <h6><?php echo $good->phone ?></h6>
                                        </div>

                                        <div class="col s12 m5">
                                            <h6>Código Postal : </h6>
                                            <h6><?php echo $good->code ?></h6>
                                        </div>

                                        <div class="col s12 m7">
                                            <h6>Tipo : </h6>
                                            <h6><?php echo $good->type ?></h6>
                                        </div>

                                        <div class="col s12 m4">
                                            <h6>Precio : </h6>
                                            <h6><?php echo $good->price ?></h6>
                                        </div>

                                        <div>
                                            <form action="<?php echo ROUTE_URL; ?>good/destroy" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $good->id ?>">
                                                <button class="white-text text-darken-2 waves-effect waves-light red btn-large bg-secondary ml-5">Eliminar</button>
                                            </form>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="divider"></div>

            <?php endforeach ?>

        </div>

    </div>

</div>