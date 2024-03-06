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
                    <h6 class="font-weight-medium mb-0">Logs - (showing {{ $logs->firstItem()??0 }} to {{ $logs->lastItem()??0 }} of total {{ $logs->total()??0 }} entries)</h6>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive rounded-10 border">
                    <table class="table table-hover mb-0 table-condensed">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-top-0">Sl</th>
                                <th class="border-top-0">Broker</th>
                                <th class="border-top-0">Environment</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Source</th>
                                <th class="border-top-0 w-50">Message</th>
                                <th class="border-top-0">Date Time</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($logs))
                            @foreach($logs as $key=>$item)
                            @php
                                $log_data = json_decode($item->json_data, true);
                            @endphp
                            <tr class="{{ $item->level == 'ERR' ? 'table-danger' : ''}}">
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
                                <td>
                                    {!! $item->json_data !!}
                                </td>
                                {{-- <td>
                                    {!! isset($log_data['main_message']) ? readMoreLess($log_data['main_message'], 200) : readMoreLess($item->json_data, 200) !!}
                                </td> --}}
                                <td>
                                    {!! dbUTCToDateTime($item->date_time) ?? null !!}
                                </td>
                                <td>
                                    <a href="{{ route('bo-account.user.profile', $item->id) }}" class="btn btn-success btn-sm">
                                        <i class="bx bx-show-alt"></i>
                                    </a>
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
