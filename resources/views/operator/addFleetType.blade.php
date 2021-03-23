<?php 
$ActiveSide='fleet';
?> 	
@extends('operator.layouts.app')

@section('title','Add Fleet Type')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">


	  <!-- Main content -->
	  <section class="content">
    <?php
    $ActiveSub="fleettype";
    ?>
@include('operator.layouts.fleetHeader')

	  	<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
	  <span class="info-box-icon bg-blue"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
	  <div class="info-box-content">
	    <span class="info-box-text">Add Fleet Type</span>
	    <span class="info-box-number"></span>
	  </div>
	  <!-- /.info-box-content -->
	</div>

	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Fleet Type</h3>
	          </div>
	    		@include('includes.messages')      
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('opaddFleetType') }}" method="post"  enctype="multipart/form-data">
	          {{ csrf_field() }}
	          {{ method_field('POST') }}
	            <div class="box-body">
	            
   		 <div class="form-group col-md-6">
	                <label for="name">Parent Type</label>
	           
	                 <select class="form-control select2" name="parent_type"  data-placeholder="Select Parent Type" aria-hidden="true">
	                 	<option value="">Select Parent Type</option>
                    @foreach ($parentTypes as $Types)
                    <option value="{{ $Types->PARENT_TYPE_CODE }}">{{ $Types->PARENT_TYPE_NAME }}</option>
                    @endforeach
                  </select>
	         
	    </div>
    	
    	 <div class="form-group col-md-6">
	                <label for="name">Type Name</label>
	                <input type="text" class="form-control" name="type_name" value="{{old('type_name')}}" placeholder="Type Name" >
	       </div>

   		

	    
   		 <div class="form-group col-md-6">
	                <label for="name">Seat Count</label>
	                <input type="text" class="form-control" name="seat_count" value="{{old('seat_count')}}" placeholder="Seat Count" >
	      </div>

   		
	    <div class="form-group col-md-6">
       <label>Description</label>
            <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
     
    	</div>

				<div class="clearfix"></div>

	            <div class="form-group col-md-6">
	             <button type="submit" class="btn btn-primary">Submit</button>
	             
	            </div>
	            	
	            </div>
					
				</div>

	          </form>
	        </div>
	        <!-- /.box -->

	        
	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->

	<!-- /.content-wrapper -->
@endsection
@section('footerSection')

<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>

<script>
  $(document).ready(function() {
  
  });
</script>
@endsection