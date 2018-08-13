@foreach($crushes as $crush )
	


			{{ $crush->first_name}}<br>
			{{ $crush->last_name}}<br>
			<a href="{{ $crush->fb_profile_link}}">{{ $crush->fb_profile_link}}</a><br>
			{{ $crush->contact_number}}<br>
			




	@foreach($qualities as $qualities )
		
			{{ $qualities->qualities}} <a href="{{ route ('qualities.id.destroy', array('id2'=>$qualities->id))}}">Delete</a><br>
			
			

	@endforeach

			<a href="{{ route('crushes.id.add', array('id'=>$crush->id))}}">Add New Qualities</a>
		

@endforeach					
