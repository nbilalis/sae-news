<?php
function post_or_die($key, $filter = false) {
    if (isset($_POST[$key]) && !empty($_POST[$key])) {
        if ($filter and $val = filter_var($_POST[$key], $filter)) {
            return $val;
        } else {
            return $_POST[$key];
        }
    } else {
        die("Required value missing");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once("../includes/conn-start.php");

    $title = strip_tags(post_or_die("title"));
    $body = post_or_die("body");
    $date = post_or_die("date");
    $user_id = post_or_die("user", FILTER_VALIDATE_INT);
    $category_id = post_or_die("category", FILTER_VALIDATE_INT);

    if ($stmt = $conn->prepare("INSERT INTO posts (title, body, date, user_id, category_id) VALUES (?, ?, ?, ?, ?) ")) {
        $stmt->bind_param("sssii", $title, $body, $date, $user_id, $category_id);

        $result = $stmt->execute();

        if (!$result) {
            die("Statement error: " . $conn->error);
        }

        $stmt->close();

        require_once("../includes/conn-end.php");

        header("location: posts.php?success");
    }
}
