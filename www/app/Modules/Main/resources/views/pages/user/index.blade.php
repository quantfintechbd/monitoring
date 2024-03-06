@extends("Main::layouts.app")

@section("content")
<div class="block-header">
    <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-12">
            <h2>User List - <small>({{ request()->get("status") ? request()->get("status") : "All"  }})</small> </h2>
        </div>
        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
            <ul class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active">User List</li>
            </ul>
        </div>
    </div>
</div>


@include("Main::pages.user.filter")
@include("Main::widgets.message.sweet-alert")


<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card bg-white">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between py-1">
                    <h6 class="font-weight-medium mb-0">User List - (showing {{ $result->firstItem()??0 }} to {{ $result->lastItem()??0 }} of total {{ $result->total()??0 }} entries)</h6>

                    @can('user-create')
                    <a href="javascript:void(0)" route="{{ route('dashboard.user.create') }}" data-toggle="dynamicModal" class="btn btn-info d-flex align-items-center font-weight-medium">
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
                                <th class="border-top-0">Roles</th>
                                <th class="border-top-0">API Token</th> 
                                <th class="border-top-0">Status</th>
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
                                    @foreach($item->getRoleNames() as $role) 
                                        <span class="badge bg-soft-primary text-primary">{{ $role ?? null }}</span>
                                    @endforeach
                                </td> 
                                <td>
                                    <i class="badge bg-soft-warning text-warning copy"> 
                                        @if (auth()->user()->isSuperadmin())
                                        {{ $item->api_token }}
                                        @else
                                        {{ mask($item->api_token) }}
                                        @endif
                                    </i>
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
                                    {{ $item->createdBy->name ?? null }}
                                    <span class="d-block text-muted">{{ dbToDate($item->created_at) ?? null }}</span>
                                </td>
                                <td>
                                    {{ $item->updatedBy->name ?? null }}
                                    <span class="d-block text-muted">{{ dbToDate($item->updated_at) ?? null }}</span>
                                </td>
                                <td>
                                    @can("user-update")
                                        <a class="btn btn-primary " href="javascript:void(0)" route="{{ route('dashboard.user.edit', $item->id) }}" data-toggle="dynamicModal"><i class="fa fa-edit"></i> Edit</a>
                                    @endcan
                                    @can("user-reset-password")
                                        <a class="btn btn-warning " href="javascript:void(0)" route="{{ route('dashboard.user.reset-password', $item->id) }}" data-toggle="dynamicModal"><i class="fa fa-key"></i> Reset Password</a>
                                    @endcan
                                    @can("user-pretend-login")
                                        <a class="btn btn-success" href="javascript:void(0)" onclick="return passwordResetConfirm(this);" route="{{ route('dashboard.user.pretend-login', $item->id) }}" ><i class="fa fa-arrow-right"></i> Pretend Login</a>
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


@push("scripts")
<script>
    function passwordResetConfirm(input) {
        Swal.fire({
            title: 'Are you sure ?',
            text: "Would you like to act as this user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, I want!',
            reverseButtons:true
        }).then((result) => {
            if (result.value) {
                window.location.href=input.getAttribute("route");
            } else {
                event.preventDefault();
                return;
            }
        })
    }
</script>
@endpush