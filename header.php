<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkytown</title>

    <?php
    $introductionBackgroundImage = get_field("introduction_background_image");
    $videoBackgroundImage = get_field("video_background_image");
    $portfolioBackgroundImageUpper = get_field("portfolio_background_image_upper");
    $portfolioBackgroundImageLower = get_field("portfolio_background_image_lower");
    $contactBackgroundImage = get_field("contact_background_image");
    $bottomBackgroundImage = get_field("bottom_background_image");
    ?>
    
    <link rel="preload" as="image" href="<?php echo $introductionBackgroundImage['url']; ?>" />
    <link rel="preload" as="image" href="<?php echo $videoBackgroundImage['url']; ?>" />
    <link rel="preload" as="image" href="<?php echo $portfolioBackgroundImageUpper['url']; ?>" />
    <link rel="preload" as="image" href="<?php echo $portfolioBackgroundImageLower['url']; ?>" />
    <link rel="preload" as="image" href="<?php echo $contactBackgroundImage['url']; ?>" />
    <link rel="preload" as="image" href="<?php echo $bottomBackgroundImage['url']; ?>" />
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>