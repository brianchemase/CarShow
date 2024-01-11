@extends('dash.inc.master')


@section('title', 'Dashboard || Dashboard Forms')

@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> New Car Registration </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Register Car Details</h4>
                        <form class="form-sample" enctype="multipart/form-data" method="POST">
                            @csrf
                            <p class="card-description"> Motor Vehicle info </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Manufacturer</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="manufacturer" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Model</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="model" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Fuel</label>
                                        <div class="col-sm-8">
                                            <select name="fuel_type" class="form-control">
                                                <option value="Petrol">Petrol</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Petrol Hybrid">Petrol Hybrid</option>
                                                <option value="Diesel Hybrid">Diesel Hybrid</option>
                                                <option value="Electric">Electric</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Year of Manufacture</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="yom" type="number" min="1900" max="2099" step="1" value="2016" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Engine Capacity(in cc)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="engine_capacity" type="number" min="10" max="20000" step="1" value="1300" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Transmission</label>
                                        <div class="col-sm-8">
                                            <select name="transmission" class="form-control">
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Body style</label>
                                        <div class="col-sm-8">
                                            <select name="body_style" class="form-control">
                                                <option value="Saloon">Saloon</option>
                                                <option value="Statio Wagon">Station Wagon</option>
                                                <option value="Coupe">Coupe</option>
                                                <option value="Convertible">Convertible</option>
                                                <option value="Mini SUV">Mini SUV</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Mini Van">Mini Van</option>
                                                <option value="Van">Van</option>
                                                <option value="Single Cabin pickup">Single Cabin pickup</option>
                                                <option value="Double Cabin pickup">Double Cabin pickup</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Condition</label>
                                        <div class="col-sm-8">
                                            <select name="condition" class="form-control">
                                                <option value="New Local Assembly">New Local Assembly</option>
                                                <option value="Used Local Assembly">Used Local Assembly</option>
                                                <option value="Fresh import">Fresh import</option>
                                                <option value="Locally used import">Locally used import</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Mileage</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="mileage" type="number" min="0" max="20000000" step="1" value="0" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Seats</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="seats" type="number" min="1" max="100" step="1" value="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="price" type="number" min="1" max="100" step=".01" value="{{old('price')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-gradient-primary me-2">Next</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
