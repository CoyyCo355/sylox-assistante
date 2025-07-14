<?php
$dir = __DIR__ . "/Recordings/";
if (!is_dir($dir)) mkdir($dir, 0777, true);

if (isset($_FILES["audio"])) {
    $filename = "audio_" . date("Ymd_His") . ".webm";
    $filepath = $dir . $filename;
    if (move_uploaded_file($_FILES["audio"]["tmp_name"], $filepath)) {
        copy($filepath, $dir . "latest.webm"); // copie pour lecture
        echo "Audio enregistré";
    } else {
        echo "Erreur lors de l'enregistrement";
    }
} else {
    echo "Aucun fichier reçu";
}
