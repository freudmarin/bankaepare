@extends('layouts.master')

@section('content')
    <div class="col-12 col-md-9">
        <div class="row">
            <a href="/images/exams/{{ $exam->id }}.jpg">
                <img class="img-responsive"
                     style="margin: 0 auto;width:100%; height:100%;"
                     alt="Vari Lesht" src="/images/exams/{{ $exam->id }}.jpg" />
            </a>
        </div><!--/row-->
    </div><!--/span-->

    <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item active">Solution</a>
            <a href="#" class="list-group-item">Other solution</a>
            <a href="#" class="list-group-item">Earth is flat</a>
        </div>
    </div><!--/span-->
@endsection