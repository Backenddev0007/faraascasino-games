@extends('layout.default')

@section('content')
<?php $value=session('number'); ?>


<div class="container-fluid">

<div class="row">
<div class="jumbotron nameofplayers col-md-4">
	 <form action="game_view" method="post">	
	 <div class="form-group">
	 <?php for($i=0;$i<$value;$i++){ ?>

	 <label for="player1">Player #{{ ($i+1) }} |</label>
	 <input type="text"  class="form-control" id="player ".{{$i+1}} name="player{{($i+1)}}" placeholder="Player #{{($i+1)}}">
	<?php } ?>
	 
	

	 <button type="submit" class="btn btn-danger go">GO</button>
	 </div> 

	 </form>
</div>
</div>
</div>

@endsection