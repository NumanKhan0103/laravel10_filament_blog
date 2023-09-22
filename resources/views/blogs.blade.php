<?php

 /** @var $posts Illuminate\Pagination\LengthAwarePaginator */

?>

  <x-app-layout>
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        {{-- show all blogs --}}

        @foreach ($posts as $post )
            
                <x-single-post-item :post="$post"></x-single-post-item>

        @endforeach
 
        {{-- post pagination --}}
        {{-- onEachSid() function show pagination like this  <<  1 2 3 . . . 34 35 36 . . . 100  >>  the page 35 is active and show single page left and write  --}}
        {{ $posts->onEachSide(1)->links() }}

   </section>
</x-app-layout>