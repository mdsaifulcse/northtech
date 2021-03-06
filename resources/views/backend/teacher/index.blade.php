@extends('backend.app')


@section('breadcrumb')

      <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="{{URL::to('teachers')}}">Teacher</li>
      </ol>
    </section>
@endsection


@section('content')


<div class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">View All Teacher</h3>

            <h3 class="pull-right box-title"><a href="{{URL::to('teachers/create')}}">
                    <button type="button" class="btn btn-success">Create new Teacher</button>
                </a></h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th width="5%">Sl.No</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Qualification</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="table table-striped table-bordered nowrap">


                                <?php $i=1; ?>
                                @foreach($allUsers as $user)

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$i++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->qualification}}</td>
                                        <td>
                                            {{Form::open(array('route'=>['teachers.destroy',$user->id],'method'=>'DELETE','id'=>"deleteForm$user->id"))}}

                                            <a href='{{URL::to("teachers/$user->id")}}' title="Edit Teacher" class="btn btn-info btn-xs">
                                                <i class="fa fa-pencil-square"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$user->id}}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                @endforeach



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">

                            {{$allUsers->render()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <!-- /.box-body -->


@endsection
