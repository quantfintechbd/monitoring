<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">Filter</h6>
                    <button class="btn btn-light text-primary d-flex align-items-center px-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <img class="" src="{{ asset('assets/images/icon/arrow-square-down.svg') }}" width="18" alt="">
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
                                <div class="form-group mb-2">
                                    {!! Form::label('broker', 'Broker') !!}
                                    {!! Form::select('broker', getBrokerList(), null, ['class' => 'form-control select2', 'id' => 'broker', 'placeholder' => 'Select Broker']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('environment', 'Environment') !!}
                                {!! Form::select('environment', getEnvironemts(), null, ['class' => 'form-control select2', 'id' => 'environment', 'placeholder' => 'Select Environment']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('level', 'Log Type') !!}
                                {!! Form::select('level', getLogTypes(), null, ['class' => 'form-control select2', 'id' => 'level', 'placeholder' => 'Select Environment']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('source', 'Source') !!}
                                {!! Form::text('source', null, ['class' => 'form-control', 'id' => 'source']) !!}
                            </div>
                        </div>
                    </div>
                    <br/>
                    {!! Form::button('<i class="bi bi-search"></i> Filter', ['type' => 'submit', 'name' => '_filter', 'class' => 'btn btn-primary ']) !!}
                    <a href="{{ url()->current() }}" class="ml-2 text-muted">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
