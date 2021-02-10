<?php

header('Content-Type: application/xls; charset=utf-8');
header("Content-Disposition: attachment; filename= bienes.xls");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Identificador</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Teléfono</th>
        <th>Código Postal</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($data["goods"] as $good) : ?>
            <tr>
                <td><?php echo $good["Id"] ?></td>
                <td><?php echo $good["Direccion"] ?></td>
                <td><?php echo $good["Ciudad"] ?></td>
                <td><?php echo $good["Telefono"] ?></td>
                <td><?php echo $good["Codigo_Postal"] ?></td>
                <td><?php echo $good["Tipo"] ?></td>
                <td><?php echo $good["Precio"] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>