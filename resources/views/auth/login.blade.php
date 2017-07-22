@section('page-title',  trans('gitscrum.title-login'))

@extends('layouts.master', ['hideNavbar' => true, 'bodyClass' => 'body-login'])

@section('content')
<script async defer src="https://buttons.github.io/buttons.js"></script>
<<<<<<< HEAD
<a href="https://github.com/renatomarinho/laravel-gitscrum"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>

<div class="padding-top-15">

    <div class="ui middle aligned center aligned grid" >

        <div class="row">
            <h2>{{trans('gitscrum.welcome-to')}} <strong>GitScrum</strong></h2>
        </div>

        <div class="row">
            <div class="column main-column">

                <div class="ui two column grid">
                    <div class="column button-column">
                        <a href="{{route('auth.provider', ['provider' => 'github'])}}" class="ui huge left labeled icon button">
                            {{trans('GitHub')}}
                            <i class="left github alternate icon"></i>
                        </a>
                    </div>
                    <div class="divider-column">
                        <div class="ui vertical divider">
                            Or
                        </div>
                    </div>
                    <div class="column button-column">
                        <a href="{{route('auth.provider', ['provider' => 'gitlab'])}}" class="ui huge right labeled icon button">
                            {{trans('GitLab')}}
                            <i class="right gitlab icon"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <p>The GitScrum is licensed under the
                <a href="https://goo.gl/ZAubpf" target="_blank">MIT license</a></p>
=======

<a href="https://github.com/GitScrum-Community/laravel-gitscrum"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="middle-box text-center loginscreen">
            <h5 class="lead">{{trans('gitscrum.welcome-to')}} <strong>GitScrum</strong></h5>

            <h5>{{trans('gitscrum.authentication')}}</h5>
            <a href="{{route('auth.provider', ['provider' => 'github'])}}" class="btn btn-lg btn-default btn-loader">
                    <i class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;<strong>GitHub</strong>
            </a>

            <a href="{{route('auth.provider', ['provider' => 'gitlab'])}}" class="btn btn-lg btn-default btn-loader">
                    <i class="fa fa-gitlab" aria-hidden="true"></i>&nbsp; <strong>GitLab</strong>
            </a>

            <p><a href="https://gitscrum.com/community" target="_blank"><strong>GitScrum</strong> Community</a></p>
            <p class="small">The GitScrum Community is licensed under the
            <a href="https://github.com/GitScrum-Community/laravel-gitscrum/blob/master/LICENSE.md" target="_blank">MIT license</a></p>
>>>>>>> upstream/develop
        </div>

    </div>

</div>
@endsection
