@section('page-title', trans('gitscrum.welcome-to-gitScrum-step-1'))

@section('header-title', trans('gitscrum.welcome-to') .' ' . trans('GitScrum') . ' - ' .
    $repositories->count() . ' ' . trans('gitscrum.repositories') )

<<<<<<< HEAD
@section('header-subtitle', trans('gitscrum.you-can-import-the-repositories-to-GitScrum') )
=======
@section('breadcrumb')
<div class="nav-wizard">
    <div class="col-lg-6">
        <h3>{{trans('gitscrum.welcome-to')}} {{config('app.name')}}</h3>
    </div>
    <div class="col-lg-6">
        <h3 class="ptn mtn mbn pbn pull-right">{{$repositories->count()}} {{trans('gitscrum.repositories')}}</h3>
    </div>
</div>
@endsection
>>>>>>> upstream/develop

@extends('layouts.master')

@section('content')

<div class="ui last container">
    <div class="ui three steps">
        <div class="active step">
            <div class="content">
                <div class="title">{{trans('gitscrum.step1')}}</div>
                <div class="description">Choose your shipping options</div>
            </div>
        </div>
        <div class="disabled step">
            <div class="content">
                <div class="title">{{trans('gitscrum.step2')}}</div>
                <div class="description">Enter billing information</div>
            </div>
        </div>
        <div class="disabled step">
            <div class="content">
                <div class="title">{{trans('gitscrum.finish')}}</div>
                <div class="description">Review your order details</div>
            </div>
        </div>
    </div>

    <form action="{{route('wizard.step2')}}" method="post">
        {{ csrf_field() }}

        @include('partials.boxes.repositories', ['list'=>$repositories, 'columns'=>$columns])

<<<<<<< HEAD
        <button class="ui button green right">{{trans('gitscrum.confirm-to-add-repositories-into-the')}} <strong>{{trans
        ('GitScrum')
        }}</strong></button>
=======
        <div class="text-center">
            <button class="btn btn-lg btn-success btn-loader">{{trans('gitscrum.confirm-to-add-repositories-into-the')}} <strong>{{config('app.name')
            }}</strong></button>
        </div>
>>>>>>> upstream/develop

    </form>

</div>
@endsection
