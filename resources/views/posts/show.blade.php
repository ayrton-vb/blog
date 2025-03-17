<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="md:col-span-2">
                <figure>
                    @if ($post->image)
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                    <img class="w-full h-80 object-cover object-center" src="https://images.pexels.com/photos/30970419/pexels-photo-30970419/free-photo-of-noche-lluviosa-en-un-vibrante-callejon-de-tokio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">  
                    @endif
                </figure>


                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>


            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex items-center" href="{{ route('posts.show', $similar) }}">
                                @if ($similar->image)
                                <img class="w-36 h-20 object-cover object-center flex-shrink-0" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                <img class="w-36 h-20 object-cover object-center flex-shrink-0" src="https://images.pexels.com/photos/30970419/pexels-photo-30970419/free-photo-of-noche-lluviosa-en-un-vibrante-callejon-de-tokio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""> 
                                @endif
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
         </div>


    </div>
</x-app-layout>