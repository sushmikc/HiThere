@extends('home')
@section('group')

<div class="card">
    <div class="card-header" style="background-color: #77BEF0">
        {{ $group->name }}
    </div>

    <div class="card-body" style="height: 370px; overflow-y: scroll; padding:3; background-color: rgba(0, 0, 0, 0.03)">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!--
          messages      
        -->
        @foreach($group->messages as $message)
            <div class="row p-3 m-2 rounded" style="{{ $message->sender->id == auth()->user()->id ? 'background-color: #CAE4F6':'background-color: #E1E0E0' }}">
                <div class="col px-0">
                    <div class="p1 text-secondary" >
                        {{$message->sender->name}}
                        <span style="float:right;">
                            {{$message->created_at->diffForHumans()}}
                        </span>
                    </div>
                    <div>
                        {{$message->content}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!--
      Enetr message and send          
    -->
    <div class="card-bottom"  style="background-color: rgba(0, 0, 0, 0.03)">
        <form class="row my-2 px-4" method="POST" action="{{ route('messages.store') }}">
            @csrf 
            <input name="group_id" type="text" value="{{ $group->id }}" hidden>
            <input name="message" class="col-9 form-control" type="text" placeholder="Enter message">
            <button class="col-2 btn btn-primary ml-3" type="submit">Send</button>
        </form> 
    </div>
</div>

@endsection