<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Completed</th>
		</tr>
	</thead>
	<tbody>
		@foreach($shows as $show)
			<tr>
				<td><a href="{{ route('show', $show->id) }}">{{ $show->name }}</a></td>
				<td>
					@if($show->is_completed)
						Yes
					@else
						No
					@endif
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
