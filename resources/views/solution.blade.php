@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-12">
        <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">


            <!-- Only if a user is logged in, the upload form is shown -->
            @if (Auth::user())

                <h3>Upload a solution {{ Auth::user()->name }}</h3>
                <h3>{{ $exam->subject->name }}</h3>
                <hr>

                <form action="{{ url('solutions/store') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="row">
                        <input type="hidden" name="exam" value="{{ $exam->id }}">
                        <div class="form-group">
                            <label for="title">Solution Title:</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Solution Image:</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <label for="solution">Solution:</label>
                        <div class="form-group">

                            <textarea name ="notes"  rows="10" name="textsolution"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>


                    @include ('layouts.errors')
                </form>
            @endif

        </div>

    </div><!--/span-->
@endsection
