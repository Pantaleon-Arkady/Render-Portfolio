<?php
$filePath = '../files/cv-parungao.pdf';
$fileName = 'cv-parungao.pdf';

if (!file_exists($filePath) || !is_readable($filePath)) {
    http_response_code(404);
    die('File not found.');
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filePath));

readfile($filePath);
exit;