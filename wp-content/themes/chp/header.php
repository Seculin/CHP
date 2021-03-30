<?php
/*
    CHP Theme | Header
    Copyright: 2021, Seculin, www.seculin.com
    Wordpress v5.6.2
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    Using YoastSEO to attach meta data    -->

    <!--    Use core WP function to insert favicon    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <link 
        href="<?php echo get_template_directory_uri(); ?>/style.css" 
        rel="stylesheet"
        >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('template-parts/header/page', 'navigation'); ?>
