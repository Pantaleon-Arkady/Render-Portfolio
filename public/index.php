<?php include_once('includes/image-helper.php'); ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="files/myicon.png">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</head>
<!--  -->
<body>
    <!-- HEADER -->
    <header class="fixed top-0 left-0 w-full h-[90px] bg-[#040c24] flex items-center justify-center z-50">
    <nav class="flex gap-6">
        <a
            href="#section1"
            class="section_links inline-flex h-10 w-max items-center justify-center
                rounded-md px-4 py-2 text-sm font-medium
                text-gray-400
                transition-all duration-300 ease-out
                hover:bg-white/15 hover:text-white
                focus:outline-none focus:bg-white/15 focus:text-white
                active:scale-95">
            Home
        </a>
        <a
            href="#section-project"
            class="section_links inline-flex h-10 w-max items-center justify-center
                rounded-md px-4 py-2 text-sm font-medium
                text-gray-400
                transition-all duration-300 ease-out
                hover:bg-white/15 hover:text-white
                focus:outline-none focus:bg-white/15 focus:text-white
                active:scale-95">
            Projects
        </a>
    </nav>
</header>


    <!-- MAIN -->
    <main class="h-screen overflow-hidden">

        <div class="h-full overflow-y-auto scroll-smooth">

            <?php include_once('divs/section-1.php'); ?>
            <?php include_once('divs/section-project.php'); ?>
        </div>

    </main>

    <!-- Light Box -->
    <?php include_once('modals/modal-project-one.php') ?>
    <?php include_once('modals/modal-project-two.php') ?>
    <?php include_once('modals/modal-project-three.php') ?>
    <?php include_once('modals/modal-project-four.php') ?>
    <?php include_once('modals/modal-project-five.php') ?>
    <script src="statics/script.js"></script>
    

</body>

</html>