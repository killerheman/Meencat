@extends('Backend.includes.layout')
@section('content')
    <!-- Basic table card start -->
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Course</h5>
                        <p class="m-b-0">Welcome to MeenCat</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Course</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Page body start -->
    <div class="container">
        <div class="page-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Course</h5>
                        </div>
                        <div class="card-block">
                            <form class="form-material" action="#" method="POST" enctype="multipart/form-data">
                               
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Course Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="text" name="cname" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Discription</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="text" name="cname" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">prise</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="file" name="filename" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group form-default">
                                            <button class="btn btn-primary btn-round waves-effect waves-light"
                                                type="submit" class="bg-danger">Save</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                             <!-- Hover table card end -->
@endsection