<?php
function get_img_path($img_path)
{
    if (!str_contains($img_path, 'http')) $img_path = str_replace('./', $_ENV['STATIC_PATH'] . "images/", $img_path);
    return $img_path;
}
