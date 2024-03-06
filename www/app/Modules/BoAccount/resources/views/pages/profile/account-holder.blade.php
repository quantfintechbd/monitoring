<div class="card ">
    <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
        <h4 class="card-title mb-0"> Account Holder</h4>
    </div>

    {!! Form::model($accHolder, ['route' => 'bo-account.account-holder.store', 'method' => 'POST', 'id' => 'acc-hldr-frm']) !!}

    {{ Form::hidden('user_id', request()->id) }}
    {{ Form::hidden('parent_id') }}

    {{-- Account Holder --}}
    <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header rounded-0">
            <h4 class="card-title mb-0">First A/C Holder</h4>
        </div>
        <div class="row p-3">
            <div class="col-md-3 mb-2">
                <p><b>Type of Client</b></p>
                @foreach(\App\Modules\BoAccount\Enums\BoTypeEnum::getAll() as $value => $key)
                    <div class="form-check form-check-inline">
                        {!! Form::radio('type_of_client', $value, true, ['class' => 'form-check-input', 'id' => ('type_of_client_' . $key)]) !!}
                        {!! Form::label(('type_of_client_' . $key), str_replace('_', ' ', $key), ['class' => 'form-check-label']) !!}
                    </div>
                @endforeach 
{{-- 
                <div class="form-check form-check-inline">
                    {!! Form::radio('type_of_client', \App\Modules\BoAccount\Enums\BoTypeEnum::Individual, true, ['class' => 'form-check-input', 'id' => 'individual']) !!}
                    {!! Form::label('individual', 'Individual', ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check form-check-inline">
                    {!! Form::radio('type_of_client', \App\Modules\BoAccount\Enums\BoTypeEnum::Joint, false, ['class' => 'form-check-input', 'id' => 'joint']) !!}
                    {!! Form::label('joint', 'Joint', ['class' => 'form-check-label']) !!}
                </div> --}}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('first_acc_courtesy_title', 'Courtesy Title', ['class' => 'form-label']) !!}
                {!! Form::select('courtesy_title', $curtesy, null, [
                    'class' => 'form-control select2',
                    'id'    => 'first_acc_courtesy_title',
                    'maxlength' => 10,
                    'placeholder' => 'Select',
                ]) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('firstname', 'First Name', ['class' => 'form-label']) !!}
                {!! Form::text('firstname', null, ['class' => 'form-control', 'maxlength' => 100, 'readonly', 'placeholder' => 'Enter First Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('lastname', 'Last Name', ['class' => 'form-label']) !!}
                {!! Form::text('lastname', null, ['class' => 'form-control', 'maxlength' => 30, 'readonly', 'placeholder' => 'Enter Last Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('occupation', 'Occupation', ['class' => 'form-label']) !!}
                {!! Form::text('occupation', null, ['class' => 'form-control', 'maxlength' => 64, 'placeholder' => 'Enter Occupation']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
                <div class="input-group auth-pass-inputgroup">
                    {{ Form::text('date_of_birth', null, ["class" => "form-control datepicker", "placeholder" => "Enter Date of Birth", "id" => "date_of_birth", "aria-label"=>"date_of_birth", "aria-describedby"=>"date_of_birth-addon", "autocomplete"=>"off"]) }}
                    <button class="btn btn-light shadow-none ms-0 date_of_birth_addon" type="button" id="date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
                </div>
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
                {!! Form::label('fisrt_acc_country', 'Country', ['class' => 'form-label']) !!}
                {!! Form::select('country', ($country ?? []), null, ['class' => 'form-control select2', 'id' => 'fisrt_acc_country', 'maxlength' => 25, 'placeholder' => 'Select Country']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('mobile', 'Mobile', ['class' => 'form-label']) !!}
                {!! Form::text('mobile', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Mobile']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 80, 'placeholder' => 'Enter Email Address']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('telephone', 'Telephone', ['class' => 'form-label']) !!}
                {!! Form::text('telephone', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Telephone Number']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('fax', 'Fax', ['class' => 'form-label']) !!}
                {!! Form::text('fax', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter FAX Number']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('nationality', 'Nationality', ['class' => 'form-label']) !!}
                {!! Form::text('nationality', (old('nationality') ?? 'Bangladeshi'), ['class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'Enter Nationality']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('nid', 'National ID', ['class' => 'form-label']) !!}
                {!! Form::text('nid', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter National Identity Card Number']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('tin', 'Tax Identification Number (TIN)', ['class' => 'form-label']) !!}
                {!! Form::text('tin', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Tax Identification Number (TIN)']) !!}
            </div> 

            <div class="col-md-3 mb-2">
                {!! Form::label('branch', 'Branch', ['class' => 'form-label']) !!}
                {!! Form::select('branch', $branches, null, ['class' => 'form-select select2', 'placeholder'=>' Select ']) !!}
            </div>
            
            <div class="col-md-4 my-3">
                <p><b>Residential Status</b></p>
                @foreach(\App\Modules\BoAccount\Enums\ResidentialStatusEnum::getAll() as $value => $key)
                    <div class="form-check form-check-inline">
                        {!! Form::radio('residency', $value, true, ['class' => 'form-check-input', 'id' => ('residency_' . $key)]) !!}
                        {!! Form::label(('residency_' . $key), str_replace('_', ' ', $key), ['class' => 'form-check-label']) !!}
                    </div>
                @endforeach 
            </div>

            <div class="col-md-4 my-3">
                <p><b>Gender</b></p>
                @foreach(\App\Modules\BoAccount\Enums\GenderTypeEnum::getAll() as $value => $key)
                    <div class="form-check form-check-inline">
                        {!! Form::radio('gender', $value, true, ['class' => 'form-check-input', 'id' => ('gender_'.$key)]) !!}
                        {!! Form::label(('gender_'.$key), $key, ['class' => 'form-check-label']) !!}
                    </div>
                @endforeach 
            </div>
 

            {{-- Director --}}
            <div class="row">
                <div class="col-md-12 mb-2"> 
                    <div class="view-profile-card-header p-3 rounded-2" role="alert">
                        Whether the applicant is an officer or Director or Authorized
                        Representative of any Stock Exchange/Listed Company/Brokerage Firm
                        <div class="form-check form-switch form-switch-lg switch" dir="ltr">
                            <input name="is_director" type="checkbox" class="form-check-input" id="is_director">
                            <label class="form-check-label" for="is_director"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-2 director_company" style="display:none">
                    {!! Form::label('director_company', 'If yes Name of The Stock Exchange/Listed Company/Brokerage Firm:', [
                        'class' => 'form-label',
                    ]) !!}
                    {!! Form::text('director_company', null, [
                        'class' => 'form-control',
                        'maxlength' => 255,
                        'placeholder' => 'Write here',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Joint Applicant --}}
    <div class="card mt-4 joint_applicant" style="display:none">
        <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
            <h4 class="card-title mb-0">Joint Applicant(2nd Account Holder)</h4>
        </div>

        <div class="row p-3">
            <div class="col-md-3 mb-2">
                {!! Form::label('joint_courtesy_title', 'Courtesy Title', ['class' => 'form-label']) !!}
                {!! Form::select('joint_courtesy_title', $curtesy, null, [
                    'class' => 'form-control select2',
                    'maxlength' => 10,
                    'placeholder' => 'Select',
                ]) !!}
            </div>
            <div class="col-md-3 mb-2">
                {!! Form::label('joint_firstname', 'First Name', ['class' => 'form-label']) !!}
                {!! Form::text('joint_firstname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter First Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_lastname', 'Last Name', ['class' => 'form-label']) !!}
                {!! Form::text('joint_lastname', null, ['class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Enter Last Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_occupation', 'Occupation', ['class' => 'form-label']) !!}
                {!! Form::text('joint_occupation', null, ['class' => 'form-control', 'maxlength' => 64, 'placeholder' => 'Enter Occupation']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
                <div class="input-group auth-pass-inputgroup">
                    {{ Form::text('joint_date_of_birth', null, ["class" => "form-control datepicker", "placeholder" => "Enter Date of Birth", "id" => "joint_date_of_birth", "aria-label"=>"joint_date_of_birth", "aria-describedby"=>"joint_date_of_birth-addon", "autocomplete"=>"off"]) }}
                    <button class="btn btn-light shadow-none ms-0 joint_date_of_birth_addon" type="button" id="joint_date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_father_name', 'Father\'s Name', ['class' => 'form-label']) !!}
                {!! Form::text('joint_father_name', null, ['class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Enter Father Name']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_mother_name', 'Mother\'s Name', ['class' => 'form-label']) !!}
                {!! Form::text('joint_mother_name', null, ['class' => 'form-control', 'maxlength' => 30, 'placeholder' => 'Enter Mother Name']) !!}
            </div>

            <div class="col-md-12 mb-2">
                {!! Form::label('joint_address', 'Address', ['class' => 'form-label']) !!}
                {!! Form::text('joint_address', null, ['class' => 'form-control', 'maxlength' => 90, 'placeholder' => 'Enter Address']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_city', 'City', ['class' => 'form-label']) !!}
                {!! Form::text('joint_city', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter City']) !!}
            </div>
            <div class="col-md-3 mb-2">
                {!! Form::label('joint_post_code', 'Post Code', ['class' => 'form-label']) !!}
                {!! Form::text('joint_post_code', null, ['class' => 'form-control', 'maxlength' => 10, 'placeholder' => 'Enter Post Code']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_division', 'Division', ['class' => 'form-label']) !!}
                {!! Form::text('joint_division', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter Division']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_country', 'Country', ['class' => 'form-label']) !!}
                {!! Form::select('joint_country', ($country ?? []), null, ['class' => 'form-control select2', 'placeholder' => 'Select Country']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('joint_email', null, ['class' => 'form-control', 'maxlength' => 80, 'placeholder' => 'Enter Email Address']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_mobile', 'Mobile', ['class' => 'form-label']) !!}
                {!! Form::text('joint_mobile', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Mobile Number']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_telephone', 'Telephone', ['class' => 'form-label']) !!}
                {!! Form::text('joint_telephone', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Telephone']) !!}
            </div>

            <div class="col-md-3 mb-2">
                {!! Form::label('joint_fax', 'Fax', ['class' => 'form-label']) !!}
                {!! Form::text('joint_fax', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Fax']) !!}
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
        $("#acc-hldr-frm").on("submit", function(e) {
            e.preventDefault();
            submitAjaxifyFrm(this, 1)
        });


        // joint account
        var _jointApplicant = "{{ $accHolder->type_of_client ?? '' }}" || localStorage.getItem('_jointApplicant');
        if (_jointApplicant) {
            $("input[name=type_of_client][value=" + _jointApplicant + "]").prop('checked', true);
            var jointApplicant = $(".joint_applicant");
            if (_jointApplicant == '{{ \App\Modules\BoAccount\Enums\BoTypeEnum::Individual }}') {
                jointApplicant.hide();
            } else {
                jointApplicant.show();
            }
        }
        $("body").on("change", "input[name=type_of_client]", function() {
            var value = $(this).val();
            localStorage.setItem('_jointApplicant', value);

            var jointApplicant = $(".joint_applicant");
            if (value === '{{ \App\Modules\BoAccount\Enums\BoTypeEnum::Individual }}') {
                jointApplicant.hide();
            } else {
                jointApplicant.show();
            }
        });

        // director
        var directorCompany = $(".director_company");
        var _isDirector = "{{ (!empty($accHolder->is_director) && $accHolder->is_director == 1) ? 'true' : 'false' }}" || localStorage.getItem('_isDirector');
        if (_isDirector === "true") {
            $("input[name=is_director]").trigger("click");
            directorCompany.show();
        }
        $("body").on("click", "input[name=is_director]", function(e) {
            var isChecked = e.currentTarget.checked;
            if (isChecked) {
                directorCompany.show();
            } else {
                directorCompany.hide();
            }
            localStorage.setItem('_isDirector', isChecked);
        });
    })
</script>
@endpush 