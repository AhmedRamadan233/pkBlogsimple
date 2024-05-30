@extends('master.master')

@section('title', '')



@section('content')
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Show Post
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>

                                <h5>{{ $post->title }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="descriptions">Descriptions</label>
                                <h5>{{ $post->descriptions }}</h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
