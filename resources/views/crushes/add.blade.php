
			
			
 <form action="{{ $action}}" method="POST">
  	{{csrf_field()}}


  	<label>Quality:</label>
  	<input type="text" name="qualities">
  	<br>


   	@foreach($crushes as $crush )
  	<button type="submit" name="id2" value="{{$crush->id}}">{{$submit_text}}</button>
  	@endforeach	
  	

  </form>


