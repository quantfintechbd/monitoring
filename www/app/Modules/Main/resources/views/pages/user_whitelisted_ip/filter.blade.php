<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="font-weight-medium mb-0">{{ $pageName ?? null}} Filter</h6>
                    <button class="btn btn-light text-primary d-flex align-items-center px-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <img class="" src="{{ asset('assets/images/icon/arrow-square-down.svg') }}" width="18" alt="">
                    </button>
                </div>
            </div>
            <div class="collapse {{ request()->has('_filter') ? 'show' : '' }}" id="collapseExample">
                <div class="body project_report">
                    {{Form::model($_REQUEST,['method' => 'get'])}}
                    <div class="row"> 
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label>User</label>
                                {{Form::select('user_id', $users, null, ['class' => 'form-control select2', "placeholder"=>"Select"])}}
                            </div>
                        </div>                        
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label>IP Address</label>
                                {{Form::text('ip_address', null, ['class' => 'form-control', "placeholder"=>"eg:- 192.168.0.1"])}}
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label>Status</label>
                                {{Form::select('status', $status, null, ['class' => 'form-control select2', "placeholder"=>"Select"])}}
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="_filter" class="btn btn-lg btn-primary">
                        <i class="icon-magnifier"></i>
                        Filter
                    </button>
                    <a href="{{ url()->current() }}" id="" class="ml-2 text-muted">Cancel</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>