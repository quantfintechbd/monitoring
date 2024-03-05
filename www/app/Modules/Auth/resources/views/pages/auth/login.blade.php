@extends('Auth::layouts.auth')

@section('content')
    <div class="text-center">
        <h5 class="mb-0">{{ $pageName ?? "Login" }}</h5>
        <p class="text-muted mt-2"> 
            @include('Main::widgets.message.alert')
        </p>
    </div>

    {{ Form::model(null, ['url' => route('login.auth'), 'class' => 'mt-4 pt-2', 'method'=>'post']) }}
        <div class="mb-3">
            {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
            {!! Form::text('username', old('username'), ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'id' => 'username', 'placeholder' => 'Enter Username']) !!}
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label">Password</label>
                </div>
                <div class="flex-shrink-0">
                    <div class="">
                        {{-- <a href="forget-password.php" class="text-muted">Forgot password?</a> --}}
                    </div>
                </div>
            </div> 
            <div class="input-group auth-pass-inputgroup">
                {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'id' => 'password', "placeholder" => "Enter Password", "id" => "password", "aria-label"=>"Password", "aria-describedby"=>"password-addon"]) }}
                <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
            </div>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> 
        <div class="mb-3">
            <button type="submit" class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>
 
    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Don't have an account ? <a href="{{ route('register') }}" class="text-info fw-semibold"> Signup </a>
        </p>
    </div>
@endsection
