@extends('home')

@section('content-head')

    <div class="pull-right">
        <a href="{{route('users.create')}}" class="btn btn-app">
            <i class="fa fa-user-plus"></i> Users
        </a>
    </div>
<div class="clearfix"></div>
@endsection

@section('content-body')

    @foreach($users as $user)
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ mb_strtoupper($user->name) }}</h3>
                <div class="pull-right">

                    <a href="{{route('users.edit', $user->id)}}"> <i class="fa fa-edit"></i> </a>
                    <form action="{{route('users.destroy', $user->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}

                        <button class="" type="submit" style="border: none; color: red;" onclick="confirm('Deseja excluir?')"><i class="fa fa-trash"></i></button>
                    </form>
                    


                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-envelope margin-r-5"></i> E-mail</strong>

                <p class="text-muted">
                    {{ $user->email }}
                </p>

                {{--<hr>--}}

                {{--<strong><i class="fa fa-shield margin-r-5"></i> Papéis </strong>--}}

                {{--<p class="text-muted">Root</p>--}}

                {{--<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>--}}

                {{--<p>--}}
                    {{--<span class="label label-danger">UI Design</span>--}}
                    {{--<span class="label label-success">Coding</span>--}}
                    {{--<span class="label label-info">Javascript</span>--}}
                    {{--<span class="label label-warning">PHP</span>--}}
                    {{--<span class="label label-primary">Node.js</span>--}}
                {{--</p>--}}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    @endforeach

@endsection