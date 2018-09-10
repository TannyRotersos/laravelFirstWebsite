<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
table{
	border: 1px solid black;
}
th{

}
td{
	
}

	</style>
	<title></title>
</head>
<body>

<center>
<table>
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Fb Profile</td>
			<td>Contact Number</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($crushes as $crush )
		<tr>
			<td>{{ $crush->first_name}}</td>
			<td>{{ $crush->last_name}}</td>
			<td><a href="{{ $crush->fb_profile_link}}">{{ $crush->fb_profile_link}}</a></td>
			<td>{{ $crush->contact_number}}</td>
			<td><a href="{{route('crushes.id.edit', array('id'=>$crush->id))}}">Edit | </a>
				<a href="{{ route ('crushes.id.destroy', array('id'=>$crush->id))}}">Delete |</a>
				<a href="{{ route ('crushes.id.show', array('id'=>$crush->id))}}">Show</a></td>
		</tr>
		@endforeach

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="{{ route('crushes.create')}}">Add New Crush</a></td>
			</tr>
	</tbody>
</table>
</center>
</body>
</html>