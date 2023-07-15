<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <tr>
    <td><h2>Easy Learning</h2></td>
    <td><h2>Easy School ERP</h2>
    <p>School Address</p> 
    <p>Phone : 34322334</p>
    <p>Email : support@easylearningbd.com</p>
    </td>
  </tr>
  <tr>

 
</table>

@php


        $registrationfee = App\Models\FeeCategoryAmount::where('fee_category_id','1')
        ->where('class_id',$details->class_id)->first();


        $originalfee = $registrationfee->amount;
        $discount = $details['discount']['discount'];
        $discounttablefee = $discount/100*$originalfee;
        $finalfee = (float)$originalfee-(float)$discounttablefee;

@endphp


<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Student Details</th>
    <th width="45%">Student Data</th>
  </tr>
  <tr>
    <td>2</td>
    <td><b>Roll No</b></td>
    <td>{{ $details->roll }}</td>
  </tr>
  
  <tr>
    <td>3</td>
    <td><b>Student Name</b></td>
    <td>{{ $details['student']['name'] }}</td>
  </tr>
  <tr>
    <td>4</td>
    <td><b>Father's Name</b></td>
    <td>{{ $details['student']['fname'] }}</td>
  </tr>

  <tr>
  
  <tr>
    <td>5</td>
    <td><b>Session</b></td>
    <td>{{ $details['student_year']['name'] }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td><b>Class</b></td>
    <td>{{ $details['student_class']['name'] }}</td>
  </tr>



  <tr>
    <td>7</td>
    <td><b>Registration Fee</b></td>
    <td>{{ $originalfee }}$</td>
  </tr>

  <tr>
    <td>8</td>
    <td><b>Discount Fee</b></td>
    <td>{{ $discount }} %</td>
  </tr>

  <tr>
    <td>9</td>
    <td><b>Fee For this Student</b></td>
    <td>{{ $finalfee }}$</td>
  </tr>

  
 
</table>
<br>
<br>

<i style="font-size:10px; float:right;">Print Data : {{ date("d M Y") }}</i>

<hr style="border: dashed 2px; width:95%; color:#ddd; margin-bottom:50px;" >



<table id="customer">
  <tr>
    <th width="10%">SL</th>
    <th width="45%">Student Details</th>
    <th width="45%">Student Data</th>
  </tr>
  <tr>
    <td>2</td>
    <td><b>Roll No</b></td>
    <td>{{ $details->roll }}</td>
  </tr>
  
  <tr>
    <td>3</td>
    <td><b>Student Name</b></td>
    <td>{{ $details['student']['name'] }}</td>
  </tr>
  <tr>
    <td>4</td>
    <td><b>Father's Name</b></td>
    <td>{{ $details['student']['fname'] }}</td>
  </tr>

  <tr>
  
  <tr>
    <td>5</td>
    <td><b>Session</b></td>
    <td>{{ $details['student_year']['name'] }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td><b>Class</b></td>
    <td>{{ $details['student_class']['name'] }}</td>
  </tr>



  <tr>
    <td>7</td>
    <td><b>Registration Fee</b></td>
    <td>{{ $originalfee }}$</td>
  </tr>

  <tr>
    <td>8</td>
    <td><b>Discount Fee</b></td>
    <td>{{ $discount }} %</td>
  </tr>

  <tr>
    <td>9</td>
    <td><b>Fee For this Student</b></td>
    <td>{{ $finalfee }}$</td>
  </tr>

  
 
</table>

</body>
</html>