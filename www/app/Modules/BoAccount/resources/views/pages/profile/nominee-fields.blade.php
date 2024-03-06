<div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
    <h4 class="card-title mb-0">{{ $form_title ?? "Nominee"}}</h4>
</div>

<div class="row p-3">
    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'courtesy_title', 'Courtesy Title', ['class' => 'form-label']) !!}
        {!! Form::select($field_prefix . 'courtesy_title', $curtesy, null, [
            'class' => 'form-control select2',
            'maxlength' => 10,
            'placeholder' => 'Select',
        ]) !!}
    </div>
    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'firstname', 'First Name', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'firstname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter First Name']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'lastname', 'Last Name', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'lastname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Last Name']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'relationship', 'Relationship', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'relationship', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Relationship with A/C Holder']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'percentage', 'Percentage', ['class' => 'form-label']) !!} 
        <div class="input-group auth-pass-inputgroup">
            {{ Form::number($field_prefix . 'percentage', null, ["class" => "form-control", "placeholder" => "Enter Percentage(%)", "id" => ($field_prefix . 'percentage'), "min"=>0, "max"=>100, "autocomplete"=>"off"]) }}
            <button class="btn btn-light shadow-none ms-0 percentage_addon" type="button" id="percentage-addon">%</button>
        </div>
    </div>
  
    <div class="col-md-4 my-3">
        <p><b>Residential Status</b></p>
        @foreach(\App\Modules\BoAccount\Enums\ResidentialStatusEnum::getAll() as $value => $key)
            <div class="form-check form-check-inline">
                {!! Form::radio(($field_prefix . 'residency'), $value, true, ['class' => 'form-check-input', 'id' => ($field_prefix . 'residency_' . $key)]) !!}
                {!! Form::label(($field_prefix . 'residency_' . $key), str_replace('_', ' ', $key), ['class' => 'form-check-label']) !!}
            </div>
        @endforeach 
    </div>
 
    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
        <div class="input-group auth-pass-inputgroup">
            {{ Form::text($field_prefix . 'date_of_birth', null, ["class" => "form-control datepicker", "placeholder" => "Enter Date of Birth", "id" => ($field_prefix . 'date_of_birth'), "aria-label"=>"date_of_birth", "aria-describedby"=>"date_of_birth-addon", "autocomplete"=>"off"]) }}
            <button class="btn btn-light shadow-none ms-0 date_of_birth_addon" type="button" id="date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
        </div>
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'nid', 'NID', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'nid', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter NID']) !!}
    </div>

    <div class="col-md-12 mb-2">
        {!! Form::label($field_prefix . 'address', 'Address', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'address', null, ['class' => 'form-control', 'maxlength' => 90, 'placeholder' => 'Enter Address']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'city', 'City', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'city', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter City']) !!}
    </div>
    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'post_code', 'Post Code', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'post_code', null, ['class' => 'form-control', 'maxlength' => 10, 'placeholder' => 'Enter Post Code']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'division', 'Division', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'division', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter Division']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'country', 'Country', ['class' => 'form-label']) !!}
        {!! Form::select($field_prefix . 'country', ($country ?? []), null, ['class' => 'form-control select2', 'placeholder' => 'Select Country']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'email', 'Email', ['class' => 'form-label']) !!}
        {!! Form::email($field_prefix . 'email', null, ['class' => 'form-control', 'maxlength' => 80, 'placeholder' => 'Enter Email Address']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'mobile', 'Mobile', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'mobile', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Mobile Number']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'telephone', 'Telephone', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'telephone', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Telephone']) !!}
    </div>

    <div class="col-md-3 mb-2">
        {!! Form::label($field_prefix . 'fax', 'Fax', ['class' => 'form-label']) !!}
        {!! Form::text($field_prefix . 'fax', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Fax']) !!}
    </div>

    <div class="col-md-12"> 
        <div class="view-profile-card-header p-3 border border-info" role="alert">
            Do you want to add {{ $guardian_form_title ?? null }} ?
            <div class="form-check form-switch form-switch-lg switch" dir="ltr">
                <input name="{{ $field_prefix }}is_guardian" type="checkbox" value="1" class="form-check-input" id="{{ $field_prefix }}is_guardian">
                <label class="form-check-label" for="{{ $field_prefix }}is_guardian"></label>
            </div>
        </div>
    </div>

    <div class="{{ $field_prefix }}nominee_guardian" style="display:none">
        <div class="card border-info border-top-0 border-radious-0">
            <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
                <h4 class="card-title mb-0">{{ $guardian_form_title ?? "Nominee Guardian (If Nominee is A Minor)"}}</h4>
            </div>
            <div class="card-body">
                <div class="row  p-2">
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'courtesy_title', 'Courtesy Title', ['class' => 'form-label']) !!}
                        {!! Form::select($field_prefix . 'guardian_courtesy_title', $curtesy, null, [
                            'class' => 'form-control select2',
                            'maxlength' => 10,
                            'placeholder' => 'Select',
                        ]) !!}
                    </div>
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_firstname', 'First Name', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_firstname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter First Name']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_lastname', 'Last Name', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_lastname', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Last Name']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_relationship', 'Relationship', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_relationship', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Relationship with Nominee']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_maturity_date_of_minor', 'Maturity Date of Minor', ['class' => 'form-label']) !!} 
                        <div class="input-group auth-pass-inputgroup">
                            {{ Form::text($field_prefix . 'guardian_maturity_date_of_minor', null, ["class" => "form-control datepicker", 'id'=> ($field_prefix. 'guardian_maturity_date_of_minor'), "placeholder" => "Enter Date of Birth", "aria-label"=>"maturity_date_of_minor", "aria-describedby"=>"maturity_date_of_minor-addon", "autocomplete"=>"off"]) }}
                            <button class="btn btn-light shadow-none ms-0 maturity_date_of_minor_addon" type="button" id="maturity_date_of_minor-addon"><i class="mdi mdi-calendar"></i></button>
                        </div>
                    </div>
                    
                    <div class="col-md-4 my-3">
                        <p><b>Residential Status</b></p>
                        @foreach(\App\Modules\BoAccount\Enums\ResidentialStatusEnum::getAll() as $value => $key)
                            <div class="form-check form-check-inline">
                                {!! Form::radio(($field_prefix . 'guardian_residency'), $value, true, ['class' => 'form-check-input', 'id' => ($field_prefix . 'guardian_residency_' . $key)]) !!}
                                {!! Form::label(($field_prefix . 'guardian_residency_' . $key), str_replace('_', ' ', $key), ['class' => 'form-check-label']) !!}
                            </div>
                        @endforeach 
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_date_of_birth', 'Birth of Date', ['class' => 'form-label']) !!} 
                        <div class="input-group auth-pass-inputgroup">
                            {{ Form::text($field_prefix . 'guardian_date_of_birth', null, ["class" => "form-control datepicker", "placeholder" => "Enter Date of Birth", "aria-label"=>"guardian_date_of_birth", "aria-describedby"=>"guardian_date_of_birth-addon", "autocomplete"=>"off"]) }}
                            <button class="btn btn-light shadow-none ms-0 guardian_date_of_birth_addon" type="button" id="guardian_date_of_birth-addon"><i class="mdi mdi-calendar"></i></button>
                        </div>
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_nid', 'NID', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_nid', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter NID']) !!}
                    </div>
                    
                    <div class="col-md-12 mb-2">
                        {!! Form::label($field_prefix . 'guardian_address', 'Address', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_address', null, ['class' => 'form-control', 'maxlength' => 90, 'placeholder' => 'Enter Address']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_city', 'City', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_city', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter City']) !!}
                    </div>
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_post_code', 'Post Code', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_post_code', null, ['class' => 'form-control', 'maxlength' => 10, 'placeholder' => 'Enter Post Code']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_division', 'Division', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_division', null, ['class' => 'form-control', 'maxlength' => 25, 'placeholder' => 'Enter Division']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_country', 'Country', ['class' => 'form-label']) !!}
                        {!! Form::select($field_prefix . 'guardian_country', ($country ?? []), null, ['class' => 'form-control select2', 'placeholder' => 'Select Country']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email($field_prefix . 'guardian_email', null, ['class' => 'form-control', 'maxlength' => 80, 'placeholder' => 'Enter Email Address']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_mobile', 'Mobile', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_mobile', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Mobile Number']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_telephone', 'Telephone', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_telephone', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Telephone']) !!}
                    </div>
                    
                    <div class="col-md-3 mb-2">
                        {!! Form::label($field_prefix . 'guardian_fax', 'Fax', ['class' => 'form-label']) !!}
                        {!! Form::text($field_prefix . 'guardian_fax', null, ['class' => 'form-control', 'maxlength' => 20, 'placeholder' => 'Enter Fax']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>