<?php
header('Content-Type: application/json; charset=UTF-8');
require '../app/config/conexion.php';

$sql = "
    SELECT 
        p.id,
        p.nombre AS producto,
        p.precio,
        c.nombre AS cliente
    FROM productos p
    INNER JOIN clientes c ON c.id = p.cliente_id
";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$productos = $stmt->fetchAll();

echo json_encode([
    "total" => count($productos),
    "data" => $productos
]);
