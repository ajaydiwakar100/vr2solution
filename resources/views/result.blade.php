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
      <br>
      <br>


      <div class="card" >
        <div class="card-body">
          <h5 class="card-title">Your Result</h5>
          @php
            $Wrong = $total_quest - $points;
          @endphp
          @if($Wrong == 0)
            <p class="text-success">Congratulations you won the  quiz</p>
          @elseif($Wrong < 2)
            <p class="text-danger">{{$Wrong }} wrong out of { $total_quest }}.Better luck next time</p>

          @elseif($Wrong == 2)
            <p class="text-danger">{{$Wrong }} wrong out of {{ $total_quest }}.Better luck next time</p>

          @else
            
            <p class="text-danger">All answer are wrong.Better luck next time</p>

          @endif()
          <p class="card-text">Total Point : {{ $total_quest }} points </p>
          <p class="card-text">Your earned points : {{$points}} Points </p>
         
          <p class="card-text">Total wrong: {{$Wrong}} </p>

          
        </div>
      </div>  
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>