<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalConfirmDestroy"
   onclick="SetModelToDestroy({{$model->id}});">
    <i class="fa fa-trash"></i>
</a>

{!! Form::model($model, ['route' => [$route, $model->id], 'id'=>'formDestroyRegister'.$model->id ]) !!}

    {{ method_field('DELETE') }}

{!! Form::close() !!}