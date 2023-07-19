@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('data.create_employee')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('data.home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('data.create_employee')}}</li>
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
                        <form method="POST" enctype="multipart/form-data" action="{{route('admin.employee.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="first_name">{{__('data.first')}} {{__('data.name')}}</label>
                                    <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" id="first_name" placeholder="{{__('data.first')}} {{__('data.name')}}">
                                    @error('first_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="last_name">{{__('data.last')}} {{__('data.name')}}</label>
                                    <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" id="last_name" placeholder="{{__('data.last')}} {{__('data.name')}}">
                                    @error('last_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('data.employee')}} {{__('data.email')}}</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" placeholder="{{__('data.employee')}} {{__('data.email')}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">{{__('data.employee')}} {{__('data.phone')}}</label>
                                    <input type="phone" name="phone" value="{{old('phone')}}" class="form-control" id="phone" placeholder="{{__('data.employee')}} {{__('data.phone')}}">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{__('data.choose')}} {{__('data.company')}}</label>
                                    <select class="custom-select" name="company_id">
                                        <option value="">{{__('data.choose')}} {{__('data.company')}}</option>
                                        @foreach($companies as $company)
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{__('data.submit')}}</button>
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