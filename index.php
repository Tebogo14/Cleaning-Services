<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cleaning Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Favicons -->
    <link href="newMVC/assets/img/favicon.png" rel="icon">
    <link href="newMVC/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="/newMVC/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/newMVC/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/newMVC/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/newMVC/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/newMVC/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/newMVC/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c5305dc264.js" crossorigin="anonymous"></script>
    <link href="/newMVC/assets/css/style.css" rel="stylesheet">
    <link href="/newMVC/assets/css/layout.css" rel="stylesheet">
    <link href="/newMVC/assets/css/framework.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">

            <?php
            session_start();
            
            if(isset($_SESSION['username']))
            {
            require_once( './layout/navbar.php' );
            ?>
            <div class="content">
                <?php
                require_once( './_Globals.php' );
                require_once( './routes/Routes.php' );

                  function __autoload($class_name) {

                    require_once './controllers/'.$class_name.'.php';
                }
            }
            else{
                require_once( './_Globals.php' );
                require_once( './routes/Routes.php' );
                
                  function __autoload($class_name) {
                    
                    require_once './controllers/'.$class_name.'.php';
                }
            }
                ?>
            </div>
        </div>
    </div>
</body>

</html>