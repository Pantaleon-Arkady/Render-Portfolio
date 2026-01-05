<?php include_once('includes/image-helper.php'); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="files/myicon.png">
    <title>Portfolio</title>
    <link href="statics/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <div class="two_main_divs header_div">
    </div>

    <!-- MAIN -->
    <div class="two_main_divs main_div_content">

        <!-- LEFT -->
        <div class="two_sub_divs left_main_div">
            <a href="#section1" class="section_links">Introduction</a>
            <a href="#section2" class="section_links">Projects 1-2</a>
            <a href="#section3" class="section_links">Projects 3-4</a>
            <a href="#section4" class="section_links">Project 5</a>
            <a href="#section5" class="section_links">...</a>
        </div>

        <!-- RIGHT - CONTENTS -->
        <div class="two_sub_divs right_main_div">

            <div class="main_sections odd_content" id="section1">
                <a href="includes/download.php" class="download-cv-link">Download my CV</a>
            </div>

            <?php include_once('divs/section-2.php'); ?>
            <?php include_once('divs/section-3.php'); ?>
            <?php include_once('divs/section-4.php'); ?>
            <div class="main_sections odd_content" id="section5">
                Footer
            </div>
        </div>

    </div>

    <!-- Light Box -->
    <?php include_once('modals/modal-project-one.php') ?>
    <?php include_once('modals/modal-project-two.php') ?>
    <?php include_once('modals/modal-project-three.php') ?>
    <?php include_once('modals/modal-project-four.php') ?>
    <?php include_once('modals/modal-project-five.php') ?>
    <script src="statics/script.js"></script>
</body>

</html>