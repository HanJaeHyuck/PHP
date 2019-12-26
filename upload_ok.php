<?php
    // $test = $_POST['test'];
    // $file = $_POST['upload'];

    // echo "<pre>";
    // var_dump ($_FILES);
    // echo "</pre>";
    
    if(!file_exists("upload")) {
        mkdir("upload");
    }

    $tmpName = $_FILES['upload']['tmp_name'];
    $realName = $_FILES['upload']['name'];

    move_uploaded_file($tmpName, "upload/{$realName}");

    echo "성공적으로 업로드 되었습니다.";
    