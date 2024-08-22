<?php
include_once "db_conn_YQB9Myj3vp.php";

function recuperProjects() {
    global $conn;

    $sql = "SELECT * FROM port_project";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $projets = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $projets[] = $row;
    }
    return $projets;
}

function recupererProjetByID($id) {
    global $conn;

    $sql = "SELECT * FROM port_project WHERE id_project = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $projet = $stmt->fetch(PDO::FETCH_ASSOC);
    return $projet;
}
?>
