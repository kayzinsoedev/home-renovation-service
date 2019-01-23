@extends('layouts.admin_template')

@section('content_header')
@endsection


@section('content')
<div class="row">
<!-- form start -->
@if(isset($services))	
	{!! Form::model($service ,['url'=>'admin/service/'.$service->id,'class'=>'form-horizontal' , 'id' => 'ajax-form', 'method'=>'put']) !!}
@else
	{!! Form::open(['url'=>'admin/service','class'=>'form-horizontal', 'id' => 'ajax-form','method'=>'service']) !!} 
@endif
		<div class="col-md-12">

			<div class="box box-primary">
				<div class="box-header with-border">
		        	<h3 class="box-title">Services</h3>
		      	</div>
		      	<!-- /.box-header -->
		      	<div class="box-body">
		  			<div class="form-group">
						<label for="title" class="col-sm-2 control-label">Photo</label>
						<div class="col-sm-10">
						@if(isset($service->photo))
							<div class="col-sm-4">
								<div class="col-sm-6">
									<img src="" class="img-responsive">
								</div>
							</div>
						@else
							<div class="col-sm-4">
								<div class="col-sm-6">
									<img src="../../images/userphoto.png" class="" style="width: 200px;height: 200px;">
								</div>
							</div>

						@endif
						</div>
					</div>

					<div class="form-group">
						<label for="des" class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">
						@if(isset($service))
						  {!! Form::textarea('content', null, array('class' => 'form-control', 'required' => 'required')); !!}
						@else
						  {!! Form::textarea('content', null, array('class' => 'form-control', 'required' => 'required')); !!}
						@endif

						@if ($errors->has('content'))
						<span class="help-block">
						    <strong>{{ $errors->first('content') }}</strong>
						</span>
						@endif
						</div>
					</div>					

		      	</div>
		      	<!--box-body-->

		      	<div class="box-footer">
		      		@if(isset($service))
				      <button type="submit" class="btn btn-primary btn-flat pull-right">Update</button>
				    @else
				      <button type="submit" class="btn btn-primary btn-flat pull-right">Create</button>
				    @endif
				</div>
			</div>
			<!--box-primary-->
		</div>
	<!-- /.col -->
	{!! Form::close(); !!}
</div>
@endsection


@section('footer')
@endsection