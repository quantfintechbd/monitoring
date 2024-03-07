@extends('Main::layouts.app')

@section('content')
<div class="card bg-white custom-step-wizard">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h4 class="card-title mb-0">{{ $pageName ?? "Profile" }}</h4>
        <div class="float-end">
 
        </div>
    </div>
    <div class="card-body mt-3">
        <div id="steps-form" class="twitter-bs-wizard">
            <ul class="twitter-bs-wizard-nav">
                <li class="nav-item">
                    <a href="#step-0" class="nav-link" data-toggle="tab">
                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Account Holder">
                            <i class="bx bx-user"></i>
                        </div>
                    </a>
                    <div class="text-center mb-4">
                        <h5>Account Holder</h5>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#step-1" class="nav-link" data-toggle="tab">
                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Info">
                            <i class="bx bx-buildings"></i>
                        </div>
                    </a>
                    <div class="text-center mb-4">
                        <h5>Bank Info</h5>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#step-2" class="nav-link" data-toggle="tab">
                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Authorize">
                            <i class="bx bx-user-check"></i>
                        </div>
                    </a>
                    <div class="text-center mb-4">
                        <h5>Authorize</h5>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#step-3" class="nav-link" data-toggle="tab">
                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Nominee">

                            <i class="bx bx-group"></i>
                        </div>
                    </a>
                    <div class="text-center mb-4">
                        <h5>Nominee</h5>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#step-4" class="nav-link" data-toggle="tab">
                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Document">
                            <i class="bx bx-dock-top"></i>
                        </div>
                    </a>
                    <div class="text-center mb-4">
                        <h5>Document</h5>
                    </div>
                </li>
            </ul>
            <!-- wizard-nav -->

            <div class="tab-content twitter-bs-wizard-tab-content p-3">
                {{-- account holder --}}
                <div class="tab-pane" id="step-0">
                    @include("BoAccount::pages.profile.account-holder")
                </div>

                <!--  bank-info -->
                <div class="tab-pane" id="step-1">
                    @include("BoAccount::pages.profile.bank-information")
                </div>

                <!-- authorize Info -->
                <div class="tab-pane" id="step-2">
                    @include("BoAccount::pages.profile.authorize-information")
                </div>

                <!-- nominee -->
                <div class="tab-pane" id="step-3">
                    @include("BoAccount::pages.profile.nominee-information")
                </div>

                <!-- document -->
                <div class="tab-pane" id="step-4">
                    @include("BoAccount::pages.profile.documents")
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push("scripts")
<script>
$(document).ready(function() {  

    // from stpes
	$('#steps-form').bootstrapWizard({
        tabClass: "nav nav-pills nav-justified",
		onNext: function(tab, navigation, index) {
            localStorage.setItem('_profile_tab', "#step-" + index);
  		},
        onPrevious: function(tab, navigation, index) {
            localStorage.setItem('_profile_tab', "#step-" + index);
  		}
    });
    // form steps 
    var triggerTabList = [].slice.call(document.querySelectorAll(".twitter-bs-wizard-nav .nav-link"));
    triggerTabList.forEach(function(a) {
        var r = new bootstrap.Tab(a);
        a.addEventListener("click", function(a) {
            a.preventDefault(), r.show()
        })
    });




    // save tab state
    const _profile_tab = localStorage.getItem('_profile_tab');
    if (_profile_tab) {
        $('.nav-item a[href="' + _profile_tab + '"]').tab("show");
    }
    $('body').on('click', '.nav-link', function () {
        const _profile_tab = $(this).attr('href');
        localStorage.setItem('_profile_tab', _profile_tab);
    }); 
});
 

