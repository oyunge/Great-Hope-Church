@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $page }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ $page }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $page }}</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('admin.introduction.create') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">


                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="event_name">intro_title</label>
                                            <input type="text" name="intro_title" class="form-control" autocomplete="off"
                                                required>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">intro_message</label>
                                        <textarea name="intro_message" class="form-control" id="editor"></textarea>

                                    </div>--}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control" autocomplete="off">

                                        </div>
                                    </div>

                                </div> 

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="event_name">title</label>
                                        <input type="text" name="title" class="form-control" autocomplete="off"
                                            required>

                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="desc">message</label>
                                        <textarea name="message" class="form-control" id="editor"></textarea>

                                    </div>
                                    
                                </div>
                                <!-- /.card-body -->

                                <div class="">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
