<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function() {
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kelembapan").load("{{ url('bacakelembapan') }}");
            }, 1000);
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5" style="text-align: center">
        <img src="{{ ('images/LaravelLogo.png') }}" style="width: 150px" alt="" >
        <h2 class="text-center fw-bold">Nyobaan</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white fw-bold text-center bg-danger">
                      Suhu
                    </div>
                    <div class="card-body text-center" style="font-size: 70px">
                      <span id="suhu">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">°C</span>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white fw-bold text-center bg-primary">
                      Kelembapan
                    </div>
                    <div class="card-body text-center" style="font-size: 70px">
                      <span id="kelembapan">0</span> <span style="vertical-align: top; font-size: 30px;font-weight: bold">%</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>