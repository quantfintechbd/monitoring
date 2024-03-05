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
                        <div class="col-md-3 mb-3">
                            {!! Form::label('username', 'User Name ', ['class' => 'form-label ']) !!}
                            {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'User Name']) !!}
                        </div>

                        <div class="col-md-3 mb-3">
                            {!! Form::label('is_pretend', 'Is Pretend', ['class' => 'form-label']) !!}
                            {!! Form::select('is_pretend', ['Yes' => 'Yes','No' => 'No'], null, [
                            'class' => 'form-control select2',
                            'placeholder' => 'Select Pretend Type',
                            ]) !!}
                        </div>

                        <div class="col-md-3 mb-3">
                            {!! Form::label('start_date', 'Start Date ', ['class' => 'form-label ']) !!}
                            {!! Form::text('start_date', null, ['class' => 'form-control datepicker', 'placeholder' => 'Start Date', 'autocomplete'=>'off']) !!}
                        </div>
                        <div class="col-md-3 mb-3">
                            {!! Form::label('end_date', 'End Date ', ['class' => 'form-label ']) !!}
                            {!! Form::text('end_date', null, ['class' => 'form-control datepicker', 'placeholder' => 'End Date', 'autocomplete'=>'off']) !!}
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
