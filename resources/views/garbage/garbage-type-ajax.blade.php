@if(count($garbageTypes))

	@foreach($garbageTypes as $garbage)

		<option value="{{ $garbage->garbage_type_id }}">{{ $garbage->garbage_type_name }} </option>

	@endforeach

@else
	
	<option value="0">No type found</option>

@endif