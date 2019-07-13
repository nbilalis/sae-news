<?php
header("content-type: text/json");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    if (filter_var($id, FILTER_VALIDATE_INT)) {

        require_once("includes/conn-start.php");

        if ($stmt = $conn->prepare("UPDATE posts SET likes = IFNULL(likes, 0) + 1 WHERE id = ?")) {
            $stmt->bind_param("i", $id);
            $stmt->execute();

            if ($stmt = $conn->prepare("SELECT likes FROM posts WHERE id = ?")) {
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $results = $stmt->get_result();

                if ($row = $results->fetch_assoc()) {
                    echo json_encode($row);
                }
            }
        }
    }
}    
?>