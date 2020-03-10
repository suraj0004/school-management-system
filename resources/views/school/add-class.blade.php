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
            
            <form class="form-horizontal" method="POST" id="addClassForm" action="{{ url('school/add-class') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('class_number') ? ' has-error' : '' }}">
                    <label for="class_number" class="col-md-4 control-label">* @lang('Class')</label>

                    <div class="col-md-6">
                        <input id="class_number" type="text" class="form-control" name="class_number" value="{{ old('class_number') }}"
                            required>

                        @if ($errors->has('class_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('class_number') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                

                
                <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">
                    <label for="group" class="col-md-4 control-label">@lang('Group')</label>

                    <div class="col-md-6">
                        <select id="group" class="form-control" name="group">
                            <option value="">None</option>
                            <option value="science">Science</option>
                            <option value="commerce"> Commerce</option>
                            <option value="arts">Arts</option>
                        </select>

                        @if ($errors->has('group'))
                        <span class="help-block">
                            <strong>{{ $errors->first('group') }}</strong>
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
