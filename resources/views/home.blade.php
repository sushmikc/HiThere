@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify--center">
        <div class="col-md-3">
            <div>
            <!--
              Add group  
            -->
            <form class="row my-2 px-3" method="POST" action="{{ route('groups.store') }}">
                @csrf
                <input name="name" class="col-9 form-control" type="text" placeholder="New Group" aria-label="Search">
                <button class="col-3 btn btn-outline-primary p-0" type="submit">
                    <i class="fas fa-lg fa-plus-circle"></i>
                </button>
            </form>
            </div>
            <div>
            <!--
               Search group 
            -->
            <form class="row my-2 px-3" method="GET" action="{{ route('home') }}">
                <input name="filter" class="col-9 form-control" type="text" placeholder="Search" aria-label="Search">
                <button class="col-3 btn btn-outline-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            </div>
            <!--<div class="container">-->
              <div class="h-50 d-inline-block" style="width: 255px; padding:0;overflow: auto; background-color: rgba(0, 0, 0, 0.03)">
                    <ul class="list-group" style="height: 700px;">
                        @foreach($groups as $group)
                            <a href="{{ route('groups.show',$group->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                {{ $group->name }}
                                <span class="badge badge-primary badge-pill">{{ count($group->users) }}</span>
                            </a>
                        @endforeach 
                    </ul>
                </div>
            <!--</div>-->
        </div>
        
        <div class="col-md-9">
        
            @yield('group')
        </div>
    </div>
</div>

@endsection
