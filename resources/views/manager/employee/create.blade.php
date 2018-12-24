@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Employees")}}
        <small>{{__("Creating a new record")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> {{__("Employee")}}</a></li>
        <li class="active">{{__("Create")}}</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__("Create Employee")}}</h3>
                </div>

                {!! Form::open(['route'=>"manager.employee.store"]) !!}
                    <div class="box-body">
                        @include("manager.employee._form")
                    </div>

                    <div class="box-footer">
                        <a href="{{route("manager.employee.index")}}" class="btn btn-default">{{__("Cancel")}}</a>
                        <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
