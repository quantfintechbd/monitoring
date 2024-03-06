<div class="card ">
    <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
        <h4 class="card-title mb-0">Authorize</h4>
    </div>

    {!! Form::model($authInfo, ['route' => 'bo-account.authorize-information.store', 'method' => 'POST', 'id' => 'autorize-info-frm']) !!}
    {{ Form::hidden('user_id', request()->id) }}
    
    <div class="card-body">
        <div class="row p-3">
            <div class="col-md-3 mb-2">
                {!! Form::label('auth_courtesy_title', 'Courtesy Title', ['class' => 'form-label']) !!}
                {!! Form::select('courtesy_title', $curtesy, null, [
                    'class' => 'form-control select2',
                    'id'   => 'auth_courtesy_title',
                    'maxlength' => 10,
                    'placeholder' => 'Select',
                ]) !!}
            </div>
            <div class="col-md-3 mb-2">
                {!! Form::label('firstname', 'First Name', ['class' => 'form-label']) !!}
                {!! Form::text('firstname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter First Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('lastname', 'Last Name', ['class' => 'form-label']) !!}
                {!! Form::text('lastname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Last Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('occupation', 'Occupation', ['class' => 'form-label']) !!}
                {!! Form::text('occupation', null, ['class' => 'form-control', 'maxlength' => 64, 'placeholder' => 'Enter Occupation']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
                <div class="input-group">
                    {{ Form::text('date_of_birth', null, ["class" => "form-control datepicker", "placeholder" => "Enter Date of Birth", "id" => "date_of_birth", "aria-label"=>"date_of_birth", "aria-describedby"=>"date_of_birth-addon", "autocomplete"=>"off"]) }}
                    <button class="btn btn-light shadow-none ms-0 date_of_birth_addon" type="button" id="date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('nid', 'NID', ['class' => 'form-label']) !!}
                {!! Form::text('nid', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter NID']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('father_name', 'Father\'s Name', ['class' => 'form-label']) !!}
                {!! Form::text('father_name', null, ['class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Enter Father Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('mother_name', 'Mother\'s Name', ['class' => 'form-label']) !!}
                {!! Form::text('mother_name', null, ['class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Enter Mother Name']) !!}
            </div>

            <div class="col-md-12 mb-2">
                {!! Form::label('address', 'Address', ['class' => 'form-label']) !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 90, 'placeholder' => 'Enter Address']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('city', 'City', ['class' => 'form-label']) !!}
                {!! Form::text('city', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter City']) !!}
            </div>
            <div class="col-md-3 mb-2">
                {!! Form::label('post_code', 'Post Code', ['class' => 'form-label']) !!}
                {!! Form::text('post_code', null, ['class' => 'form-control', 'maxlength' => 10, 'placeholder' => 'Enter Post Code']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('division', 'Division', ['class' => 'form-label']) !!}
                {!! Form::text('division', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter Division']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('auth_country', 'Country', ['class' => 'form-label']) !!}
                {!! Form::select('country', ($country ?? []), null, ['class' => 'form-control select2', 'id'=>'auth_country', 'placeholder' => 'Select Country']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 80, 'placeholder' => 'Enter Email Address']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('mobile', 'Mobile', ['class' => 'form-label']) !!}
                {!! Form::text('mobile', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Mobile Number']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('telephone', 'Telephone', ['class' => 'form-label']) !!}
                {!! Form::text('telephone', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Telephone']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('fax', 'Fax', ['class' => 'form-label']) !!}
                {!! Form::text('fax', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Fax']) !!}
            </div>
        </div>
    </div>

    {{-- Button --}}
    <div class="card-footer text-right">
        <ul class="pager wizard twitter-bs-wizard-pager-link p-2">
            <li class="previous">
                <a href="javascript: void(0);" class="btn btn-info" >
                    <i class="bx bx-chevron-left me-1"></i> Previous
                </a>
            </li>
            <li class="next2 pm-2">
                <button type="submit" class="btn btn-info"> 
                    Save & Continue <i class="bx bx-chevron-right ms-1"></i>
                </button>
            </li>
        </ul>
    </div>
    {!! Form::close() !!}
</div>



@push('scripts')
<script>
    $(document).ready(function() {

        // submit form
        $("#autorize-info-frm").on("submit", function(e) {
            e.preventDefault();
            submitAjaxifyFrm(this, 3)
        });
    });
</script>
@endpush