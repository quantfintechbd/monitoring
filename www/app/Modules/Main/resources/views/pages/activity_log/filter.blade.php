<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">Filter</h6>
                    <button class="btn btn-light text-primary d-flex align-items-center px-2" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        <img class="" src="{{ asset('assets/images/icon/arrow-square-down.svg') }}" width="18"
                            alt="">
                    </button>
                </div>
            </div>
            <div class="collapse {{ request()->has('_filter') ? 'show' : '' }} p-3" id="collapseExample">
                <div class="card-body">
                    {!! Form::model(request()->all(), ['method' => 'get']) !!}
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('date_from', 'Date From') !!}
                                {{ Form::text('date_from', null, ['class' => 'form-control datepicker', 'id' => 'date_from', 'placeholder' => 'From Date', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('to_date', 'Date To') !!}
                                {{ Form::text('to_date', null, ['class' => 'form-control datepicker', 'id' => 'to_date', 'placeholder' => 'From Date', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('causer_id', 'Action By') !!}
                                {{ Form::select('causer_id', $users, request('causer_id'), ['id' => 'causer_id', 'class' => 'select2 form-control mb-3 custom-select', 'placeholder' => 'Select User']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('log_name', 'Log Type') !!}
                                {{ Form::select('log_name', $logNames ?? [], request('log_name'), ['id' => 'log_name', 'class' => 'select2 form-control mb-3 custom-select', 'placeholder' => 'Select Log Name']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('subject_type', 'Table') !!}
                                {{ Form::text('subject_type', request('subject_type'), ['id' => 'subject_type', 'class' => 'form-control', 'placeholder' => 'Enter Action Table']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('subject_id', 'Table ID') !!}
                                {{ Form::text('subject_id', request('subject_id'), ['id' => 'subject_id', 'class' => 'form-control', 'placeholder' => 'Enter Action ID']) }}
                            </div>
                        </div> 
                    </div>
                    <br />
                    {!! Form::button('<i class="bi bi-search"></i> Filter', [
                        'type' => 'submit',
                        'name' => '_filter',
                        'class' => 'btn btn-primary ',
                    ]) !!}
                    <a href="{{ url()->current() }}" class="ml-2 text-muted">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
