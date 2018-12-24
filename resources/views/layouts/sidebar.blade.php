<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset("img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">{{__("MAIN NAVIGATION")}}</li>

    <li class="{{\Illuminate\Support\Facades\Request::is("home") ? "active" : "" }}">
        <a href="{{route("home")}}"><i class="fa fa-line-chart"></i> <span>{{__("Dashboard")}}</span></a>
    </li>

    @include("layouts.menu.manager")

</ul>