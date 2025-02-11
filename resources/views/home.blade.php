
@extends('master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="image/img-3.jpg " alt=""/>
                            <div class="card-body">
                                <h4>{{ $blog['title'] }}</h4>
                                <p>{{ $blog['description'] }}</p>
                                <a href="{{route('detail', ['id' => $blog['id']])}}" class="btn btn-outline-success">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
