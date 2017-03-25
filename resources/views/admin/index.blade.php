@extends('layouts.app')

@section('content')
    <div class="col-sm-2">
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul id="sidebar" class="list-group">
                <li class="list-group-item" id="admin_profile"><a class="cursor-pointer"  data-link="{{route('profile')}}">Profile<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li class="list-group-item" id="admin_career"><a class="cursor-pointer"  data-link="{{route('career')}}">Career<span class="pull-right hidden-xs showopacity glyphicon glyphicon-briefcase"></span></a></li>
                <li class="list-group-item" id="admin_post" ><a class="cursor-pointer" data-link="{{route('post')}}">Post<span class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
                <li class="list-group-item" id="admin_tag"><a class="cursor-pointer"  data-link="">Tag<span class="pull-right hidden-xs showopacity glyphicon glyphicon-ok"></span></a></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="screenPanel">

        </div>

    </div>

@endsection