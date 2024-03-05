@extends("Main::layouts.app")

@section("content")
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>{{ $pageName ?? null }} List</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">{{ $pageName ?? null }} List</li>
            </ul>
        </div>
    </div>
</div>


@include("Main::pages.user_whitelisted_ip.filter")


<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">{{ $pageName??null }} List - (showing {{ $result->firstItem()??0 }} to {{ $result->lastItem()??0 }} of total {{ $result->total()??0 }} entries)</h6>

                    @can('user-whitelisted-ip-create')
                    <a href="javascript:void(0)" route="{{ route('dashboard.user-whitelisted-ip.create') }}" data-toggle="dynamicModal" class="btn btn-info d-flex align-items-center font-weight-medium">
                        <i class="icon-plus pr-2"></i>
                        Add New IP
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body p-0">  
                <div class="table-responsive rounded-10 border">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-top-0">Name & Mobile</th> 
                                <th class="border-top-0">IP Address</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Created Date</th>
                                <th class="border-top-0">Update Date</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($result))
                            @foreach($result as $item)
                            <tr>
                                <td>
                                    {{ $item->name ?? null }} 
                                    <span class="d-block text-muted">{{ $item->mobile ?? null }}</span>
                                </td>
                                <td>
                                    {{ $item->ip_address ?? null }} 
                                </td>  
                                <td>
                                    @if ($item->status == \App\Modules\Main\Enums\ActiveInactiveEnum::Active)
                                    <span class="badge badge-pill badge-success">Active</span>
                                    @else 
                                    <span class="badge badge-pill badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    {{ dbToDate($item->created_at) ?? null }}
                                    <span class="d-block text-muted">{{ dbToTime($item->created_at) ?? null }}</span>
                                </td>
                                <td>
                                    {{ dbToDate($item->updated_at) ?? null }}
                                    <span class="d-block text-muted">{{ dbToTime($item->updated_at) ?? null }}</span>
                                </td> 
                                <td>
                                    @can("user-whitelisted-ip-update")
                                        <a class="btn btn-primary " href="javascript:void(0)" route="{{ route('dashboard.user-whitelisted-ip.edit', $item->id) }}" data-toggle="dynamicModal"><i class="fa fa-edit"></i> Edit</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                            @endif 
                        </tbody>
                    </table>
                </div>

 
                <div class="d-flex justify-content-end mt-3 mb-0">
                    @if (!empty($result->count()))
                        {!! $result->withQueryString()->links() !!}
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
