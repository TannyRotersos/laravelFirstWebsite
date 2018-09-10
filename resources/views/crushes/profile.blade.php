@foreach($crushes as $crush )
	


			FIRST NAME : {{ $crush->first_name}}<br><br>
			LAST NAME: {{ $crush->last_name}}<br><br>
			FB PROFILE LINK: <a href="{{ $crush->fb_profile_link}}">{{ $crush->fb_profile_link}}</a><br><br>
			CONTACT NUMBER: {{ $crush->contact_number}}<br><br>
			



QUALITIES<br><br>
	@foreach($qualities as $qualities )
		
			--->{{ $qualities->qualities}} <a href="{{ route ('qualities.id.destroy', array('id2'=>$qualities->id))}}">Delete</a><br>
			
			

	@endforeach

			<br><br><a href="{{ route('crushes.id.add', array('id'=>$crush->id))}}">Add New Qualities</a>
		

@endforeach					
