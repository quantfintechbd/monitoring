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
                                {!! Form::label('username', 'Username') !!}
                                {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 80, 'id' => 'email']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('mobile', 'Mobile') !!}
                                {!! Form::text('mobile', null, ['class' => 'form-control', 'id' => 'mobile']) !!}
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('nid', 'NID') !!}
                                {!! Form::text('nid', null, ['class' => 'form-control', 'id' => 'nid']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', $status, null, ['class' => 'form-control select2', 'id' => 'status', 'placeholder' => 'Select']) !!}
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
