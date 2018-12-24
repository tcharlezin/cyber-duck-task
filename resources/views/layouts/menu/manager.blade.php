<li class="header">{{__("MANAGER")}}</li>

<li class="{{\Illuminate\Support\Facades\Request::is("manager/company*") ? "active" : "" }}">
    <a href="{{route("manager.company.index")}}"><i class="fa fa-industry"></i> <span>{{__("Company")}}</span></a>
</li>
<li class="{{\Illuminate\Support\Facades\Request::is("manager/employee*") ? "active" : "" }}">
    <a href="{{route("manager.employee.index")}}"><i class="fa fa-users"></i> <span>{{__("Employee")}}</span></a>
</li>