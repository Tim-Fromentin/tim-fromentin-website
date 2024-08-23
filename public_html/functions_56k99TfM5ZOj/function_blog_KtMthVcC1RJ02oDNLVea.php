<?php
include_once "";

function takeAllarticle() {
    global $conn;

    $sql = "SELECT * FROM dev_blog";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $articles = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $articles[] = $row;
    }
    return $articles;
}

function takeAllArticleByID($id) {
    global $conn;

    $sql = "SELECT * FROM dev_blog WHERE id_article = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    return $article;
}
?>