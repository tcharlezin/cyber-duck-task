@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__("Show Company")}}</h3>
                </div>

                {!! Form::model($company, ["id" => "frmShowCompany"]) !!}

                    <div class="box-body">
                        @include("manager.company._form")
                    </div>

                    <div class="box-footer">
                        <a href="{{route("manager.company.index")}}" class="btn btn-default">{{__("Cancel")}}</a>
                    </div>

                    @push("scripts")
                    <script>
                        $("#frmShowCompany input").each(function(index, item)
                        {
                            $(item).prop("readonly", true);
                        });

                        $("#divLogo").fadeOut();
                    </script>
                    @endpush

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection