@extends('layouts.fixed')
@section('content')
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="width:296.5px; height:128.4px">
            <div class="inner">
              <h3>150</h3>

              <p><button style="font-size:15px ;background-color:#00c0ef">Doctors  <i class="fa fa-check-circle-o" aria-hidden="true"></i></button></p>
            </div>
            <div class="icon">
            <i class="fa fa-stethoscope"></i>
            </div>
          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green"style="width:296.5px; height:128.4px;">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p><button style="font-size:15px ;background-color:#04AA6D">Patients  <i class="fa fa-check-circle-o" aria-hidden="true"></i></button></p>
            </div>
            <div class="icon">
            <i class="fa fa-user"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow"style="width:296.5px; height:128.4px">
            <div class="inner">
              <h3>44</h3>

              <p><button style="font-size:15px;background:rgba(0,0,0,0.1);	">Attend  <i class="fa fa-check-circle-o" aria-hidden="true"></i></button></p>
            </div>
            <div class="icon">
             <i class="fa fa-user-md"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red" style="width:296.5px; height:128.4px">
            <div class="inner">
              <h3>65</h3>

              <p><button style="font-size:15px ;background-color:#dd4b39 ">pending <i class="fa fa-check-circle-o" aria-hidden="true"></i></button></p>
            </div>
            <div class="icon">
            <i class="fa fa-heartbeat"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      
        <div class="row" style="margin-left:10px">
        <div class="col-md-8">
          <div class="box box-success">
            <div class="box-header with-border">
              <h2 class="box-title">Upcoming Appoiments</h2>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center " style="margin-top:50px">
              <h3> 0Appoiments</h3>
            </div>
            <!-- /.box-body -->
          </div>
                </div>
                <div class="col-md-4">
                <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">No Doctors</h3></div></div></div></div>
<div class="row" style="margin-left:10px">
              <div class="col-md-8">
          <div class="box box-success">
            <div class="box-header with-border">
              <h2 class="box-title">Approved Appoiments</h2>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center " style="margin-top:50px">
             <h3>  0Approved Appoiments</h3>
            </div>
            <!-- /.box-body -->
          </div></div>
        
          <div class="col-md-8">
          <div class="box box-success">
            <div class="box-header with-border">
              <h2 class="box-title">New Patients</h2>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center " style="margin-top:50px">
             <h3>  0Patients</h3>
            </div>
            <!-- /.box-body -->
          </div></div>

</section>
@endsection