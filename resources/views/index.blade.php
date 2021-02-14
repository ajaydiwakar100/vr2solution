<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>V2R SOLUTION</title>
  </head>
  <body>
    <div class="container">
      <div  class="text-center" style="margin-top: 20px;">
        <h3>{{$user}} Your Quiz Start</h3>
      </div>
        
      <div class="card" >
      @if( $CheckuserLog == 0)
        <div class="card-body">
            
          {!!Form::open(['url'=>'/check-answer', 'enctype' => 'multipart/form-data', 'method'=>'post']) !!}    
            @foreach($Question as $no => $question)

              <h5 class="card-title">{{$no+1}}. {{$question->question}}</h5>
              <p class="card-text">
                <label><input type="radio" name="{{$question->id}}"  value="{{$question->option_a}}" > &nbsp;{{$question->option_a}}</label>
                <br>
                <label><input type="radio" name="{{$question->id}}" value="{{$question->option_b}}">&nbsp; {{$question->option_b}}</label>
                <br>
                <label><input type="radio" name="{{$question->id}}" value="{{$question->option_c}}"> &nbsp;{{$question->option_c}}</label>
                <br>
                <label><input type="radio" name="{{$question->id}}"  value="{{$question->option_d}}">&nbsp; {{$question->option_d}}</label>
                <br>


              
              </p>
              <br>
              <br>
            @endforeach()
            <div class="text-center">  
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>  
          {!!Form::close()!!}                            
        </div>
      @else
        <div class="card-body">
          You already play Quiz.Now You will get question after 24 hrs.Thank you   
        </div>
      @endif()
      </div>  
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>