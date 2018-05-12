@extends('layouts.app')

@section('content')
    <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Home</h5>
                            <div class="card-body">

                                <h5 class="card-title">Welcome</h5>
                                <p class="card-text">Here you can learn how to create Minecraft servers easily and for free and get the best hosting and best education course

                                    And get a MAPS and can publish your server <a href="">Click here </a>
                                    to download the program <a href="">Click here</a> for more information about the program

                                </p>
                                <h5>Posts</h5>
                                <a href="/post/create">Create New Post</a>

                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col-8">
                                @foreach($posts as $post)
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Name</h5>
                                            <div class="card-body">
                                                {{$post->body}}

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col-5">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>










@endsection
