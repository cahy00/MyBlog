@extends('layouts.index')

@section('content')
<main class="blog-standard">
	<div class="container">
		<h1 class="oleez-page-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{{$categoryTitle->category_name}}</h1>
			<div class="row">
				<div class="col-md-8">
					@foreach ($category->posts as $item)
						<article class="blog-post wow fadeInUp">
							<img src="{{asset($item->image)}}" alt="blog post" class="post-thumbnail img-thumbnail" height="1640" width="924" style="height: 1640px">
							{{-- Format waktu January 29, 2020 --}}
							<p class="post-date">{{$item->created_at->format('M d, Y')}} by Sulistyo Cahyo</p>
							<h4 class="post-title"><a href="/show-post/{{$item->id}}" style="text-decoration: none; color:black">{{$item->title}}</a></h4>
							<p class="post-excerpt">{!!substr($item->body, 0, 150)!!} <span>....</span></p>
							<a href="/show-post/{{$item->id}}" class="post-permalink">READ MORE</a>
						</article> 
					@endforeach
					<span>
						{{-- {{$category->links('vendor.pagination.simple-bootstrap-4')}} --}}
					</span>
				</div>

				@if ($category->count() == 0)
				<main class="error-page">
					<div class="container">
							<h1 class="error-code wow fadeInUp">404</h1>
							<p class="error-description wow fadeInUp">Oops! The page you are looking for does not exist. It might have been removed or deleted.Go back to home page now, or stay, it is quiet out here.</p>
					</div>
				</main>
				@endif
			</div>
	</div>
</main>
@endsection

		{{-- {{$item->title}} --}}

