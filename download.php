<?php
$url = $_POST['url'];

$output = shell_exec("youtube-dl --format bestvideo[height<=1080]+bestaudio/best --merge-output-format mp4 $url");

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="video.mp4"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($output));

readfile($output);
?>