@extends('layouts.app')

@section('title', __('Add Class'))

@section('content')
<style>
    #cls-sec .panel{
        margin-bottom: 0%;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
          
            <form class="form-horizontal" method="POST" id="addSectionForm" action="{{ url('school/add-section') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('class_id') ? ' has-error' : '' }}">
                    <label for="class_id" class="col-md-4 control-label">@lang('Class')</label>

                    <div class="col-md-6">
                        <select id="class_id" class="form-control" name="class_id">
                            <option value="">-- Select Class --</option>
                            @foreach($classes as $class)
                        <option value="{{ $class['id'] }}">{{ $class['class_number'] }}</option>
                           @endforeach
                        </select>

                        @if ($errors->has('class_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('class_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('section_number') ? ' has-error' : '' }}">
                    <label for="section_number" class="col-md-4 control-label">* @lang('Section')</label>

                    <div class="col-md-6">
                        <input id="section_number" type="text" class="form-control" name="section_number" value="{{ old('section_number') }}"
                            required>

                        @if ($errors->has('section_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('section_number') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('room_number') ? ' has-error' : '' }}">
                    <label for="room_number" class="col-md-4 control-label">* @lang('Room Number')</label>

                    <div class="col-md-6">
                        <input id="room_number" type="text" class="form-control" name="room_number" value="{{ old('room_number') }}"
                            required>

                        @if ($errors->has('room_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('room_number') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                

                
            

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" id="addClassBtn" class="btn btn-primary">
                            @lang('Save')
                        </button>
                    </div>
                </div>
                
            </form>
          </div>
    </div>
</div>
@endsection
