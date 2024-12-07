<section class="bg-gray-100 text-gray-800 mt-5">
	<div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
		@foreach ($blogs as $blog)
        @if ($blog['is_new'])
        <a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 bg-gray-50">
			<img src="{{$blog['img']}}" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 bg-gray-500">
			<div class="p-6 space-y-2 lg:col-span-5">
				<h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">{{$blog['title']}}</h3>
				<span class="text-xs text-gray-600">{{$blog['published_at']}}</span>
				<p>{{$blog['content']}}</p>
			</div>
		</a>
        @endif
        
        @endforeach
		<div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($blogs as $blog)
        @if (!$blog['is_new'])
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-gray-50">
				<img role="presentation" class="object-cover w-full rounded h-44 bg-gray-500" src="{{$blog['img']}}">
				<div class="p-6 space-y-2">
					<h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$blog['title']}}</h3>
					<span class="text-xs text-gray-600">{{$blog['published_at']}}</span>
					<p>{{$blog['content']}}</p>
				</div>
			</a>
        @endif
        
        @endforeach
		</div>
		<div class="flex justify-center">
			<button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-gray-50 text-gray-600">Load more posts...</button>
		</div>
	</div>
</section>