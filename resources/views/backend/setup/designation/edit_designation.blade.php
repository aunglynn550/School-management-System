@extends('admin.admin_master')
@section('admin')



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit Designation</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{ route('update.designation',$editData->id) }}">
             <div class="row">
               <div class="col-12">
@csrf

 
<div class="form-group">
        <h5>Designation Name<span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="name" class="form-control" value="{{ $editData->name }}" >
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
    </div>
  


</div> <!--End row -->


               <div class="text-xs-right">
						      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
						  </div>
            

                 
                
                   
            
					</form>
               </div><!--col-md-12-->
             </div><!--row-->
             
				
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


	  
	  </div>
  </div>


@endsection