@include('inc.header')

<div class="container">
	<div class="col-md-6">

		<form class="form-horizontal" method="POST" action="{{  }}">
		  <fieldset>
		    <legend>Laravel CRUP APP</legend>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
		      <div class="col-lg-10">
		        <input class="form-control" name="title" id="inputEmail" placeholder="Title" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPassword" name="description" class="col-lg-2 control-label">Description</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="inputPassword" placeholder="Description" type="text">
		        
		      </div>
		    </div>
		    
		    
		    
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <a href=""><button type="reset" class="btn btn-default">Cancel</button></a>
		        <a href=""><button type="submit" class="btn btn-primary">Submit</button></a>
		      </div>
		    </div>
		  </fieldset>
		</form>
		
	</div>
</div>

@include('inc.footer')