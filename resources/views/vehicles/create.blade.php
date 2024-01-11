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
                        <form class="form-sample">
                            <p class="card-description"> Motor Vehicle info </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Manufacturer</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Model</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Fuel</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>Petrol</option>
                                                <option>Diesel</option>
                                                <option>Petrol Hybrid</option>
                                                <option>Diesel Hybrid</option>
                                                <option>Electric</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Year of Manufacture</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="number" min="1900" max="2099" step="1" value="2016" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Engine Capacity(in cc)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="number" min="10" max="20000" step="1" value="1300" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Transmission</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>Automatic</option>
                                                <option>Manual</option>
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
                                            <select class="form-control">
                                                <option>Saloon</option>
                                                <option>Station Wagon</option>
                                                <option>Coupe</option>
                                                <option>Convertible</option>
                                                <option>Mini SUV</option>
                                                <option>SUV</option>
                                                <option>Mini Van</option>
                                                <option>Van</option>
                                                <option>Single Cabin pickup</option>
                                                <option>Double Cabin pickup</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Condition</label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option>New Local Assembly</option>
                                                <option>Used Local Assembly</option>
                                                <option>New import</option>
                                                <option>Locally used import</option>
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
                                            <input class="form-control" type="number" min="0" max="20000000" step="1" value="0" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Seats</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="number" min="1" max="100" step="1" value="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
