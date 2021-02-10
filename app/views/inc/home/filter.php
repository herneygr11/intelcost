<?php if ($view == "home.php") : ?>
    <div class="col-filtros bg-secondary col s12 m4">

        <form action="<?php echo ROUTE_URL; ?>home/index" method="GET" id="formulario">

            <div class="col-filtros__container">

                <div class="col-filtros__title">
                    <h5 class="text-white">Filtros</h5>
                </div>

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

                <div class="filtroPrecio">
                    <label for="rangoPrecio">Precio:</label>
                    <input type="text" id="rangoPrecio" name="precio" value="" />
                </div>

                <div class="botonField">
                    <input type="submit" class="btn white" value="Buscar" id="submitButton">
                </div>

            </div>

        </form>

    </div>
<?php endif ?>