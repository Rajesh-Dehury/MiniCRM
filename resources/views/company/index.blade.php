@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('data.company')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('data.home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('data.company')}}</li>
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
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>{{__('data.id')}}</th>
                                        <th>{{__('data.logo')}}</th>
                                        <th>{{__('data.name')}}</th>
                                        <th>{{__('data.email')}}</th>
                                        <th>{{__('data.website')}}</th>
                                        <th>{{__('data.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>
                                            <img src="{{asset('storage/'.$c->logo)}}" alt="" style="height: 100px;">
                                        </td>
                                        <td>{{$c->name}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->website}}</td>
                                        <td>
                                            <a href="{{route('admin.company.edit',$c->id)}}" class="btn btn-sm btn-success">{{__('data.edit')}}</a>
                                            <a href="{{route('admin.company.destroy',$c->id)}}" onclick="confirm('Are you sure want to delete?'); event.preventDefault();document.getElementById('delete-form{{$c->id}}').submit();" class="btn btn-sm btn-danger">{{__('data.delete')}}</a>
                                            <form id="delete-form{{$c->id}}" action="{{route('admin.company.destroy',$c->id)}}" method="POST" class="d-none">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{__('data.id')}}</th>
                                        <th>{{__('data.logo')}}</th>
                                        <th>{{__('data.name')}}</th>
                                        <th>{{__('data.email')}}</th>
                                        <th>{{__('data.website')}}</th>
                                        <th>{{__('data.action')}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @push('js')
    <script>
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>
    @endpush
</div>
@endsection