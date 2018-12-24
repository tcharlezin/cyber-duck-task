<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', __('Name:'), ['class'=>'control-label']) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => __("Name of the company"), "required" => true]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', __('E-mail:'), ['class'=>'control-label']) !!}
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => __("E-mail of the company")]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('website', __('Website:'), ['class'=>'control-label']) !!}
            {!! Form::text('website', null, ['class'=>'form-control', 'placeholder' => __("Website of the company")]) !!}
        </div>
    </div>
    <div class="col-md-6">

        <div class="row" id="divLogo">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('logo', __('Logo:'), ['class'=>'control-label']) }}
                    {{ Form::file('logo', array('id'=>'' ,'class'=>'')) }}

                    <p class="help-block">
                        {{__("Select the logo of company")}}<br/>
                        (min 100x100).
                    </p>
                </div>
            </div>
        </div>
        @if(isset($company) && ! is_null($company->logo))
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset($company->logo)}}" style="max-width: 100%">
                </div>
            </div>
        @endif

    </div>
</div>
