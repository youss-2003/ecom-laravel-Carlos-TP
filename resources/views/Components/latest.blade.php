<div class="max-w-screen-xl p-5 mx-auto ">
	<div class='text-center text-3xl font-semibold leading-none tracking-wide mb-5 text-white bg-indigo-500 h-12'>
		<h1 class="p-2">BREAKING NEWS</h1>
	</div>

	<div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2 ">
		@foreach ($blogs as $blog)
		@if ($blog['is_new'])
		<div class="relative flex items-end justify-start w-full text-left bg-center bg-cover h-96" style="background-image: url('{{ $blog['img'] }}');">
			<div class="absolute top-0 bottom-0 left-0 right-0 bg-black opacity-50"></div>
			<div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
				<span class="px-3 py-2 text-xs font-semibold tracking-wider uppercase text-gray-100 bg-indigo-500 max-w-28">
					{{ $blog['category'] }}
				</span>
				<div class="flex flex-col justify-start text-center text-gray-100">
					<span class="text-xl font-semibold leading-none tracking-wide">{{ now()->format('l') }}</span>
					<span class="leading-none uppercase">{{ now()->format('d/y') }}</span>
				</div>
			</div>
			<h2 class="z-10 p-5 flex">
				<a rel="noopener noreferrer" href="/" class="font-medium text-md hover:underline text-gray-100 hover:text-indigo-400">
					{{ $blog['title'] }}
				</a>
			</h2>
		</div>
		@endif
		@endforeach
	</div>
</div>
