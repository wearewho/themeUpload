@extends('layouts.app')

@section('content')   

    {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('global.app_edit') @lang('global.roles.title')</h3>
        </div>
        
        <div class="box-body">     
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('abilities', 'Abilities', ['class' => 'control-label']) !!}
                    {!! Form::select('abilities[]', $abilities, old('abilities') ? old('abilities') : $role->getAbilities()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('abilities'))
                        <p class="help-block">
                            {{ $errors->first('abilities') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>    
        
    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop

