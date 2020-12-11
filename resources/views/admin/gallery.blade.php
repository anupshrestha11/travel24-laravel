@extends('admin.layouts.mainlayout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Gallery Mangement</h1>

    <div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



        <form method="post" action="{{route('admin.addToGallery')}}" enctype="multipart/form-data">

            @csrf
            <div class="bg-white p-4 border">
                <div class="form-group">
                    <input type="file" accept="image/png, image/jpeg" name="images[]" multiple class="fotm-control-file">
                </div>
                <button class="btn btn-info">Upload</button>
            </div>
        </form>
    </div>
    <div>

        <h3 class="mt-2">Images</h3>
        <div class="row">
            @foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-sm-1 ">
                <img src="{{ asset('gallery/'.$image) }}" alt="" class="w-100 p-2">
            </div>
            @endforeach

        </div>

    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@endsection

<!-- Footer -->
