@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Company")}}
        <small>{{__("Updating a record")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-industry"></i> {{__("Company")}}</a></li>
        <li class="active">{{__("Edit")}}</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__("Edit Company")}}</h3>
                </div>

                {!! Form::model($company, ['route' => ["manager.company.update", $company->id], "enctype" => "multipart/form-data"]) !!}

                    {{ method_field('PUT') }}

                    <div class="box-body">
                        @include("manager.company._form")
                    </div>

                    <div class="box-footer">
                        <a href="{{route("manager.company.index")}}" class="btn btn-default">{{__("Cancel")}}</a>
                        <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection