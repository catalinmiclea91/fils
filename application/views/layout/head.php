<!DOCTYPE html>
<html lang="<?php echo substr($this->session->userdata('language'), 0 ,2); ?>">
<!-- ro, de, fr, en  -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <meta name="author" content="Florian Popa, Miclea Catalin-Florentin, Ciprian Popescu">

    <meta name="description" content="<?php if(isset($meta_description)) echo $meta_description; ?>">

    <title><?php if(isset($title)) echo $title; ?></title>

    <link rel="stylesheet" type="text/css" href="/assets/css/blueberry.css" />

    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <!-- schimba asta -->
    <!--[if lte IE 8]>
    	<link rel="stylesheet" type="text/css" href="/assets/css/ie8.css" />
    <![endif]-->

</head>


