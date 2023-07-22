@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
  </script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit Grade Marks </h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row"><!--main row -->
       <div class="col"><!--main col -->
           <form method="post" action="{{ route('update.marks.grade',$editData->id) }}">
           @csrf

             <div class="row">
               <div class="col-12">


               <div class="row"><!--1st row -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>Grade Name<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="grade_name" class="form-control" required="" value="{{ $editData->grade_name }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>Grade Point<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="grade_point" class="form-control" required="" value="{{ $editData->grade_point }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>Start Marks<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="start_marks" class="form-control" required="" value="{{ $editData->start_marks }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               </div><!-- End 1st row -->



               <div class="row"><!--2nd row -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>End Marks<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="end_marks" class="form-control" required="" value="{{ $editData->end_marks }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>Start Points<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="start_point" class="form-control" required="" value="{{ $editData->start_point }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               <div class="col-4">
                    <div class="form-group">
                            <h5>End Points<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="end_point" class="form-control" required="" value="{{ $editData->end_point }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->
               </div><!-- End 2nd row -->
 
   


               <div class="row"><!--3rd row -->

               <div class="col-4">
                    <div class="form-group">
                            <h5>Remarks<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="remarks" class="form-control" required="" value="{{ $editData->remarks }}">
                            
                            </div>
                        </div>

               </div><!-- End col 4 -->

               <div class="col-4">
                    
               </div><!-- End col 4 -->
             

               </div><!-- End col 4 -->
          

               </div><!-- End 3rd row -->




                        <div class="text-xs-right">
						      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
						</div>

            
					</form>
               </div><!--col-md-12-->
             </div><!--row-->
             
				

                </div><!--End main col-->
            </div>


			</div><!--End main row-->


			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


	  
	  </div><!--End content-wrapper-->
  </div><!--End container-full -->


@endsection