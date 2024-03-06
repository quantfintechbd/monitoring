@extends('Auth::layouts.auth')

@section('content')
    <div class="text-center">
        <h5 class="mb-0">{{ $pageName ?? "Register" }}</h5>
        <p class="text-muted mt-2">{{ $subTitle ?? "Get your free UFTCL account now." }}</p>
        <p class="text-muted mt-2"> 
            @include('Main::widgets.message.alert')
        </p>
    </div>
    {{ Form::model(request(), ['url' => route('register.save'), 'class' => 'mt-4 pt-2', 'method'=>'post', 'novalidate']) }}
        <div class="mb-3">
            {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Enter Name', 'required']) !!}
            @error('name')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Enter Email Address', 'required']) !!}
            @error('email')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            {!! Form::label('mobile', 'Mobile Number', ['class' => 'form-label']) !!}
            {!! Form::text('mobile', null, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Enter Mobile Number', 'required']) !!}
            @error('mobile')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            {!! Form::label('nid', 'NID', ['class' => 'form-label']) !!}
            {!! Form::text('nid', null, ['class' => 'form-control' . ($errors->has('nid') ? ' is-invalid' : ''), 'placeholder' => 'NID Number', 'required']) !!}
            @error('nid')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            {!! Form::label('date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
            <div class="input-group">
                {{ Form::text('date_of_birth', null, ['class' => 'form-control datepicker ' . ($errors->has('date_of_birth') ? ' is-invalid' : ''), "placeholder" => "Enter Date of Birth", "id" => "date_of_birth", "aria-label"=>"date_of_birth", "aria-describedby"=>"date_of_birth-addon", "autocomplete"=>"off"]) }}
                <button class="btn btn-light shadow-none ms-0 date_of_birth_addon" type="button" id="date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
            </div>

            @error('date_of_birth')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-4">
            <p class="mb-0">By registering you agree to the UFTCL <a href="#" class="text-info">Terms of Use</a></p>
        </div>
        
        <div class="mb-3">
            {!! Form::submit('Signup', ['class' => 'btn btn-info w-100 waves-effect waves-light']) !!}
        </div>
    {{ Form::close() }} 

    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Already have an account ? <a href="{{ route("login") }}" class="text-info fw-semibold"> Login </a> </p>
    </div>
@endsection


@push("styles")
<!-- daterangepicker  -->
<link href="{{ asset('assets/libs/daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" />
@endpush

@push("scripts") 
{{-- moment js --}}
<script src="{{ asset('assets/libs/momentjs/momentjs.min.js') }}"></script> 
<!-- daterangepicker  -->
<script src="{{ asset('assets/libs/daterangepicker/daterangepicker.min.js') }}"></script> 
<script>
$(document).ready(function() {
    // datepicker
    $('.datepicker').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,  
        locale: {
            format: 'YYYY-MM-DD',
            cancelLabel: 'Clear'
        }
    });
    $('.datepicker').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('.datepicker').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    }); 
})
</script>
@endpush