<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?=$meta->page_title?></title>
        <link rel="icon" type="image/x-icon" href="<?= ROOT?>resources/logos/logo.png" />
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet" />
        
        <script src="<?= ROOT?>resources/external/libraries/tailwind/tailwind.js"></script>
        <link
        rel="stylesheet"
        href="<?= ROOT?>resources/external/libraries/tailwind/tailwind-elements.min.css" />
        <script src="<?= ROOT?>resources/external/libraries/tailwind/tailwind-elements-index.min.js
        "></script>
        <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
            },
            corePlugins: {
            preflight: false,
            },
        };
        </script>

        <script src="<?= ROOT?>resources/external/jquery.js"></script>
        <script src="<?= ROOT?>resources/external/libraries/bootstrap/bootstrap.bundle.min.js"></script>
   
        <!-- CUSTOM CSS  -->
        <link rel="stylesheet" href="<?= ROOT?>resources/custom/css/main.css" />
    </head>
    <body class="font-mono">
