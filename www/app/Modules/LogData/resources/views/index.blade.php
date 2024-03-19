@extends("Main::layouts.app")

@section("content")
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>Log Data</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">Log Data</li>
            </ul>
        </div>
    </div>
</div>

@include("LogData::filter")
@include("Main::widgets.message.sweet-alert")

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">
                        Logs - (showing {{ $logs->firstItem()??0 }} to {{ $logs->lastItem()??0 }} of total {{ $logs->total()??0 }} entries)
                    </h6>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive rounded-10 border">
                    <table class="table table-hover mb-0 table-condensed ">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-top-0">Sl</th>
                                <th class="border-top-0">Broker</th>
                                <th class="border-top-0">Environment</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Source</th>
                                <th class="border-top-0 w-25">Message</th>
                                <th class="border-top-0">Date Time</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($logs))
                            @foreach($logs as $key=>$item)
                            @php
                                $error_message = formatErrorMessage($item->json_data);
                            @endphp
                            {{-- <tr class="{{ $item->level == 'ERR' ? 'border border-danger' : ''}}"> --}}
                            <tr>
                                <td>
                                    {{ $logs->firstItem() + $key }}
                                </td>
                                <td>
                                    {{ $item->broker ?? null }}
                                </td>
                                <td>
                                    {{ $item->envr ?? null }}
                                </td>
                                <td>
                                    {{ $item->level ?? null }}
                                </td>
                                <td>
                                    {{ $item->source ?? null }}
                                </td>
                                <td class="text-start">
                                    {!! readMoreLess($error_message['title'], 150) !!}
                                    <p class="text-secondary m-0"> {!! readMoreLess($error_message['desc'], 150) !!}  </p>
                                </td>
                                <td>
                                    {!! dbUTCToDateTime($item->date_time) ?? null !!}
                                </td>
                                <td>
                                    @if(!empty($error_message['view_data']))
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="modal" data-bs-target=".details-model-{{ $item->id }}"><i class="bx bx-show-alt"></i> View Details</button>

                                        <div class="modal fade details-model-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title {{ $item->level == "ERR" ? 'text-danger text-gradient': '' }}" id="myLargeModalLabel">
                                                            {{ $item->level }} on {{ $item->envr }} for {{ $item->broker }} from {{ $item->source }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-hover table-condensed w-100">
                                                            @foreach($error_message['view_data'] as $key => $data)
                                                                <tr>
                                                                    <td class="text-start">{{ $key  }}</td>
                                                                    <td class="text-start">{!! (string) $data  !!}</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td class="text-start">Date Time</td>
                                                                <td class="text-start">{!! dbUTCToDateTime($item->date_time) ?? null !!}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>

                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            @if (!empty($logs->count()))
                <div class="d-flex justify-content-end mt-3 mb-0">
                    {!! $logs->appends(request()->all())->links() !!}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
