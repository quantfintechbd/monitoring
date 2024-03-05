@extends("Main::layouts.app")


@section('content')
<div class="row">
    <div class="col-lg-5 col-md-8 col-sm-12">                        
        <h2>{{ __('Roles') }}</h2>
    </div>            
    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
        <ul class="breadcrumb justify-content-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="icon-home"></i></a></li>                            
            <li class="breadcrumb-item">Role & Permission</li>
            <li class="breadcrumb-item active">Roles</li>
        </ul>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card bg-white"> 
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">Role List - (showing {{ $result->firstItem()??0 }} to {{ $result->lastItem()??0 }} of total {{ $result->total()??0 }} entries)</h6>

                    <div class="btn-group">
                        @can('role-create')
                        <a href="{{  route('dashboard.role.has-permission.create')  }}" class="btn btn-info d-flex align-items-center font-weight-medium">
                            <i class="icon-plus pr-2"></i>
                            Add New Role
                        </a>
                        @endcan
                    </div>
                </div> 
            </div>

            <div class="card-body p-0"> 
                <div class="table-responsive rounded-10 border">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-top-0">SL. No.</th>
                                <th class="border-top-0">Role Name</th>
                                <th class="border-top-0">Total Permission</th>
                                <th class="border-top-0">Created Date</th>
                                <th class="border-top-0">Updated Date</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($result) && $result->count() > 0)
                            @foreach($result as $item)
                            <tr>
                                <td>{{ $loop->index + ($result->firstItem()??0) }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->permissions->count()??'0' }}</td>
                                <td>{{ dbToDateTime($item->created_at) }}</td>
                                <td>{{ dbToDateTime($item->updated_at) }}</td>
                                <td>
                                    @can("role-update")
                                    <a href="{{  route('dashboard.role.has-permission.edit', $item->id)  }}" class="btn btn-primary " title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mt-3 mb-0 px-3">  
                        @if (!empty($result) && $result->count() > 0)
                            {{ $result->appends($_REQUEST)->render() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection