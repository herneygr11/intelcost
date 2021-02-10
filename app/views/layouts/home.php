<!DOCTYPE html>
<html lang="es">

<head>
    <?php require ROUTE_INCLUDE . 'home/head.php' ?>
</head>

<body>
    <header class="header">
        <?php require ROUTE_INCLUDE . 'home/header.php' ?>
    </header>

    <main class="container row">

        <?php require ROUTE_INCLUDE . 'home/filter.php' ?>

        <div class="col s12 m8" style="margin: auto;">

            <div class="card col s12">

                <div class="row menu">

                    <a href="<?php echo ROUTE_URL; ?>home/index" class="white-text text-darken-2 waves-effect waves-light btn-large bg-secondary col s12 m3">Bienes disponibles</a>

                    <a href="<?php echo ROUTE_URL; ?>good/index" class="white-text text-darken-2 waves-effect waves-light btn-large bg-secondary col s12 m3">Mis bienes</a>

                    <a href="<?php echo ROUTE_URL; ?>report/index" class="white-text text-darken-2 waves-effect waves-light btn-large bg-secondary col s12 m3">Reportes</a>
                </div>

            </div>

            <?php require ROUTE_VIEW . $view; ?>

        </div>

    </main>

    <?php require ROUTE_INCLUDE . 'home/scripts.php' ?>

</body>

</html>