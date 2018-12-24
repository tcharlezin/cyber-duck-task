<div class="modal fade" id="modalEmployeesCompany{{$company->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">{{__("Employees of")}} {{ $company->name }}</h4>
            </div>
            <div class="modal-body">

                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>{{__("Created at")}}</th>
                            <th>{{__("User")}}</th>
                            <th class="text-center">{{__("Actions")}}</th>
                        </tr>

                        @foreach($company->employees as $employee)
                            <tr>
                                <td>{{$employee->created_at}}</td>
                                <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                                <td class="text-center">
                                    <a href="{{route("manager.employee.show", $employee->id)}}"
                                       class="btn btn-sm btn-default">
                                        {{__("More Info")}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{__("Close")}}</button>
            </div>
        </div>
    </div>
</div>