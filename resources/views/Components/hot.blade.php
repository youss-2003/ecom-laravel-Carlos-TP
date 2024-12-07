<section class="py-6 sm:py-12 bg-gray-100 text-gray-800">
	<div class="container p-6 mx-auto space-y-8">
		<div class="space-y-2 text-center">
		<div class='text-center text-3xl font-semibold leading-none tracking-wide mb-5 text-white bg-indigo-500 h-12'>
<h1 class="p-2">HOT BLOGS</h1>
	</div>
		</div>
		<div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
			@foreach ($blogs as $blog)
            @if (!$blog['is_new'])
             <article class="flex flex-col bg-gray-50">
				<a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
					<img alt="" class="object-cover w-full h-52 bg-gray-500" src="{{ $blog['img'] }}">
				</a>
				<div class="flex flex-col flex-1 p-6">
					<a rel="noopener noreferrer" href="/Blog" ></a>
					<a rel="noopener noreferrer" href="/Blog" class="text-xs tracking-wider uppercase hover:underline text-violet-600" title='{{ $blog['category'] }}'>{{ $blog['category'] }}</a>
					<h3 class="flex-1 py-2 text-lg font-semibold leading-snug">{{ $blog['title'] }}</h3>
					<div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-600">
						<span>{{ $blog['author'] }}</span>
						<span>{{ $blog['published_at'] }}</span>
					</div>
				</div>
			</article>
            @endif
           
            @endforeach
			
		</div>
	</div>
</section>