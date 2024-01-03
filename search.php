<?php
session_start();
require "includes/header.php";
if(!isset($_SESSION['user'])){ header('location: index.php');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suche</title>
    <!-- Bootstrap CSS (wählen Sie die Version, die auf Ihrem Server verfügbar ist) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>
<body>
           
    <div class="container">
        <h2>Suche</h2>
        <div class="form-group">
            <label for="searchBox">Suche:</label>
            <input type="text" class="form-control" id="searchBox" onclick="openCamera()" placeholder="Hier scannen oder schreiben">
        </div>
    </div>

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
    

    <!-- JavaScript und Bootstrap JS (wählen Sie die Version, die auf Ihrem Server verfügbar ist) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JavaScript für die Kamera -->
    <script>
        const scanner = new Html5QrcodeScanner('reader', { 
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            width: 250,
            height: 250,
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 20, // Frames per second to attempt a scan
    });


    scanner.render(success, error);
    // Starts scanner

    function success(result) {

        document.getElementById('result').innerHTML = `
        <h2>Success!</h2>
        <p><a href="${result}">${result}</a></p>
        `;
        // Prints result as a link inside result element

        scanner.clear();
        // Clears scanning instance

        document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
    
    }

    function error(err) {
        console.error(err);
        // Prints any errors to the console
    }
    </script>
</body>
</html>
