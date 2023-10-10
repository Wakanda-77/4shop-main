

{{-- <div>
    <h1>categorieën</h1> 
    <a href="/">Nieuwe categorie toevoegen</a>
</div>
<div>
    <tr>
        <th>Naam</th>
        
    
    </tr>
    @foreach ($categories as $categorie)
    <tr>
        <li>{{ $categorie->name }} ({{ $categorie->active }})</li>
        <td><a href="" >Aanpassen</a></td>
    </tr>
    
    @endforeach
</div> --}}

@extends('layouts.admin')

@section('content')
	
	<div class="d-flex justify-content-between align-items-center my-4">
		<h4>Producten</h4>
		<div>
			<a href="{{ route('admin.categories.create') }}">Nieuw product toevoegen</a>
		</div>
	</div>

	<table class="table table-striped table-hover">
		<tr>
			<th>Name</th>
			<th colspan="4">&nbsp;</th>
		</tr>
		@foreach ($categories as $categorie)
			<tr>
				<td>{{ $categorie->name }}</td>
				<td>
					@if($categorie->active)
						<span class="badge badge-success">Zichtbaar</span>
					@else
						<span class="badge badge-light">Onzichtbaar</span>
					@endif
				</td>
				
				<td>
					<a href="{{ route('admin.categories.edit', $categorie->id) }}">Aanpassen</a>
				</td>

			</tr>
		@endforeach
	</table>
@endsection
