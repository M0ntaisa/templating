<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Model Sistem</title> -->
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Work Templating</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Work Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        
        <!-- css files -->
        <link href="./assets/web/css/bootstrap.css" rel='stylesheet' type='text/html' /><!-- bootstrap css -->
        <link href="./assets/web/css/style.css" rel='stylesheet' type='text/html' /><!-- custom css -->
        <link href="./assets/web/css/fontawesome-all.css" rel="stylesheet" type="text/html"><!-- fontawesome css -->
        <!-- //css files -->
        
        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
        <!-- //google fonts -->
        <!-- icon -->
        <link rel="icon" href="https://img.icons8.com/flat_round/64/000000/checkmark.png">
        
    </head>
    <?php
    $content = (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_REQUEST['content'])) ? str_replace('-', '_', $_REQUEST['content']) : $_REQUEST['content'];
    if (file_exists('css/' . $content . '.php')) {
        switch ($content) {
            case $content:
                include_once 'css/' . str_replace('-', '_', $content) . '.php';
                break;
        }
    }
    ?>

    <!-- jquery cdn -->
    <script rel="preload" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>