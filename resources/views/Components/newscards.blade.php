<section class="px-5 py-10  text-gray-800">
	<div class="container grid grid-cols-12 mx-auto gap-y-6 md:gap-10">
        <!-- left nav bar -->
		<div class="flex flex-col justify-between col-span-12 py-2 space-y-8 md:space-y-16 md:col-span-3">
			<div class="flex flex-col space-y-8 md:space-y-12">
            @foreach ($blogs as $blog )
            @if ($blog['latest'])
            <div class="flex flex-col space-y-2">
					<h3 class="flex items-center space-x-2 text-gray-600">
						<span class="flex-shrink-0 w-2 h-2 uppercase rounded-full bg-violet-600"></span>
						<span class="text-xs font-bold tracking-wider uppercase">{{$blog['author']}}</span>
					</h3>
					<a rel="noopener noreferrer" href="#" class="font-serif hover:underline">{{$blog['title']}}</a>
					<p class="text-xs text-gray-600">{{$blog['published_at']}} by
						<a rel="noopener noreferrer" href="#" class="hover:underline text-violet-600">{{$blog['author']}}</a>
					</p>
				</div>
            @endif
            
            @endforeach
				
			</div>
			<div class="flex flex-col w-full space-y-2">
				<div class="flex w-full h-1  bg-violet-600">
				</div>
				<a rel="noopener noreferrer" href="#" class="flex items-center justify-between w-full">
					<span class="text-xs font-bold tracking-wider uppercase">See more exclusives</span>
					<svg viewBox="0 0 24 24" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4 stroke-current text-violet-600">
						<line x1="5" y1="12" x2="19" y2="12"></line>
						<polyline points="12 5 19 12 12 19"></polyline>
					</svg>
				</a>
			</div>
		</div>

        <!-- Live card  -->
		@foreach ($blogs as $blog )
        @if ($blog['poster'])
        <div class="relative flex col-span-12  bg-center bg-no-repeat bg-cover xl:col-span-6 lg:col-span-5 md:col-span-9 min-h-96  " style="background-image: url('{{ $blog['img'] }}');">
		<div class="absolute inset-0 bg-black opacity-50"></div>	
        <span class="absolute px-1 pb-2 text-xs font-bold uppercase border-b-2 left-6 top-6 text-gray-100 border-violet-600">usa,washingthon dc</span>
			<a class="flex flex-col items-center justify-end p-6 text-center sm:p-8 group via- flex-grow-1 " href="/News">
				<span class="flex items-center mb-4 space-x-2 text-violet-600">
					<span class="relative flex-shrink-0 w-2 h-2 rounded-full bg-red-600">
						<span class="absolute flex-shrink-0 w-3 h-3 rounded-full -left-1 -top-1 animate-ping bg-red-600"></span>
					</span>
					<span class="text-sm font-bold text-red-600 z-50">Live</span>
				</span>
				<h1 rel="noopener noreferrer" href="#" class="font-serif text-2xl font-semibold group-hover:underline text-white z-50">{{$blog['content']}}</h1>
			</a>
		</div>
        
        @endif
        
        <!-- right nav bar -->
        @endforeach
		<div class="hidden py-2 xl:col-span-3 lg:col-span-4 md:hidden lg:block">
			<div class="mb-8 space-x-5 border-b-2 border-opacity-10 border-violet-600">
				<button type="button" class="pb-5 text-xs font-bold uppercase border-b-2 border-violet-600">Latest</button>
			</div>
			<div class="flex flex-col divide-y divide-gray-300">
				@foreach ($blogs as $blog)
                @if (!$blog['latest']&&!$blog['poster'])
                <div class="flex px-1 py-4">
					<img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 bg-gray-500" src={{$blog['img']}}>
					<div class="flex flex-col flex-grow">
						<a rel="noopener noreferrer" href="#" class="font-serif hover:underline">{{$blog['title']}}</a>
						<p class="mt-auto text-xs text-gray-600">{{$blog['published_at']}}
							<a rel="noopener noreferrer" href="#" class="block text-blue-600 lg:ml-2 lg:inline hover:underline">{{$blog['category']}}</a>
						</p>
					</div>
				</div>
                @endif
                	
                @endforeach	
			</div>
		</div>
	</div>
</section>