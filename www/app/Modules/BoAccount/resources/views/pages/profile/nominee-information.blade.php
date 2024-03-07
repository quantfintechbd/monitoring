<div class="card ">
    <div class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
        <h4 class="card-title mb-0"> Nominee(s)</h4>
    </div>
    
    {!! Form::model($nomineeInfo, ['route' => 'bo-account.nominee-information.store', 'method' => 'POST', 'id' => 'nominee-frm']) !!}
    {{ Form::hidden('user_id', request()->id) }}
    
    <div class="card mt-4">
        {{-- nominee --}}
        <div>
            @include('BoAccount::pages.profile.nominee-fields', [
                'form_title'   => 'Nominee 1',
                'guardian_form_title'   => 'Nominee 1 Guardian (If Nominee is A Minor)',
                'field_prefix' => ''
            ])
        </div>

        {{-- nominee 2 --}}
        <div class="mb-2 p-3"> 
            <div class="view-profile-card-header p-3 rounded-2 border border-warning" role="alert">
                Do you want to add nominee 2 ?
                <div class="form-check form-switch form-switch-lg switch" dir="ltr">
                    <input name="nominee_2" type="checkbox" value="1" class="form-check-input" id="add-nominee_2">
                    <label class="form-check-label" for="add-nominee_2"></label>
                </div>
            </div>
        </div>
        <div class="mb-3" id="nominee_2-details" style="display:none">
            @include('BoAccount::pages.profile.nominee-fields', [
                'form_title'   => 'Nominee 2',
                'guardian_form_title'   => 'Nominee 2 Guardian (If Nominee is A Minor)',
                'field_prefix' => 'nominee_2_'
            ])
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
            <li class="next2 py-2">
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
        //--------------------------------------------------------------
        $("#nominee-frm").on("submit", function(e) {
            e.preventDefault();
            submitAjaxifyFrm(this, 4)
        });
        

        // guardian is minor
        //--------------------------------------------------------------
        var guardian = $(".nominee_guardian");
        var _isMinorNominee = localStorage.getItem('_isMinorNominee');
        if (_isMinorNominee === "true") {
            $("input[name=is_guardian]").trigger("click");
            guardian.show();
        }
        $("body").on("click", "input[name=is_guardian]", function(e) {
            var isChecked = e.currentTarget.checked;
            if (isChecked) {
                guardian.show();
            } else {
                guardian.hide();
            }
            localStorage.setItem('_isMinorNominee', isChecked);
        });

        // guardian2 is minor
        //--------------------------------------------------------------
        var guardian2 = $(".nominee_2_nominee_guardian");
        var _isMinornominee_2 = localStorage.getItem('_isMinornominee_2');
        if (_isMinornominee_2 === "true") {
            $("input[name=nominee_2_is_guardian]").trigger("click");
            guardian2.show();
        }
        $("body").on("click", "input[name=nominee_2_is_guardian]", function(e) {
            var isChecked = e.currentTarget.checked;
            if (isChecked) {
                guardian2.show();
            } else {
                guardian2.hide();
            }
            localStorage.setItem('_isMinornominee_2', isChecked);
        });
 
 
        // add nominee 2
        //-------------------------------------------------------------- 
        var nominee = $('#nominee_2-details');
        var _moreNominee = localStorage.getItem('_moreNominee');
        if (_moreNominee === "true") {
            $("input[name=nominee_2]").trigger("click");
            nominee.show();
        }
        $("body").on("click", "input[name=nominee_2]", function(e) {
            var isChecked = e.currentTarget.checked;
            if (isChecked) {
                nominee.show();
            } else {
                nominee.hide();
                // reset nominee 2 guardian
                guardian2.hide();
                localStorage.setItem('_isMinornominee_2', false);
                $("input[name=nominee_2_is_guardian]").prop('checked', false);
            }
            localStorage.setItem('_moreNominee', isChecked);
        });

        
        
    })
</script>
@endpush 