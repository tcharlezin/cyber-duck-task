<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('first_name', __('First name:'), ['class'=>'control-label']) !!}
            {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder' => __("First name of the employee"), "required" => true]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('last_name', __('Last name:'), ['class'=>'control-label']) !!}
            {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder' => __("Last name of the employee"), "required" => true]) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        @if($companies->isEmpty())

            <div class="callout callout-warning">
                <h4>{{__("Warning!")}}</h4>
                <p>{{__("You don't have companies registered.")}}</p>
            </div>

        @else
            <div class="form-group">
                {!! Form::label('company_id', __('Company:'), ['class'=>'control-label']) !!}
                {!! Form::select("company_id",
                                 $companies,
                                 null,
                                 [
                                     'id' => "company_id",
                                     'class'=>'form-control select2',
                                     'placeholder' => __("Select the company"),
                                     'style' => 'width: 100%'
                                 ]) !!}
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', __('E-mail:'), ['class'=>'control-label']) !!}
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => __("E-mail of the employee")]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('phone', __('Phone:'), ['class'=>'control-label']) !!}<br/>
            {!! Form::text('phone', null, ['class'=>'form-control', "id" => "phone"]) !!}


        </div>
    </div>
</div>
