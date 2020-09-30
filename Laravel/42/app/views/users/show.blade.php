@extends('users.layout')


@section('content')

<section>
    <div class="container">
        <p>ここは本文のコンテンツ</p>

        <div class="card-deck">
            <div class="card col-3">
                <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">test</p>
                    <p class="card-text">email : <small class="text-muted">{{ $user->email }}</small></p>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">編集</button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">編集</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{route('users.update', $user->id)}}">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="Name" class="col-form-label">Name : {{$user->name}} </label>
                        <input type="Name" class="form-control" id="Name" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4" class="col-form-label">Email : {{ $user->email }}</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4" class="col-form-label">確認Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                    </div>
                </div>
                <input name="_method" type="hidden" value="PUT">
                {{ Form::token() }}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>

            </div>
        </div>
        </div>
    </div>

</section>

@stop
