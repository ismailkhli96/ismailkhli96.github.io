<?php
    session_start();
    if(!isset($_SESSION['user'])) { header('location: index.php');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- Bootstrap CSS (choose the version that matches your server) -->
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--     Fonts and icons     -->
    <link href="assets/css/dist/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="style1.css">
    

   
    
    
</head>

<body >
    
    <div class="wrapper"> 
        <!--sidbar compnent-->
        <?php include 'src/includes/sidebar.php'; ?>
            <!--Main compnent-->
            <div class="main">
                <!--navbar compnent--> 
                <?php include 'src/includes/header.php'; ?>

                <div class="main-container mt-5" >
                   
                        <style>
                            main {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                            #reader {
                                width: 600px;
                            }
                            #result {
                                text-align: center;
                                font-size: 1.5rem;
                            }
                        </style>

                        <main>
                            <div id="reader"></div>
                            <div id="result"></div>
                        </main>
                        
                </div>
            </div>


    </div>
        
                            
    <!-- Bootstrap JS and dependencies (choose the version that matches your server) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="node_modules/html5-qrcode/" ></script>
    <script src="qrCodeScanner.imp.js"></script>
</body>
</html>