function submitAjaxifyFrm(form, nextTab = 1) {

    var formData = new FormData(form); 

    // Remove existing error elements
    var errorElements = form.querySelectorAll('.invalid-feedback');
    errorElements.forEach(function(errorElement) {
        errorElement.remove();
    });

    axios({
        method  : form.method,
        url     : form.action,
        data    : formData,
        headers : {
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute(
                'content'),
            'Accept'       : 'application/json',
            'Authorization': 'Bearer ' + '{{ auth()->user()->api_token ?? "" }}',
        },
        onUploadProgress: function(progressEvent) {
            var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent
                .total);
            // Handle progress if needed
        }
    })
    .then(function(response) {

        // Remove existing error elements
        var errorElements = form.querySelectorAll('.invalid-feedback');
        errorElements.forEach(function(errorElement) {
            errorElement.remove();
        });

        var responseData = response.data;

        if (responseData.status) {
            swalWithHtmlAlert('success', responseData.message);
            setTimeout(function() {
                // manage from steps/tabs
                localStorage.setItem('_profile_tab', "#step-" + nextTab);
                $('.twitter-bs-wizard').bootstrapWizard('show', nextTab);
            }, 2000);
        } else {
            swalWithHtmlAlert('error', responseData.message);
            form.querySelector('button[type=submit]').innerHTML =
                '<i class="fa fa-refresh"></i> Try again';
        }
    })
    .catch(function(xhr) {

        var res = xhr.response;
        if (res.status == 422) {
            var errors = res.data.errors;
            for (var name in errors) { 
                if (errors.hasOwnProperty(name)) {
                    var message = errors[name];
                    var fieldName = name.includes('.') ? name.split('.')[0] + '[' + name.split('.')[1] + ']' : name;
                    var fieldElement = form.querySelector('[name="' + fieldName + '"]');
                    if (fieldElement) {
                        // Remove existing error elements
                        var errorElements = fieldElement.parentNode.querySelectorAll('.invalid-feedback');
                        errorElements.forEach(function(errorElement) {
                            errorElement.remove();
                        });

                        var errorElement = document.createElement('div');
                        errorElement.classList.add('invalid-feedback');
                        errorElement.textContent = message;
                        fieldElement.parentNode.appendChild(errorElement);
                        fieldElement.classList.add('is-invalid');
                    } else {
                        swalWithHtmlAlert('warning', message);
                    }
                }
            } 
        } else { 
            swalWithHtmlAlert('error', res.statusText);
        }

        form.querySelector('button[type=submit]').innerHTML =
            '<i class="fa fa-refresh"></i> Try again';
    });
}


function uploadAjaxifyFrm(form) {

    axios({
        method  : form.method,
        url     : form.action,
        data    : new FormData(form),
        headers : {
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute(
                'content'),
            'Accept'       : 'application/json',
            'Authorization': 'Bearer ' + '{{ auth()->user()->api_token ?? "" }}',
        }
    })
    .then(function(response) { 
        var responseData = response.data; 
        if (responseData.status) {
            swalWithHtmlAlert('success', responseData.message);
            setTimeout(function() {
                if (responseData.redirect) {
                    window.location.href = responseData.redirect;
                } else {
                    window.location.reload(); 
                }
            }, 2000);
        } else {
            swalWithHtmlAlert('error', responseData.message);
            form.querySelector('button[type=submit]').innerHTML =
                '<i class="fa fa-refresh"></i> Try again';
        }
    })
    .catch(function(xhr) { 
        var res = xhr.response;
        if (res.status == 422) {
            var errors = res.data.errors;
            var errorHtml = '<ul>';
            for (var name in errors) { 
                if (errors.hasOwnProperty(name)) {
                    var message = errors[name];
                    errorHtml += '<li>' + message + '</li>'; 
                }
            }
            errorHtml += '</ul>';
            swalWithHtmlAlert('warning', errorHtml);
        } else { 
            swalWithHtmlAlert('error', res.statusText);
        } 
        form.querySelector('button[type=submit]').innerHTML =
            '<i class="fa fa-refresh"></i> Try again';
    });
}

</script>
@endpush