<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Filtered Vehicles</h1>
            </div>
        </div>
        <div class="row">
          
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('holders/image.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Make Model Placeholder</h5>
                            <p class="card-text">
                                <strong>Year:</strong> Year Placeholder<br>
                                <strong>Mileage:</strong> Mileage Placeholder miles<br>
                                <strong>Engine Capacity:</strong> Engine Capacity Placeholder cc<br>
                                <strong>Fuel Type:</strong> Fuel Type Placeholder<br>
                                <!-- Add more information as needed -->
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Transmission:</strong> Transmission Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Body Style:</strong> Body Style Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Seats:</strong> Seats Placeholder
                            </li>
                        </ul>
                        <div class="card-body">
                            <strong>Availability:</strong> Availability Placeholder<br>
                            <strong>Price:</strong> $Price Placeholder
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('holders/image.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Make Model Placeholder</h5>
                            <p class="card-text">
                                <strong>Year:</strong> Year Placeholder<br>
                                <strong>Mileage:</strong> Mileage Placeholder miles<br>
                                <strong>Engine Capacity:</strong> Engine Capacity Placeholder cc<br>
                                <strong>Fuel Type:</strong> Fuel Type Placeholder<br>
                                <!-- Add more information as needed -->
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Transmission:</strong> Transmission Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Body Style:</strong> Body Style Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Seats:</strong> Seats Placeholder
                            </li>
                        </ul>
                        <div class="card-body">
                            <strong>Availability:</strong> Availability Placeholder<br>
                            <strong>Price:</strong> $Price Placeholder
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('holders/image.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Make Model Placeholder</h5>
                            <p class="card-text">
                                <strong>Year:</strong> Year Placeholder<br>
                                <strong>Mileage:</strong> Mileage Placeholder miles<br>
                                <strong>Engine Capacity:</strong> Engine Capacity Placeholder cc<br>
                                <strong>Fuel Type:</strong> Fuel Type Placeholder<br>
                                <!-- Add more information as needed -->
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Transmission:</strong> Transmission Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Body Style:</strong> Body Style Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Seats:</strong> Seats Placeholder
                            </li>
                        </ul>
                        <div class="card-body">
                            <strong>Availability:</strong> Availability Placeholder<br>
                            <strong>Price:</strong> $Price Placeholder
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('holders/image.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Vehicle Make Model Placeholder</h5>
                            <p class="card-text">
                                <strong>Year:</strong> Year Placeholder<br>
                                <strong>Mileage:</strong> Mileage Placeholder miles<br>
                                <strong>Engine Capacity:</strong> Engine Capacity Placeholder cc<br>
                                <strong>Fuel Type:</strong> Fuel Type Placeholder<br>
                                <!-- Add more information as needed -->
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Transmission:</strong> Transmission Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Body Style:</strong> Body Style Placeholder
                            </li>
                            <li class="list-group-item">
                                <strong>Seats:</strong> Seats Placeholder
                            </li>
                        </ul>
                        <div class="card-body">
                            <strong>Availability:</strong> Availability Placeholder<br>
                            <strong>Price:</strong> $Price Placeholder
                        </div>
                    </div>
                </div>
                @foreach ($vehicles as $vehicle)
            @endforeach
        </div>
    </div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
