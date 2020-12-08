<?php

if(!$_POST){
    header('Location:index.html');
}

$producto = $_POST['productos'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$SubTotal = $precio * $cantidad;
$pago = $_POST['FormaPago'];

if($pago === 'Tarjeta'){
    $descuento = $SubTotal * 0.2;
}

if($pago === 'Efectivo'){
    $descuento = $SubTotal * 0.1;
}else if($pago === 'Cupon'){
    $descuento = $SubTotal * 0.15;
}

$total = $SubTotal - $descuento;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="estilo.css">
    <title>Boleta</title>
</head>
<body>
    <h1>Total a pagar</h1>
    <p>Producto: <?php echo $producto; ?></p>
    <p>Precio: <?php echo $precio; ?></p>
    <p>Cantidad: <?php echo $cantidad; ?></p>
    <p>Subtotal: <?php echo $SubTotal; ?></p>
    <p>Forma de pago: <?php echo $pago; ?></p>
    <p>Descuento: <?php echo $descuento; ?></p>
    <p>total: <?php echo $total; ?></p>
</body>
</html>