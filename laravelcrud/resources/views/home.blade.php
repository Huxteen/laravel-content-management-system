@include('inc.header')

<div class="container">
	<div class="col-md-12">
		
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Title</th>
		      <th>Description</th>
		      <th>Action </th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count)
		    <tr>
		      <td>1</td>
		      <td>Column content</td>
		      <td>Column content</td>
		      <td>
		      	<a href="{{ url('') }}" class="label label-primary">Read</a> |
		      	<a href="{{ url('') }}" class="label label-success">Update</a> |
		      	<a href="{{ url('') }}" class="label label-danger">Delete</a>	      	
			  </td>
		    </tr> 
		  </tbody>
		</table> 
	
	</div>
</div>

@include('inc.footer')