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
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    <p style = "text-align:center;">Hey!</p>
                    <body>
                        <button class="button" class= "text-center">Send</button>
                    </body>
=======
                    <!--
                    You are logged in as {{ $userName }}!
                    -->
                    Hi {{ $userName }}!
>>>>>>> 4eb72782ad4a8bbb96fc8d8721c25d4852852ff5
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class= "row no-gutters">
        <div class= "col-md-4">
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div>
<style>

</style>
@endsection
