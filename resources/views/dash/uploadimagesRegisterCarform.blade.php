@extends('dash.inc.master')


@section('title','Dashboard || Dashboard Image Uploads')

@section('content')

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> New Car Registration - Image uploads </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Image Uploads</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
             
              <div class="col-12">
                <div class="card">
                  <br>
                  @include('index')

           
                 
                  <div class="card-body">
                      <div class="form-group">
                          <button type="submit" class="btn btn-gradient-primary me-2">Publish Ad</button>
                          <button class="btn btn-light">Cancel</button>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection