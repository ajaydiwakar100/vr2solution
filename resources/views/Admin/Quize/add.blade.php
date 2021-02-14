@extends('Admin.mainlayout')
@section('content')

<section class="content-header">
      <h1>
        Add Quiz
      </h1>
</section>
<section class="content">
  <div class="box with-border" >
    <div class="box-body">
       @include('Admin.alert_message')

        {!!Form::open(['url'=>'admin/quize/save', 'enctype' => 'multipart/form-data', 'method'=>'post']) !!}    
            <div class="form-group">
              <div class="col-lg-12">
                {!!Form::label('question','Question') !!} <span style="color:red;">*</span>
           
                {!!Form::textarea('question',null,['class' => 'form-control','placeholder' => 'Please Enter Question','required' => 'required']) !!}
   
              </div>
              <div class="col-lg-12">
                {!!Form::label('option_a','Option A') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_a',null,['class' => 'form-control','placeholder' => 'Please Enter Option A','required' => 'required']) !!}
   
              </div>

              <div class="col-lg-12">
                {!!Form::label('option_b','Option B') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_b',null,['class' => 'form-control','placeholder' => 'Please Enter Option B','required' => 'required']) !!}
   
              </div>

              
              <div class="col-lg-12">
                {!!Form::label('option_c','Option C') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_c',null,['class' => 'form-control','placeholder' => 'Please Enter option C','required' => 'required']) !!}
   
              </div>

              
              <div class="col-lg-12">
                {!!Form::label('option_d','Option D') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_d',null,['class' => 'form-control','placeholder' => 'Please Enter option D','required' => 'required']) !!}
   
              </div>


              <div class="col-lg-12">
                {!!Form::label('answer','Answer') !!} <span style="color:red;">*</span>
           
                {!!Form::text('answer',null,['class' => 'form-control','placeholder' => 'Please Enter answer','required' => 'required']) !!}
   
              </div>

              


                                  
              <div class="col-md-12" style="margin-top: 20px; float:right;">
                <div class="row">
                    <div class="col-md-1 ">
                      <a href="">{!! Form::button('Cancle',array('class'=>'btn btn-deflaut')) !!} </a>
                    </div>  
                    <div class="col-md-1 ">
                      {!! Form::submit('Save',array('class'=>'btn btn-primary')) !!}
                    </div>
                    
                </div>    
              </div>  
            </div>  
        {!!Form::close()!!}                           
    </div>
  </div>    
</section>  
@stop