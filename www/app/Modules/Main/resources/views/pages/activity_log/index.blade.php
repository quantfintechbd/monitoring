@extends("Main::layouts.app")

@section("content")
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>{{ $pageName ?? null }} - <small>({{ request()->get("status") ? request()->get("status") : "All"  }})</small> </h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">{{ $pageName ?? null }}</li>
            </ul>
        </div>
    </div>
</div>


@include("Main::pages.activity_log.filter")
@include("Main::widgets.message.sweet-alert")


<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between py-1">
                    <h6 class="font-weight-medium mb-0">{{ $pageName ?? null }} - (showing {{ $result->firstItem()??0 }} to {{ $result->lastItem()??0 }} of total {{ $result->total()??0 }} entries)</h6>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive rounded-10 border">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th> 
                                <th>Created By</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action Table</th>
                                <th>Action ID</th>
                                <th>Agent</th>
                                <th>Data</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @if ($result->count())
                                @php $i = $result->firstItem() ?? 0 @endphp
                                @foreach ($result as $log)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $log->created_at->format("Y-m-d H:i:s") }}</td> 
                                        <td>{!! getLogUser($log->causer_type, $log->causer_id) !!}</td>
                                        <td>{{ $log->log_name ?? null }}</td>
                                        <td>{{ $log->description ?? null}}</td> 
                                        <td>{{ $log->subject_type ?? "-"}}</td> 
                                        <td>{{ $log->subject_id ?? "-" }}</td>
                                        <td width="200">{!! getLogProperties($log->properties, "agent") !!}</td>
                                        <td width="200">{!! getLogProperties($log->properties, "data") !!}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            @if (!empty($result->count()))
                <div class="d-flex justify-content-end mt-3 mb-0">
                    {!! $result->appends(request()->all())->links() !!}
                </div>
            @endif 
        </div>
    </div>
</div>
@endsection
