<div class="card">
    <div
        class="card-header d-flex align-items-center justify-content-between  view-profile-card-header">
        <h4 class="card-title mb-0">Please Upload Your Necessary Document</h4>
    </div>

    <div class="row row p-2 pt-3">
        @foreach($documents as $doc)
        <div class="col-lg-3">
            <div class="mb-4">
                {{ Form::open(["route" => ["bo-account.document.store"], "class" => "document-frm", "files" => true]) }}

                {{ Form::hidden("id", $doc["id"] ?? "") }}
                {{ Form::hidden("user_id", request()->id) }}
                {{ Form::hidden("title", $doc["title"] ?? "") }}
                {{ Form::hidden("image_preview", asset(!empty($doc['path']) ? $doc['path'] : 'assets/images/Not-found-image.svg')) }}

                <div class="upload-preview">
                    <a href="javascript:void(0)">
                        <img class="img-fluid" alt="" src="{{ asset(!empty($doc['path']) ? $doc['path'] : 'assets/images/Not-found-image.svg') }}">
                    </a>
                </div>
                <div class="mt-3">
                    <h5 class="m-0">{{ $doc['title'] ?? 'Upload Document' }}</h5>
                </div>
                <div class="mt-2">
                    <div class="d-flex align-items-center">
                        @if(!empty($doc['id']))
                            <div class="custom-file-upload">
                                <button type="button" class="btn btn-soft-warning waves-effect waves-light btn-sm">Change File</button>
                                <input name="file" type="file" />
                            </div>
                        @else
                            <div class="custom-file-upload">
                                <button type="button" class="btn btn-soft-secondary waves-effect waves-light btn-sm">Choose File</button>
                                <input name="file" type="file" />
                            </div>
                        @endif
                        <button type="button" class="upload-clear btn btn-soft-danger waves-effect waves-light btn-sm" style="margin-right:5px">Clear</button>
                        <button type="submit" class="btn btn-soft-info waves-effect waves-light btn-sm">Save</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        @endforeach
    </div>


    {{-- Button --}}
    <div class="card-footer text-right">
        <ul class="pager wizard twitter-bs-wizard-pager-link p-2">
            <li class="previous">
                <a href="javascript: void(0);" class="btn btn-info" >
                    <i class="bx bx-chevron-left me-1"></i> Previous
                </a>
            </li>  
        </ul>
    </div>
</div>


@push("scripts")
<script>  
$(document).ready(function() {
      
    // preview image
    $('body').on('change', 'input[name=file]', function() {
        var form = $(this).closest("form");
        var files = this.files;
        if (files.length > 0) {
            var file = files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                form.find("a").attr("src", e.target.result);
                form.find("a").find("img").attr("src", e.target.result);
            }
            reader.readAsDataURL(file);
        } else {
            var img = form.find("input[name=image_preview]").val();
            form.find("input[name=file]").val("");
            form.find("a").attr("src", img);
            form.find("a").find("img").attr("src", img);
        } 
    });

    // upload clear
    $('body').on('click', '.upload-clear', function() {
        var form = $(this).closest("form");
        var img = form.find("input[name=image_preview]").val();
        form.find("input[name=file]").val("");
        form.find("a").attr("src", img);
        form.find("a").find("img").attr("src", img);
    });

    // upload save
    $('body').on('submit', '.document-frm', function(e) {
        e.preventDefault();
        uploadAjaxifyFrm(this)
    }); 
});
</script>
@endpush