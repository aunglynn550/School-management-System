@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
  </script>



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

		  <div class="col-12">
		  <div class="box bb-3 border-warning">
				  <div class="box-header">
					<h4 class="box-title">Manage<strong>Employee Attendance Report</strong></h4>
				  </div>

				  <div class="box-body">
					<form method="get" action="{{ route('report.attendance.get') }}" target="_blank">
                    @csrf
					<div class="row">
						 
					<div class="col-md-4">
                        <div class="form-group">
                                <h5>Employee Name<span class="text-danger"></span></h5>
                                <div class="controls">
                                <select name="employee_id" id="employee_id" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select Year</option>
                                    @foreach($employees as $employee)
                                    <option value="{{ $employee->id }}" >{{$employee->name}}</option>  
                                    @endforeach                                  
                                </select>
                                
                                </div>
                            </div>

                            
                    </div><!-- End col-md-4 -->

                

                    <div class="col-md-4">
                    <div class="form-group">
                            <h5>Date<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="date" name="date" class="form-control" required="">
                            
                            </div>
                        </div>

               </div><!-- End col-md-4 -->


					<div class="col-md-4" style="padding-top:25px;">
                    <input type="submit" class="btn btn-rounded btn-primary" value="Search">
                    </div><!-- End col-md-4 -->


					</div><!-- End Row -->
				        

			</form>
		
			        
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





<!-- Load class by subject -->

<script type="text/javascript">
  $(function(){
    $(document).on('change','#class_id',function(){
      var class_id = $('#class_id').val();
      $.ajax({
        url:"{{ route('marks.get.subject') }}",
        type:"GET",
        data:{class_id:class_id},
        success:function(data){
          var html = '<option value="">Select Subject</option>';
          $.each( data, function(key, v) {
            html += '<option value="'+v.id+'">'+v.school_subject.name+'</option>';
          });
          $('#assign_subject_id').html(html);
        }
      });
    });
  });
</script>



@endsection