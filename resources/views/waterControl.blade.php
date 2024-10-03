<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control ESP32</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Water Control</h1>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <button class="btn btn-success btn-lg" id="turnOn">Turn ON</button>
                <button class="btn btn-danger btn-lg" id="turnOff">Turn OFF</button>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <p id="statusMessage" class="lead"></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#turnOn').click(function() {
                $.get('/waterOn', function(data) {
                    $('#statusMessage').text(data.message);
                });
            });

            $('#turnOff').click(function() {
                $.get('/waterOff', function(data) {
                    $('#statusMessage').text(data.message);
                });
            });
        });
    </script>
</body>

</html>
