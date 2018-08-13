@foreach($crushes as $crush )
	
			{{ $crush->first_name}}<br>
			{{ $crush->last_name}}<br>
			<a href="{{ $crush->fb_profile_link}}">{{ $crush->fb_profile_link}}</a><br>
			{{ $crush->contact_number}}<br>
			
@endforeach



@foreach($qualities as $qualities )
		
			{{ $qualities->qualities}}<br>
			
			

@endforeach



			<a href="{{ route('crushes.add')}}">Add New Qualities</a>
		
		