@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Employees")}}
        <small>{{__("Updating a record")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> {{__("Employee")}}</a></li>
        <li class="active">{{__("Edit")}}</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__("Edit Employee")}}</h3>
                </div>

                {!! Form::model($employee, ['route' => ["manager.employee.update", $employee->id]]) !!}

                    {{ method_field('PUT') }}

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