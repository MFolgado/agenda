@extends('layouts.app')

@section('content-body')

    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edita usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{route('users.update', $user->id)}}">

                <div class="box-body">

                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                        <label for="name" class="col-md-12 ">Name</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                        <label for="email" class="col-md-12 ">E-Mail Address</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">


                        <div class="col-md-6">
                            <label for="password" >Password</label>
                            <input id="password" type="password" class="form-control" name="password" >

                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password-confirm" >Confirm Password</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 pull-right">
                            <button type="submit" class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection