@extends('layouts.admin')
@section('title', 'addheader')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3> Add Header </h3>
        </div>
        <div class="card-body">
            <form action="{{route('addheader')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="freeshipping">Free Shipping</label>
                    <input name="freeshipping" value="{{$editheader->freeshipping}}" type="text" class="form-control form-control-md"
                        id="freeshipping" placeholder=" Free Shipping for all Order of $99" required>

                </div>
                <div class="form-group">
                    <label for="facebook">Facebook URL:</label>
                    <input type="url" value="{{$editheader->facebook}}" class="form-control form-control-md" id="facebook" name="facebook" required>
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter URL:</label>
                    <input type="url" value="{{$editheader->twitter}}" class="form-control form-control-md" id="twitter" name="twitter" required>
                </div>
                <div class="form-group">
                    <label for="linkedin">Linkdin URL:</label>
                    <input type="url" value="{{$editheader->linkdin}}" class="form-control form-control-md" id="linkedin" name="linkedin"required>
                </div>
                <div class="form-group">
                    <label for="pinterest">Pinterest URL:</label>
                    <input type="url" value="{{$editheader->pinterest}}" class="form-control form-control-md" id="pinterest" name="pinterest" required>
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Image Logo</label>
                    <div class="custom-file">
                        <input name="image" value="{{$editheader->image}}" type="file" class="custom-file-input" id="validatedCustomFile">

                        <input type="hidden" name="old_image" value="{{$editheader->image}}">

                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <img class="mt-3" src="{{ asset('storage/product-image/'.$editheader->image) }}" widh="80"
                    height="80">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>




</div>




@endsection
