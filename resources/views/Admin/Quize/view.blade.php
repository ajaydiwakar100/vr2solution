@extends('Admin.mainlayout')
@section('content')

<section class="content-header">
    <h1>
       Quiz 
        <small>Dashboard</small>
    </h1>
    <div class="text-right">
      <a href="{{URL('admin/quize/add')}}">
        {{ Form::submit('Add',array('class'=>'btn btn-primary')) }}
      </a>
    </div>  
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    @include('Admin.alert_message')


                    <table  id="example1" class="table table-bordered table-striped dataTable">
                        <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Question</th>
                            <th>Option A</th>
                            <th>Option B</th>
                            <th>Option C</th>
                            <th>Option D</th>
                            <th>Answer</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($Quize as $no => $quize)
                          <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$quize->question}}</td>
                            <td>{{$quize->option_a}}</td>
                            <td>{{$quize->option_b}}</td>
                            <td>{{$quize->option_c}}</td>
                            <td>{{$quize->option_d}}</td>
                            <td>{{$quize->answer}}</td>
                            <td>
                              <a href="{{URL('admin/quize/edit')}}/{{$quize->id}}">{{ Form::submit('Edit',array('class'=>'btn btn-primary')) }}</a>
                            </td>
                            <td>
                              <a href="{{URL('admin/quize/delete')}}/{{$quize->id}}">
                              {{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}</a>
                            </td>
                          </tr> 
                          @endforeach()
                        </tbody>
                    </table>
                    <div>
                      {{ $Quize->links() }}
                    </div>  
                  </div>
        </div>
      </div>  
    </div>
  </div>
</section>
@stop