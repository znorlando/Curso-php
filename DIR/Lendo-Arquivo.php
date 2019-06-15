<?php

$images = scandir("images");

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) {

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filenome);

        $info["size"] = filesize($filenome);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filenome));
        $info["url"] = "http://localhost/DIR/".str_replace("\\", "/",$filenome);

        array_puch($data, $info);

    }
}

echo json_encode($data);

?>