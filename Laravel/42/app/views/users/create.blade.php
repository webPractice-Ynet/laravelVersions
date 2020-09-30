@extends('users.layout')


@section('content')

<section>
    <div class="container">
        <form method="POST" action="{{route('users.store')}}">
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="Name">Name</label>
                  <input type="Name" class="form-control" id="Name" placeholder="Name" name="name">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  name="email">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          {{ Form::token() }}
          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
    </div>
</section>

@stop
