<?php require 'api.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Weather app</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Weather App</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Features</a>
            <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="index.php" method="post">
                    <h3 class="mb-3">Get weather by city</h3>
                    <input type="text" name="city" class="form-control mb-3" placeholder="Enter city...">
                    <button type="submit" name="submit" class="btn btn-primary mt-2">Get weather</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="weather_field mt-3">
                    <!-- name -->
                    <strong>City:</strong> <?php echo $data['name'] ?> 
                </div>
                <div class="weather_field mt-3">
                    <!-- main temp -->
                    <strong>Temp:</strong> <?php echo $data['main']['temp'] ?> &#8451;
                </div>
                <div class="weather_field mt-3">
                    <!-- main feels_like -->
                    <strong>Feels like:</strong> <?php echo $data['main']['feels_like'] ?> &#8451;
                </div>
                <div class="weather_field mt-3">
                    <!-- main humidity -->
                    <strong>Humidity:</strong> <?php echo $data['main']['humidity'] ?>
                </div>
                <div class="weather_field mt-3">
                    <!-- main pressure -->
                    <strong>Pressure:</strong> <?php echo $data['main']['pressure'] ?>
                </div>
                <div class="weather_field mt-3">
                    <!-- wind speed -->
                    <strong>Wind Speed:</strong> <?php echo $data['wind']['speed'] ?> mps
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>