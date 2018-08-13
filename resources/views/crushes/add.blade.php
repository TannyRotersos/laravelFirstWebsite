 <form action="{{ $action}}" method="POST">
  	{{csrf_field()}}


  	<label>Quality:</label>
  	<input type="text" name="qualities">
  	<br>
   
  	<button type="submit">{{$submit_text}}</button>

  </form>