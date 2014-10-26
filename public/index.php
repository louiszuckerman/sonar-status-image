<?php

const SONAR_SERVER = 'http://localhost:9000';

$resource = $_GET['resource'];

if (empty($resource)) {
    header("400 Bad Request");
    echo "ERROR: 'resource' query param is missing";
    exit;
}

$query = http_build_query([
    'resource' => $resource,
    'metrics' => 'coverage',
]);

$response = json_decode(file_get_contents(SONAR_SERVER . '/api/resources?' . $query), true);

$coverage_pct = $response[0]['msr'][0]['frmt_val'];

# The following code was copied from http://bavotasan.com/2009/turn-text-into-an-image-using-the-php-gd-library/

header("Content-type: image/png");

$string = "Unit test coverage: $coverage_pct";

$font = 2;
$width = imagefontwidth($font) * strlen($string);
$height = imagefontheight($font);

$image = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $white);

imagestring($image, $font, 0, 0, $string, $black);

imagepng($image);
imagedestroy($image);
