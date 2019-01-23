@extends('layouts.admin_template')


@section('content_header')
@endsection


@section('content')
<div class="row">
	<div class="col-md-12">
	@if (session()->has('flash_notification.message'))
		<div class="alert alert-{{ session('flash_notification.level') }}">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  {!! session('flash_notification.message') !!}
		</div>
	@endif
	</div>
</div> 

<div class="row">
<div class="col-md-12">
  	<div class="box">
	  	
	    <div class="box-header text-right">
	      	<a href="{{ url('admin/service/create') }}" class="btn btn-flat btn-primary">Create</a>
	    </div>
		    <!-- /.box-header -->
		
	    <div class="box-body">
	      <table id="articles" class="table table-bordered table-striped">
	        <thead>
	        <tr>
	          <th>ID</th>
	          <th>Photo</th>
	          <th>Description</th>
	          <th>Created at</th>
	        </tr>
	        </thead>
	        <tbody>
	        @foreach($services as $service)
	        <tr>
	          <td>{{ $service->id }}</td>
	          <td>{{ $service->photo }}</td>
	          <td>{{ $article->description }}</td>
	          <!-- <td><a class="btn btn-success btn-flat" href="{{ url('article-admin/article/'. $article->id . '/edit') }}">ပြင်ဆင်မည်</a></td> -->
	        </tr>
	        @endforeach
	        </tbody>
	      </table>
	    </div>
	    <!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
<!-- /.col -->
</div>
@endsection


@section('footer')
@endsection