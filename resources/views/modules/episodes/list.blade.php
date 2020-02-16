<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Title</th>
		</tr>
	</thead>
	<tbody>
		@foreach($episodes as $episode)
			<tr>
				<td>{{ $episode->episode_no }}</td>
				<td>–</td>
			</tr>
		@endforeach
	</tbody>
</table>
