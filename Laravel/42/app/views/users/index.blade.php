@extends('users.layout')


@section('content')

<section>
    <div class="container">
        <p>ここは本文のコンテンツ</p>

        <div class="card-deck row u-Below-3">
            @foreach ($users as $user)
            <div class="col-3">
                <div class="card">
                    <div class="card-body c-Card">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">test</p>
                        <p class="card-text">email : <small class="text-muted">{{ $user->email }}</small></p>
                        <a class="a-Log" href="{{route('users.show', $user->id);}}">&times;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<section>
    <div class="container">
        <p>ここは本文のコンテンツ</p>
    </div>
</section>
<section>
    <div class="container">
        <p>ここは本文のコンテンツ</p>
    </div>
</section>
<section>
    <div class="container">
        <p>ここは本文のコンテンツ</p>
    </div>
</section>

@stop
