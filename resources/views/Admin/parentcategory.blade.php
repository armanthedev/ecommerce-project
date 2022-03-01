@extends('layouts.admin')
@section('title', 'parentcatagory')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Parent Catagory List</h3>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">ID</th>
                        <th class="text-info">Caragory Name</th>
                        <th class="text-info">Status</th>
                        <th class="text-info">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($parentcategory as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->c_name}}</td>
                        <td>{{$value->status}}</td>
                        <td> <button class="btn btn-success shadow" type="submit"><i class="far fa-check-circle"></i></button>

                           <a href="{{route('editparent',['id'=>$value->id])}}"><button type="button" class="btn btn-primary shadow" type="submit" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fas fa-pen-alt"></i>
                            </button></a>
                            <button class="btn btn-danger shadow" type="submit"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>



@endsection
