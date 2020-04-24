@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify--center">
        <div class="col-md-3">
            <div class="col-md-8">
                <div class = "add-group">
                    <button type="button" class="btn btn-block btn-sm btn-primary">Create Group</button> 
                </div>
            </div>
            <form class="row my-2 px-3">
                <input class="col-9 form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="col-3 btn btn-outline-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--
                    You are logged in as {{ $userName }}!
                    -->
                    Hi {{ $userName }}!
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
