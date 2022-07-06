@extends('Backend.includes.layout')
@section('content')
 <!-- Basic table card start -->
  <!-- Page-header start -->
  <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Registerd Students</h5>
                                            <p class="m-b-0">Welcome to MeenCat</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{route('backend.dashboard')}}"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Registerd Students</li>
                    </ul>
            </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
 <br><br>
 <div class="container">
 <div class="card">
                                            <div class="card-header">
                                                <h3>Registerd Students</h3>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr.No</th>
                                                                <th>Name</th>
                                                                <th>Phone</th>
                                                                <th>E-mail Id</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>
                                                                <button class="btn waves-effect waves-light btn-info btn-icon"><i class="icofont icofont-edit"></i></button>
                                                                <button class="btn waves-effect waves-light btn-danger btn-icon"><i class=" icofont icofont-trash"></i></button>

                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
 </div>
                                        <!-- Hover table card end -->
@endsection