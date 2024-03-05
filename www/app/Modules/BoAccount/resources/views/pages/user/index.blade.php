@extends("Main::layouts.app")

@section("content")
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>{{ request()->get('status') ?? 'Pending' }} User List</h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">{{ request()->get('status') ?? 'Pending' }} User List</li>
            </ul>
        </div>
    </div>
</div>


@include("BoAccount::pages.user.filter")
@include("Main::widgets.message.sweet-alert")


<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">{{ request()->get('status') ?? 'Pending' }} User List - (showing {{ $result->firstItem()??0 }} to {{ $result->lastItem()??0 }} of total {{ $result->total()??0 }} entries)</h6>

                    @can('bo-user-create')
                    <a href="javascript:void(0)" route="{{ route('bo-account.user.create') }}" data-toggle="dynamicModal" class="btn btn-info d-flex align-items-center font-weight-medium">
                        <i class="icon-plus pr-2"></i>
                        Add New User
                    </a>
                    @endcan 
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive rounded-10 border">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-top-0">Username & Name</th> 
                                <th class="border-top-0">Email & Mobile</th> 
                                <th class="border-top-0">NID & Date of Birth</th> 
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">BO Profile Progress</th>
                                <th class="border-top-0">Created Info</th>
                                <th class="border-top-0">Updated Info</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($result))
                            @foreach($result as $item) 
                            <tr>
                                <td>
                                    ({{ $item->username ?? null }})
                                    <span class="d-block text-muted">{{ $item->name ?? null }}</span>
                                </td>
                                <td>
                                    {{ $item->email ?? null }}
                                    <span class="d-block text-muted">{{ $item->mobile ?? null }}</span>
                                </td>
                                <td>
                                    {{ $item->nid ?? null }}
                                    <span class="d-block text-muted">{{ dbToDate($item->date_of_birth ?? null) }}</span>
                                </td> 
                                <td>
                                    @if ($item->status == \App\Modules\Main\Enums\UserStatusEnum::Pending)
                                    <span class="badge bg-soft-warning text-warning">Pending</span>
                                    @elseif ($item->status == \App\Modules\Main\Enums\UserStatusEnum::Verified)
                                    <span class="badge bg-soft-success text-success">Verified</span>
                                    @elseif ($item->status == \App\Modules\Main\Enums\UserStatusEnum::Processing)
                                    <span class="badge bg-soft-info text-info">Processing</span>
                                    @elseif ($item->status == \App\Modules\Main\Enums\UserStatusEnum::Completed)
                                    <span class="badge bg-soft-primary text-primary">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $ekcy = \App\Modules\Main\Services\EkycProgressbarService::status($item->id);
                                    @endphp
                                    <div class="card-body"> 
                                        <div class="text-nowrap mb-2">
                                            <b class="ms-1 text-muted font-size-13 ">Completed Profle</b>
                                            <span class="ms-1 text-muted font-size-13 float-end">{{ $ekcy->progress ?? 0 }}%</span>
                                        </div>
                                        <div class="progress animated-progess mb-2 bg-light">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $ekcy->progress ?? 0 }}%" aria-valuenow="{{ $ekcy->progress ?? 0 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-nowrap mb-2">
                                            <span class="ms-1 font-size-12 {{ ($ekcy->progress == 100) ? 'text-success' : 'text-primary' }}"><b>{{ $ekcy->next ?? null }}</b></span>
                                            <span class="ms-1 text-muted font-size-13 float-end"></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $item->createdBy->name ?? null }}
                                    <span class="d-block text-muted">{{ dbToDate($item->created_at) ?? null }}</span>
                                </td>
                                <td>
                                    {{ $item->updatedBy->name ?? null }}
                                    <span class="d-block text-muted">{{ dbToDate($item->updated_at) ?? null }}</span>
                                </td>
                                <td>
                                    @can("bo-user-update")
                                        <a class="btn btn-primary " href="javascript:void(0)" route="{{ route('bo-account.user.edit', $item->id) }}" data-toggle="dynamicModal"><i class="fa fa-edit"></i> Edit</a>
                                    @endcan 
                                    @can("bo-user-profile")
                                        <a class="btn btn-info" href="{{ route('bo-account.user.profile-edit', $item->id) }}"><i class="fa fa-edit"></i> Profile</a>
                                    @endcan 
                                    <a href="{{ route('bo-account.user.profile', $item->id) }}" class="btn btn-success"><i class="bx bx-show-alt"></i> View Profile</a>
                                    @can("download-bo-file")
                                    <a href="{{ route('bo-account.download.bo-file', ['id' => $item->id, 'pdf'=>'true']) }}" class="btn btn-danger"><i class="bx bx-download"></i> Download BO File</a>
                                    @endcan 
                                </td>
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
