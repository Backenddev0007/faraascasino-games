@extends('layout.default')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="jumbotron numberofplayers col-md-4">
    <form action="post_to_me" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Number of Players |</label>
    <input type="text" class="form-control " name="playernumber" id="playernumber" placeholder="Number Of players">
  </div>
  
  <button type="submit" class="btn go btn-danger">Go</button>
</form>
</div>
</div>
</div>
  
    

        
@endsection