  <!-- Posts Section -->
  
  <?php

 /** @var $posts Illuminate\Pagination\LengthAwarePaginator */

  ?>

  <x-app-layout>


  <section class="w-full md:w-2/3 flex flex-col items-center px-3">

  

    {{-- <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=2">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Automotive, Finance</a>
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
            <p href="#" class="text-sm pb-3">
                By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on January 12th, 2020
            </p>
            <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
            <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>

    {{-- show all blogs --}}

    @foreach ($posts as $post )
        
            <x-single-post-item :post="$post"></x-single-post-item>

    @endforeach

    {{-- {{ dd($posts) }} --}}

    {{-- post pagination --}}
    {{ $posts->onEachSide(1)->links() }}


</section>

</x-app-layout>