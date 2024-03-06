$(document).ready(function() {  

    // common modal
    $('body').on("click", '[data-toggle="dynamicModal"]', function(e) {
        e.preventDefault();
        $("#dynamicModal").remove();
        var modal = $(this);
        var url   = modal.data("remote") || modal.attr("route") || modal.attr("href");
        var html = $('<div class="modal fade show" id="dynamicModal" tabindex="-1" aria-modal="true"  role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="dynamicModalLabel" aria-hidden="true" style="display: block"></div>'); 
        $("body").append(html);
        html.modal({
            easein: "flipInX"
        });
        html.load(url); 
    });

    // close modal
    $('body').on('click', '[data-bs-dismiss="modal"]', function () {
        $(this).closest('.modal').modal().hide();
    });

    // feather icons
    feather.replace();
  
    // select2
    $(".select2").select2({
        placeholder: "Select",
        allowClear: true,
        dropdownParent: $('body')
    });

    // carousel
    $('.carousel').carousel();

    // tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // datepicker
    $('.datepicker').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,  
        locale: {
            format: 'YYYY-MM-DD',
            cancelLabel: 'Clear'
        }
    });
    $('.datepicker').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('.datepicker').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });


    // datetimepicker
    $('.datetimepicker').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,  
        locale: {
            format: 'YYYY-MM-DD',
            cancelLabel: 'Clear'
        }
    });
    $('.datetimepicker').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });
    $('.datetimepicker').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
});

// dark & light mode
document.addEventListener('DOMContentLoaded', function() {
    const currentMode = localStorage.getItem('mode');

    if (currentMode) {
        document.body.setAttribute('data-layout-mode', currentMode);
        if (currentMode === 'dark') {
            document.querySelector('.layout-mode-dark').style.display = "block";
            document.querySelector('.layout-mode-light').style.display = "none";
        }
    }

    document.getElementById('mode-setting-btn').addEventListener('click', function() {
        const mode = localStorage.getItem('mode') === "dark" ? 'light' : 'dark';
        document.body.setAttribute('data-layout-mode', mode);
        localStorage.setItem('mode', mode);

        const darkModeElements = document.querySelector('.layout-mode-dark');
        const lightModeElements = document.querySelector('.layout-mode-light');

        darkModeElements.style.display = mode === 'dark' ? 'block' : 'none';
        lightModeElements.style.display = mode === 'light' ? 'block' : 'none';
    });
});


var copyElements = document.querySelectorAll(".copy");
copyElements.forEach(function(copyElement) {
    copyElement.style.cursor = 'copy';
    copyElement.setAttribute("title", "Copy");

    copyElement.addEventListener("click", function() {
        
        var textToCopy = "";
        if ((/^(input|textarea)$/i).test(this.tagName.toLowerCase())) {
            textToCopy = this.value; 
        } else {
            textToCopy = this.innerText; 
        }

        var textarea = document.createElement("textarea");
        textarea.value = textToCopy;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        // Apply copied animation styles
        this.style.background = 'linear-gradient(45deg, #76787e, #082fef)';

        setTimeout(function() {
            copyElement.style.transition = 'transform 0.3s';
            copyElement.style.background = '';
        }, 600); 
        
        copyElement.setAttribute("title", "Copied");
    });
});

// show more/less
function showMore(e) {
    $(e).parent().find('.hidden-text').show();
    $(e).hide();
}
function lessSms(e) {
    $(e).parent().find('.hidden-text').hide();
    $(e).parent().find('.show-more').show();
    $(e).hide();
}
  

// alert
function swalAlert(type = "success", message = "") {
    Swal.fire({
        title: type.toUpperCase() + ' !',
        text: message,
        icon: type,
        timer: 30000
    });
}

function swalWithHtmlAlert(type = "success", html = '') {
    Swal.fire({
        title: type.toUpperCase() + ' !',
        icon: type,
        html: html,
        timer: 30000
    })
}

function swalConfirmAlert(form) {
    Swal.fire({
        title: 'Are you sure ?',
        text: "You won't be able to revert this !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        reverseButtons:true
    }).then((result) => {
        if (result.value) {
            form.submit();
        }
        else {
            event.preventDefault();
            return;
        }
    })
}

