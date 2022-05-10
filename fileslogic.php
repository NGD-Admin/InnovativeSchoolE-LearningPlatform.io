<?php
include 'dbtech.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT * FROM handout WHERE id=$id";
    $result = mysqli_query($db, $sql);

    $handouts = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $handouts['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $handouts['name']));
        readfile('uploads/' . $handouts['name']);

        // Now update downloads count
        $newCount = $handouts['downloads'] + 1;
        $updateQuery = "UPDATE handout SET downloads=$newCount WHERE id=$id";
        mysqli_query($db, $updateQuery);
        exit;
    }

}
?>