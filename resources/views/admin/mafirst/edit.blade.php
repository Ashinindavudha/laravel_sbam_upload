@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Text Editors
		<small>Advanced form element</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Editors</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
<div class="col-md-12">


<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Title</h3>
	</div>
	@include('admin.layouts.errors')
	<!-- form start -->
	<form action="{{route('first.update', $lecturer->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		{{ method_field('PATCH') }}
<div class="box-body">
	<div class="col-lg-6">
		<div class="form-group">
			<label for="day">Day</label>
			<input type="text" class="form-control" id="day" name="day" placeholder="Day"
			value="{{ $lecturer->day }}">
		</div>

		<div class="form-group">
			<label for="time">Time</label>
			<input type="text" class="form-control" id="time" name="time" placeholder="Time" value="{{ $lecturer->time }}">
		</div>

		<div class="form-group">
			<label for="semester">Semester</label>
			<input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" value="{{ $lecturer->semester }}">
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{ $lecturer->subject }}">
		</div>
		<div class="form-group">
			<label for="lecturer">Leecturer</label>
			<input type="text" class="form-control" id="lecturer" name="lecturer" placeholder="Lecturer" value="{{ $lecturer->lecturer }}">
		</div>
		
		
		
	</div>
</div><!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="" class="btn btn-primary" value="Submit">
						<a href="{{ route('first.index') }}" class="btn btn-warning">Back</a>
					</div>
				</form>
			</div>



			
		</div><!-- /.col-->
	</div><!-- ./row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<!-- <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>  -->  

<script src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
<script>
$(function () {
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace('editor1');
//bootstrap WYSIHTML5 - text editor
$(".textarea").wysihtml5();
});
</script>


<script>
$(document).ready(function(){
	$(".select2").select2();
});
</script>
@endsection