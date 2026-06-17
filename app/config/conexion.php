<?php
$host = "localhost";
$db   = "tienda";
$user = "root";
$pass = "";
$charset = "utf8mb4";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=$charset",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die(json_encode([
        'error' => true,
        'mensaje' => 'Error de conexión a la base de datos'
    ]));
}

// NUEVA FUNCION
/**
 * Ejecuta una consulta preparada
 */
function ejecutarConsulta(PDO $pdo, string $sql, array $parametros = []): PDOStatement
{
    $stmt = $pdo->prepare($sql);
    $stmt->execute($parametros);
    return $stmt;
}

/**
 * Obtiene un único registro
 */
function obtenerRegistro($pdo, $sql, $parametros = [])
{
    return ejecutarConsulta($pdo, $sql, $parametros)->fetch();
}