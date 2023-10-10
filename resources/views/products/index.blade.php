@extends('layouts.app')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
					</div>
					<?php
                    $korting = $product->discount; // Vervang dit door de werkelijke kortingswaarde

                    $korting = $product->discount;

                            if ($korting > 0) {
                                echo '<p class="korting-text">Nu is er <span class="korting-value">' . $korting . '%</span> korting!</p>';
                            }
                            ?>
                    
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection