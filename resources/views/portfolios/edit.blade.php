@extends('layouts.app')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
            </nav>

            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        There's some error(s):
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Portfolio</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="{{ route('portfolios.update', $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-12">
                                <label for="inputTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title"
                                    value="{{ $data->title }}">
                            </div>
                            <div class="col-12">
                                <label for="inputDesc" class="form-label">Description</label>
                                <input class="form-control" name="description"
                                    placeholder="Add description to your portfolio" value="{{ $data->description }}">
                            </div>
                            <div class="col-12">
                                <label for="inputNumber" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image_file">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a type="cancel" href="{{ route('portfolios.index') }}"
                                    class="btn btn-danger ml-2">Cancel</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

    </main>
@endsection
