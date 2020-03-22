@extends('layouts.app')

@section('title', __('Add Department'))

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
          
            <form class="form-horizontal" method="POST" id="addSectionForm" action="{{ url('school/add-department') }}">
                {{ csrf_field() }}

             

                <div class="form-group{{ $errors->has('department_name') ? ' has-error' : '' }}">
                    <label for="department_name" class="col-md-4 control-label">* @lang('Department')</label>

                    <div class="col-md-6">
                        <input id="department_name" type="text" class="form-control" name="department_name" value="{{ old('department_name') }}"
                            required>

                        @if ($errors->has('department_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('department_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            
                

                
            

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" id="addDepartmentBtn" class="btn btn-primary">
                            @lang('Save')
                        </button>
                    </div>
                </div>
                
            </form>
          </div>
    </div>
</div>
@endsection
