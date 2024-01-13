<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- {{asset('dashboard/')}} -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <title>Search Results</title>
  </head>
  <body>


    
     <div class="container">
        


        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Filtered Vehicles</h1>    
            </div>

            <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                    <div class="single-model-search">
                                            <h2>Transmission</h2>
                                            <div class="model-select-icon">
                                                <select class="form-control" name="transmission">
													<option disabled selected>Pick Transmission</option><!-- /.option-->
                                                    <option value="automatic">Automatic</option><!-- /.option-->
                                                    <option value="manual">Manual</option><!-- /.option-->
                                                    <option value="hybrid">Hybrid</option><!-- /.option-->
                                                    
                                                </select><!-- /.select-->
                                            </div><!-- /.model-select-icon -->
                                        </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                 
                
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            </div>

        </div>
        <br>


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
                        <img src="{{ asset('holders/image1.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
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
                        <img src="{{ asset('holders/image2.jpg') }}" class="card-img-top" alt="Vehicle Image Placeholder">
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
