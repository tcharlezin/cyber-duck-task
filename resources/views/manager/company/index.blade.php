@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Companies")}}
        <small>{{__("Check information about companies")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-industry"></i> {{__("Company")}}</a></li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="{{route("manager.company.create")}}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{__("New register")}}
                    </a>
                </div>

                <div class="box-body">

                    @if($companies->isEmpty())
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> {{__("Database clean for this!")}}</h4>
                            {{__("Start creating some records on")}} "<b>{{__("New register")}}</b>"...
                        </div>
                    @else

                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>{{__("Name")}}</th>
                                <th>{{__("E-mail")}}</th>
                                <th class="text-center">{{__("Logo")}}</th>
                                <th class="text-center">{{__("Employees")}}</th>
                                <th class="text-center">{{__("Action")}}</th>
                            </tr>

                            @foreach($companies as $company)
                                <tr>

                                    <td>{{$company->id}}.</td>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->email}}</td>
                                    <td class="text-center">
                                        @if(!is_null($company->logo))
                                            <a href="{{asset($company->logo)}}" target="_blank">
                                                <i class="fa fa-camera fa-2x"></i>
                                            </a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($company->employees->isEmpty())
                                            -
                                        @else
                                            <a href="#" data-toggle="modal" data-target="#modalEmployeesCompany{{$company->id}}">
                                                <i class="fa {{ $company->employees->count() > 1 ? "fa-users" : "fa-user" }} fa-2x"></i>
                                                ({{$company->employees->count()}})
                                            </a>
                                        @endif
                                    </td>

                                    <td class="text-center">

                                        <a href="{{route("manager.company.show", $company->id)}}"
                                           class="btn btn-sm btn-default">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{route("manager.company.edit", $company->id)}}"
                                           class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        @include("component.list.destroy-button", ["model" => $company, "route" => "manager.company.destroy"])

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pagination pagination-sm no-margin pull-right">
                        {{$companies->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include("component.list.modal-delete-register")

    @foreach($companies as $company)
        @include("manager.company.component.modal-employees")
    @endforeach

@endsection
