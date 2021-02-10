<div class="col s12" style="margin: auto;">

    <div class="tituloContenido card">

        <h5>Exportar Reporte:</h5>

        <div class="col s12" style="padding-inline: 5rem;">

            <div>
                <h4>Filtros</h4>
            </div>

            <form action="<?php echo ROUTE_URL; ?>report/export" method="POST">

                <div class="row">
                    <div class="filtroCiudad input-field">
                        <p>
                            <label for="selectCiudad">Ciudad:</label>
                        </p>
                        <br>

                        <select name="city" id="selectCiudad">
                            <option value="" selected>Elige una ciudad</option>
                            <?php foreach ($data["cities"] as $city) : ?>
                                <option value="<?php echo $city["Ciudad"] ?>"> <?php echo $city["Ciudad"] ?></option>
                            <?php endforeach ?>
                        </select>

                    </div>

                    <div class="filtroTipo input-field">
                        <p>
                            <label for="selecTipo">Tipo:</label>
                        </p>
                        <br>
                        <select name="type" id="selectTipo">
                            <option value="">Elige un tipo</option>
                            <?php foreach ($data["types"] as $type) : ?>
                                <option value="<?php echo $type["Tipo"] ?>"> <?php echo $type["Tipo"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>


                <div class="botonField">
                    <input type="submit" class="btn white" value="Exportar">
                </div>
            </form>

        </div>

    </div>

</div>