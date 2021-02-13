@extends('backend.app')


@section('breadcrumb')
    
        <ol class="breadcrumb">
            <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('acl-permission')}}">Permission</a></li>

        </ol>
  @endsection  
@section('content')
		<!-- begin #content -->
		<div id="content" class="content">

			<div class="row">
			    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-info">
                            ACL Permission
                            <div class="card-btn pull-right">
                                <a href="{{URL::to('acl-permission/roles')}}" class="btn btn-primary btn-sm">ACL Roles</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4 class="text-danger text-center"> This section is only for Developer. </h4>
                        	{!! Form::open(array('route' => 'acl-permission.store','class'=>'form-horizontal','method'=>'POST','role'=>'form')) !!}
                        	<div class="form-group row">
                                <label class="control-label col-md-2">Permission Name :</label>
                                <div class="col-md-5">
                                 	<input type="text" class="form-control" name="name" value="" placeholder="Permission Name">
                                </div>
                                <div class="col-md-2">
                                    {{Form::select('type',['1'=>'Resource','2'=>'Normal'],2,['class'=>'form-control','required'])}}
                                </div>
                                <div class="col-md-2">
                                	<button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                             {!! Form::close(); !!}   

                        <!--  -->
                        <div class="table-responsive ">

	                            <table id="data-table" class="table table-striped table-bordered" width="100%">
	                                <thead>
	                                    <tr>
	                                        <th width="10%">Sl</th>
	                                        <th width="30%">Permission Name</th>
	                                        <th width="20%">Resource</th>
	                                        <th width="20%">Slug</th>
	                                        <th width="10%">Status</th>
	                                        <th width="25%">Action</th>
	                                    </tr>
	                                </thead>
                                    <tbody>




                                </tbody>

	                            </table>
                                    <div class="pull-right">

                                        {{ $alldata->render() }}

                                    </div>
	                        </div>	
                        </div>
                    </div>
			    </div>
			</div>
		</div>
		<!-- end #content -->
    @endsection
    @section('script')
        <script>
            $(function() {
                $('#data-table').DataTable( {
                    processing: true,
                    serverSide: true,

                    ajax: '{{ URL::to("acl-permission/create") }}',
                    columns: [
                        { data: 'DT_Row_Index',orderable:false},
                        { data: 'name',name:'permissions.name'},
                        { data: 'resource',name:'permissions.resource'},
                        { data: 'slug',name:'permissions.slug'},
                        { data: 'status'},
                        { data: 'action'},
                    ]
                });

            });
        </script>
    @endsection
