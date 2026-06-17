<?php
header('Content-Type: application/json; charset=UTF-8');
require '../app/config/conexion.php';

// Recibimos filtros
$producto   = $_GET['producto'] ?? '';
$cliente    = $_GET['cliente'] ?? '';
$precio_min = $_GET['precio_min'] ?? '';
$precio_max = $_GET['precio_max'] ?? '';

// Consulta base
$sql = "
    SELECT 
        p.id,
        p.nombre AS producto,
        p.precio,
        c.nombre AS cliente
    FROM productos p
    INNER JOIN clientes c ON c.id = p.cliente_id
    WHERE 1=1
";

$params = [];

// Filtro por producto
if($producto != '') {
    $sql .= " AND p.nombre LIKE :producto";
    $params[':producto'] = "%$producto%";
}

// Filtro por cliente
if($cliente != '') {
    $sql .= " AND c.nombre LIKE :cliente";
    $params[':cliente'] = "%$cliente%";
}

// Filtro por precio mínimo
if($precio_min != '') {
    $sql .= " AND p.precio >= :precio_min";
    $params[':precio_min'] = $precio_min;
}

// Filtro por precio máximo
if($precio_max != '') {
    $sql .= " AND p.precio <= :precio_max";
    $params[':precio_max'] = $precio_max;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolvemos JSON para DataTables
echo json_encode([
    "total" => count($productos),
    "data"  => $productos
]);
