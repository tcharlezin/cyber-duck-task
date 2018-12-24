@extends('layouts.app')

@section("title-page")
    <h1>
        {{__("Employees")}}
        <small>{{__("Check information about employees")}}</small>
    </h1>
@endsection

@section("breadcrumb")
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-users"></i> {{__("Employee")}}</a></li>
    </ol>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="{{route("manager.employee.create")}}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{__("New register")}}
                    </a>
                </div>

                <div class="box-body">

                    @if($employees->isEmpty())
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
                                    <th>{{__("First name")}}</th>
                                    <th>{{__("Last name")}}</th>
                                    <th>{{__("Company")}}</th>
                                    <th>{{__("E-mail")}}</th>
                                    <th>{{__("Phone")}}</th>
                                    <th class="text-center">{{__("Action")}}</th>
                                </tr>

                                @foreach($employees as $employee)
                                    <tr>

                                        <td>{{$employee->id}}.</td>
                                        <td>{{$employee->first_name}}</td>
                                        <td>{{$employee->last_name}}</td>
                                        <td>
                                            @if($employee->hasCompany())
                                                {{$employee->company->name}}
                                            @endif
                                        </td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->phone}}</td>

                                        <td class="text-center">

                                            <a href="{{route("manager.employee.show", $employee->id)}}" class="btn btn-sm btn-default">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{route("manager.employee.edit", $employee->id)}}" class="btn btn-sm btn-info">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            @include("component.list.destroy-button", ["model" => $employee, "route" => "manager.employee.destroy"])

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
                        {{$employees->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("component.list.modal-delete-register")

@endsection
