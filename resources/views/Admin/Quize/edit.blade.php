@extends('Admin.mainlayout')
@section('content')

<section class="content-header">
      <h1>
        Edit Product
      </h1>
</section>
<section class="content">
  <div class="box with-border" >
    <div class="box-body">
       @include('Admin.alert_message')

        {!!Form::open(['url'=>'admin/quize/save-edit', 'enctype' => 'multipart/form-data', 'method'=>'post']) !!}    
            
            <div class="form-group">
              <div class="col-lg-12">
                {!!Form::hidden('id',$Quize->id) !!} 
                
                {!!Form::label('question','Question') !!} <span style="color:red;">*</span>
                {!!Form::textarea('question',$Quize->question,['class' => 'form-control','placeholder' => 'Please Enter Question','required' => 'required']) !!}
   
              </div>
              <div class="col-lg-12">
                {!!Form::label('option_a','Option A') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_a',$Quize->option_a,['class' => 'form-control','placeholder' => 'Please Enter Option A','required' => 'required']) !!}
   
              </div>

              <div class="col-lg-12">
                {!!Form::label('option_b','Option B') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_b',$Quize->option_b,['class' => 'form-control','placeholder' => 'Please Enter Option B','required' => 'required']) !!}
   
              </div>

              
              <div class="col-lg-12">
                {!!Form::label('option_c','Option C') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_c',$Quize->option_c,['class' => 'form-control','placeholder' => 'Please Enter option C','required' => 'required']) !!}
   
              </div>

              
              <div class="col-lg-12">
                {!!Form::label('option_d','Option D') !!} <span style="color:red;">*</span>
           
                {!!Form::text('option_d',$Quize->option_d,['class' => 'form-control','placeholder' => 'Please Enter option D','required' => 'required']) !!}
   
              </div>


              <div class="col-lg-12">
                {!!Form::label('answer','Answer') !!} <span style="color:red;">*</span>
           
                {!!Form::text('answer',$Quize->answer,['class' => 'form-control','placeholder' => 'Please Enter answer','required' => 'required']) !!}
   
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
