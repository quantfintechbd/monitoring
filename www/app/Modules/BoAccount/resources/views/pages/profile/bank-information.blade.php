<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between view-profile-card-header">
        <h4 class="card-title mb-0">Bank Information</h4> 
    </div>

    {!! Form::model($bankInfo, ['route' => 'bo-account.bank-information.store', 'method' => 'POST', 'id' => 'bank-info-frm']) !!}
        {{ Form::hidden('user_id', request()->id) }}

        <div class="row p-2 pt-3">
            <div class="col-lg-3">
                <div class="mb-3">
                    {!! Form::label('bank_id', 'Bank Name', ['class' => 'form-label']) !!}
                    {!! Form::select('bank_id', $banks, null, ['class' => 'form-select select2', 'placeholder' => 'Select Bank Name']) !!}
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="mb-3">
                    {!! Form::label('branch_id', 'Bank Branch', ['class' => 'form-label']) !!}
                    {!! Form::select('branch_id', [], null, ['class' => 'form-select select2', 'placeholder' => 'Select Branch']) !!}
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="mb-3">
                    {!! Form::label('account_number', 'Bank A/C Number', ['class' => 'form-label']) !!}
                    {!! Form::text('account_number', null, ['class' => 'form-control', 'placeholder' => 'Enter Bank Account Number']) !!}
                    <i class="help-text">** Bank AC must be 13 digits</i>
                </div>
            </div>
        </div> 

        <div class="card-footer text-right">
            <ul class="pager wizard twitter-bs-wizard-pager-link p-2">
                <li class="previous">
                    <a href="javascript: void(0);" class="btn btn-info">
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
    $("#bank-info-frm").on("submit", function(e) {
        e.preventDefault();
        submitAjaxifyFrm(this, 2)
    }); 


    // load bank branches
    var $bank    = $('select[name=bank_id]');
    var $branch  = $('select[name=branch_id]');
    var $routing = $('select[name=routing_number]');
    var $account = $('input[name=account_number]');

    $bank.select2().on('change', function() {
        $.ajax({
            url:"{{ url('bo-account/bank-branch-dropdown') }}?bank_id=" + $bank.val(),  
            type:'GET',
            success:function(data) {
                $branch.empty().append("<option value=''>Select </option>");
                $routing.empty().append("<option value=''>Select </option>");
                $account.empty();
                $.each(data.data, function(value, key) {
                    $branch.append($("<option></option>").attr("value", value).text(key));  
                });
                $branch.select2();

                // Set the selected branch if available
                var selectedId = "{{ $bankInfo->branch_id ?? null }}";
                if (selectedId && data.data[selectedId]) {
                    $branch.val(selectedId).trigger('change');
                }
            }
        });
    }).trigger('change'); 
}); 
</script>
@endpush 