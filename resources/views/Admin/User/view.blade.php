@extends('Admin.mainlayout')
@section('content')

<section class="content-header">
    <h1>
       User List
        <small>Dashboard</small>
    </h1>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
	            <div class="card">
		            <div class="card-body">
		            	  @include('Admin.alert_message')


		                <table id="example2" class="table table-bordered table-striped dataTable">
		               	   	<thead>
			            	    <tr>
			                	    <th>Sno</th>
			                    	<th>Name</th>
			                   	 	<th>Email</th>
			                    	<th>Action</th>
			                	</tr>
		                  	</thead>
		                  	<tbody>
		                  		@foreach($User as $no => $user)
		                  		<tr>
		                  				<td>{{$no+1}}</td>
			                  			<td>{{$user->name}}</td>
			                  			<td>{{$user->email}}</td>
			                  			<td>
			                  				<a href="{{URL('admin/user/delete')}}/{{$user->id}}">
			                  				{{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}</a>
			                  			</td>
			                  		
		                  		</tr>	
		                  		@endforeach()
		                  	</tbody>
		                </table>
		                <div>
		                	{{ $User->links() }}
		                </div>	
	              	</div>
				</div>
			</div>	
		</div>
	</div>
</section>
@stop