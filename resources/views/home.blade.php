@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Dashboard")}}
        <small>{{__("resume of the CRM")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> {{__("Dashboard")}}</a></li>
    </ol>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-blue-gradient">
                <div class="inner">
                    <h3>{{\App\Models\Company::count()}}</h3>
                    <p>{{__("Companies")}}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-industry"></i>
                </div>
                <a href="{{route("manager.company.index")}}" class="small-box-footer">
                    {{__("More info")}} <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="small-box bg-blue-gradient">
                <div class="inner">
                    <h3>{{\App\Models\Employee::count()}}</h3>
                    <p>{{__("Employees")}}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{route("manager.employee.index")}}" class="small-box-footer">
                    {{__("More info")}} <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
