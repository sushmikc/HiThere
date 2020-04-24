@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class = "add-group">
                <button type="button" class="btn btn-block btn-sm btn-primary">Create Group</button> 
            </div>
            <form class="row my-2 px-3">
                <input class="col-9 form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="col-3 btn btn-outline-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <!--<div class="container">-->
              <div class="h-50 d-inline-block" style="width: 255px; padding:0;overflow: auto; background-color: rgba(0, 0, 0, 0.03)">
                    <ul class="list-group" style="height: 700px;">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            CSE 4322
                            <span class="badge badge-primary badge-pill">14</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            IE 3311
                            <span class="badge badge-primary badge-pill">4</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            SE 5378
                            <span class="badge badge-primary badge-pill">2</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 4221
                            <span class="badge badge-primary badge-pill">11</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 3311
                            <span class="badge badge-primary badge-pill">9</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 3311
                            <span class="badge badge-primary badge-pill">9</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 4283
                            <span class="badge badge-primary badge-pill">9</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 4239
                            <span class="badge badge-primary badge-pill">9</span></a>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            CSE 8549
                            <span class="badge badge-primary badge-pill">9</span></a>
                        </a>
                    </ul>
                </div>
            <!--</div>-->
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Hi {{ $userName }}!</div>

                <div class="card-body" style="height: 420px; padding:3; background-color: rgba(0, 0, 0, 0.03)">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row p-3">
                    hi there</br>
                    how are you?</br>
                    </div>
                    <form class="row my-2 px-3">
                        <input class="col-9 form-control" type="text" placeholder="Enter message">
                        <button class="col-2 btn btn-primary" type="button">Send</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
