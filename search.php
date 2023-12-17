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

    <!-- JavaScript und Bootstrap JS (wählen Sie die Version, die auf Ihrem Server verfügbar ist) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- JavaScript für die Kamera -->
    <script>
        function openCamera() {
            // Hier JavaScript-Code hinzufügen, um die Kamera zu öffnen
            // Beispiel: navigator.mediaDevices.getUserMedia({ video: true });
        }
    </script>
</body>
</html>
