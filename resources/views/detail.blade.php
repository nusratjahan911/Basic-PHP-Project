@extends('master')

@section('title')
    Blog Details page
@endsection

@section('body')
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="{{asset($blog['image'])}}" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1>{{($blog['title'])}}</h1>
                    <p>{{($blog['description'])}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
