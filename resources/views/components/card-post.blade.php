@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url) }}" alt="">
    @else
    <img class="w-full h-72 object-cover object-center" src="https://images.pexels.com/photos/30970419/pexels-photo-30970419/free-photo-of-noche-lluviosa-en-un-vibrante-callejon-de-tokio.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
    @endif

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show',$post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!!$post->extract!!}
        </div>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
         <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
        @endforeach
    </div>
    
</article>