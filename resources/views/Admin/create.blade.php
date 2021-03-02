@extends('layouts.fixed')
@section('content')


    
      <!-- Small boxes (Stat box) -->
     
      
      <section class="content">
      <!-- Small boxes (Stat box) -->
      <form method="post" action='{{route("Admin-doctor.index")}}'>
        @csrf
      <div class="row">
        <div class="col-md-3 col-xs-6">
        
              <label> Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control m-input" >
                           
                   </div>
       
        <div class="col-md-3 col-xs-6">
        
              <label> Degree</label>
            <input type="text" name="degree" value="{{old('degree')}}" class="form-control m-input" >
                           
          
          </div>
        </div>
        <div class="row">
        <div class="col-md-3 col-xs-6">
        
              <label> User Name</label>
            <input type="text" name="username" value="{{old('username')}}" class="form-control m-input" >
                           
                   </div>
       
        <div class="col-md-3 col-xs-6">
        
              <label> Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control m-input" >
                           
          
          </div>
        </div>
        <div class="row">
        <div class="col-md-3 col-xs-6">
        
              <label> Date Of Birth</label>
            <input type="date" name="DOB" value="{{old('DOB')}}" class="form-control m-input" >
                           
                   </div>
       
<br>
        <div class="col-md-3 auto" style="margin-bottom:($spacer * .25) ">
          <label> Gender:</label>
        <div class="m-radio-inline ">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('gender')=='f'?"checked":""}} type="radio" name="gender" checked="" value="f"
                                    aria-describedby="account_group-error"> Femal
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input {{old('gender')=='m'?"checked":""}} type="radio" name="gender" value="m"> Male
                                <span></span>
                            </label>
                        </div>
                           
          
          </div>
          
        </div>


<br>
        <div class="row">
        <div class="col-md-4 col-xs-6">
                <label for="department_id" > Department</label><br>
               <select class="form -control" name="department_id" id="cities_id" style="width:150px;height:34px">
               <option value=""></option>
               
                @foreach( $departments as  $department)
                <option {{old('department_id')==$department->id?'selected':''}} value='{{$department->id}}'>{{$department->name}} </option>
                @endforeach
               </select>
               </div>
               <div class="col-md-1 col-xs-6" style="margin-left:-280px;margin-left:-250px">
        
        <label> Charge</label>
      <input type="text" name="charge" value="{{old('charge')}}" class="form-control m-input" >
                     
    
    </div>
    <div class="col-md-7 col-xs-6" style="margin-left:-100px">
                <label for="specialist_id" > Specialist</label><br>
               <select class="form -control" name="specialist_id" id="cities_id" style="width:150px;height:34px">
               <option value=""></option>
               
                @foreach(  $specialists as  $specialist)
                <option {{old('specialist_id')==$specialist->id?'selected':''}} value='{{ $specialist->id}}'>{{ $specialist->name}} </option>
                @endforeach
               </select>
               </div>
              </div>




        <div class="row">
                       
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
</form>
</section>
             
           
          
@endsection