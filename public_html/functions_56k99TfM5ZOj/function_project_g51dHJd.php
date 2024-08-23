<?php
include_once "";

function takeAllProject() {
    global $conn;

    $sql = "SELECT * FROM dev_project";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $projects = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $projects[] = $row;
    }
    return $projects;
}

function takeAllProjectByID($id) {
    global $conn;

    $sql = "SELECT * FROM dev_project WHERE id_project = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $project = $stmt->fetch(PDO::FETCH_ASSOC);
    return $project;
}
?>