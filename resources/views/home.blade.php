@extends('layouts.app')


@section('content-head')
    <section class="content-header">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{count(\App\User::all())}}</h3>

                        <p>Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('users.create')}}" class="small-box-footer">Adicionar <i class="fa fa-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{count(\App\User::all())}}</h3>

                        <p>Médicos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('users.create')}}" class="small-box-footer">Adicionar <i class="fa fa-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{count(\App\User::all())}}</h3>

                        <p>Agendamentos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('users.create')}}" class="small-box-footer">Adicionar <i class="fa fa-plus"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{count(\App\User::all())}}</h3>

                        <p>Exames</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('users.create')}}" class="small-box-footer">Adicionar <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content-body')



@endsection
