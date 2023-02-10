<?php
if (isset($_POST['Username']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['os']) && isset($_POST['languages'])) {
    $Username = $_POST['Username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $os = $_POST['os'];
    $languages = $_POST['languages'];

    $programmingLanguages = "";
    if (isset($_POST['html'])) {
        $programmingLanguages .= "HTML ";
    }
    if (isset($_POST['CSS'])) {
        $programmingLanguages .= "CSS ";
    }
    if (isset($_POST['JS'])) {
        $programmingLanguages .= "JavaScript ";
    }
    if (isset($_POST['Py'])) {
        $programmingLanguages .= "Python ";
    }
    if (isset($_POST['C#'])) {
        $programmingLanguages .= "C#";
    }

    $data = "$Username, $mail, $password, $os, $programmingLanguages, $languages\n";

    file_put_contents('information.txt', $data, FILE_APPEND);

    header('Location: success.html');
    exit;
}
?>