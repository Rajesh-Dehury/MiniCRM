@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('data.update')}} {{__('data.company')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{__('data.update')}} {{__('data.company')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div>

                    </div>
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form method="POST" enctype="multipart/form-data" action="{{route('admin.company.update',$company->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">{{__('data.company')}} {{__('data.name')}}</label>
                                    <input type="text" name="name" value="{{$company->name}}" class="form-control" id="name" placeholder="{{__('data.company')}} {{__('data.name')}}">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('data.company')}} {{__('data.email')}}</label>
                                    <input type="email" name="email" value="{{$company->email}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('data.company')}} {{__('data.email')}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="website">{{__('data.company')}} {{__('data.website')}}</label>
                                    <input type="url" name="website" value="{{$company->website}}" class="form-control" id="website" placeholder="{{__('data.company')}} {{__('data.website')}}">
                                    @error('website')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{__('data.company')}} {{__('data.logo')}}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo">
                                            <label class="custom-file-label" for="logo">{{__('data.choose_file')}}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">{{__('data.upload')}}</span>
                                        </div>
                                    </div>
                                    @error('logo')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <img src="{{asset('storage/'.$company->logo)}}" alt="" style="height: 100px;">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{__('data.update')}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection