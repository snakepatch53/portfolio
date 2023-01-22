<?php
if (empty($lang)) $lang = 'es';
if ($lang != 'es' && $lang != 'en') $lang = "es";
$_ = parse_ini_file("./languages/{$lang}.ini");
$_ME = json_decode(file_get_contents("./src/backend/my_info.json"), true);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta name="author" content="TemplateMo">
<!-- CSS FILES -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link rel="shortcut icon" href="<?= $_ENV['STATIC_PATH'] ?>images/logo.png" type="image/x-icon">
<link href="<?= $_ENV['STATIC_PATH'] ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $_ENV['STATIC_PATH'] ?>css/bootstrap-icons.css" rel="stylesheet">
<link href="<?= $_ENV['STATIC_PATH'] ?>css/magnific-popup.css" rel="stylesheet">
<link href="<?= $_ENV['STATIC_PATH'] ?>css/templatemo-first-portfolio-style.css" rel="stylesheet">