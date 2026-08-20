<?php

function insertarReserva($conexion, $dni, $nombre, $destino, $numpersonas, $dias){
    
    $sql = "INSERT INTO reservas
            (dni, nombre, destino, numpersonas, numdias)
            VALUES
            (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conexion, $sql);
    
    mysqli_stmt_bind_param($stmt, "sssii", $dni, $nombre, $destino, $numpersonas, $dias);
    $ejecutado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    return $ejecutado;
    
}

function consultarReserva($conexion, $id) {
    $sql = "SELECT * FROM reservas WHERE id_reserva=?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $ejecutado = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $ejecutado;
}

function anularReserva($conexion, $id) {
    $sql = "DELETE FROM reservas WHERE id_reserva=?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);;
    $ejecutado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $ejecutado;
}

function actualizarReserva($conexion, $id, $dies) {
    $sql = "UPDATE reservas SET numdias=? WHERE id_reserva=?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $dies, $id);
    $ejecutado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $ejecutado;
}


?>