@section('page-title',  trans('gitscrum.welcome-to-gitScrum-step-2'))

@section('header-title', trans('gitscrum.welcome-to') .' ' . trans('GitScrum') . ' - ' .
    $repositories->count() . ' ' . trans('gitscrum.repositories') )

@if($repositories->count())
    @section('header-subtitle', trans('Congratulations') . '! ' .
    trans('gitscrum.you-have-successfully-added-repositories-for') . ' ' . trans('GitScrum'))
@else
    @section('header-subtitle', trans('gitscrum.choose-at-least-one-repository') . ' ' .
    trans('gitscrum.you-can-click').'<a href="'.route('wizard.step1').'">' . trans('gitscrum.here').'</a>' .
    trans('gitscrum.to-try-again'))
@endif

@extends('layouts.master')

<<<<<<< HEAD
@section('content')

<div class="ui last container">
    <div class="ui three steps">
        <div class=" step">
            <div class="content">
                <div class="title">{{trans('gitscrum.step1')}}</div>
                <div class="description">Choose your shipping options</div>
            </div>
        </div>
        <div class="active step">
            <div class="content">
                <div class="title">{{trans('gitscrum.step2')}}</div>
                <div class="description">Enter billing information</div>
            </div>
=======
@section('breadcrumb')
    <div class="nav-wizard">
        <div class="col-lg-6">
            <h3>{{trans('gitscrum.welcome-to')}} {{config('app.name')}}</h3>
>>>>>>> upstream/develop
        </div>
        <div class="disabled step">
            <div class="content">
                <div class="title">{{trans('gitscrum.finish')}}</div>
                <div class="description">Review your order details</div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <div class="col-lg-12">
=======
@section('main-title')
<p class="font-bold text-center">
    @if($repositories->count())
        {{trans('Congratulations')}}.
        <span>{{trans('gitscrum.you-have-successfully-added-repositories-for')}} {{config('app.name')}}</span>
    @else
        {{trans('gitscrum.choose-at-least-one-repository')}}.
        <span>{{trans('gitscrum.you-can-click')}} <a href="{{route('wizard.step1')}}">{{trans('gitscrum.here')}}</a>
            {{trans('gitscrum.to-try-again')}}</span>
    @endif
</p>
@endsection
>>>>>>> upstream/develop

    @include('partials.boxes.repositories', ['list'=>$repositories])

    <div class="padding-top-20px">
        <div class="ui middle aligned center aligned grid" >

            <div class="row">
                <div class="column main-column">

<<<<<<< HEAD
                    <div class="ui two column grid">
                        @if(count($repositories))
                        <div class="column button-column">
                            <a href="{{route('wizard.step3')}}" class="ui huge left labeled icon button">
                                {{trans('gitscrum.import-my')}}
                                <strong>{{Auth::user()->provider}} {{trans('gitscrum.issues')}}</strong>
                                <i class="browser icon"></i>
                            </a>
                        </div>
                        @endif
                        <div class="divider-column">
                            <div class="ui vertical divider">
                                Or
                            </div>
                        </div>
                        <div class="column button-column">
                            <a href="{{route('product_backlogs.index')}}" class="ui huge right labeled icon button">
                                {{trans('gitscrum.continue-using')}}
                                <strong>{{trans('GitScrum')}}</strong>
                                <i class="browser icon"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
=======
        @if(count($repositories))
        <a href="{{route('wizard.step3')}}" class="btn btn-lg btn-success btn-loader">{{trans('gitscrum.import-my')}}
            <strong>{{Auth::user()->provider}} {{trans('gitscrum.issues')}}</strong></a>
        <span>&nbsp;&nbsp;&nbsp;<strong>{{trans('gitscrum.or')}}</strong>&nbsp;&nbsp;&nbsp;</span>
        @endif
        <a href="{{route('product_backlogs.index')}}" class="btn btn-lg btn-default">{{trans('gitscrum.continue-using')}}
            <strong>{{config('app.name')}}</strong></a>
>>>>>>> upstream/develop
    </div>

</div>
@endsection
