
	<div class="container blog">
	<div class="row">

		<div class="col-xs-12 col-sm-5 col-md-5 col-sm-offset-3 col-md-offset-3">

		<h1 class="lead text-center">Publish A Post</h1>

		<hr>

			<form method="POST" action="/blog" class="form-horizontal" role="form">
				  {{ csrf_field() }}
				  @include('otk.error')
			      <div class="form-group">
                  	<label for="category" class="control-label">Category</label>
                 		 <input type="text" name="category" class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="title" class="control-label">Title</label>
                 		 <input type="text" name="title" class="form-control">
                  </div>

                  	<div class="form-group">
						<label for="body">Body</label>
							<textarea name="body" class="form-control" rows="3"></textarea>
					</div>

                  <div class="form-group">
                  		<button type="submit" class="btn btn-primary">Publish</button>
                  </div>
            </form>
		
		</div>
	
	</div>
	</div>