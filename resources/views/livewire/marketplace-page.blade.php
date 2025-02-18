<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto text-zinc-200">
  <h1 class="text-4xl font-bold text-zinc-200">Marketplace</h1>
  <section class="mb-5 rounded-lg font-poppins">
    <div class="px-4 py-4 mx-auto">
      <div class="flex flex-wrap mb-24 -mx-3">
        <div class="w-full pr-2 lg:w-1/4 lg:block">
          <div class="p-4 mb-5 border rounded-lg bg-zinc-900 border-zinc-800">
            <h2 class="text-2xl font-bold text-zinc-400">Categories</h2>
            <div class="w-16 pb-2 mb-6 border-b border-rose-600"></div>
            <ul>
              @foreach ( $categories as $category )
              <li class="mb-4" wire:key="{{$category->id}}">
                <label for="{{ $category->slug}}" class="flex items-center text-zinc-400">
                  <input type="checkbox" wire:model.live='selected_categories' id="{{$category->slug}}" value="{{$category->id}} "class="w-4 h-4 mr-2">
                  <span class="text-lg">{{$category->name}}</span>
                </label>
              </li>
              @endforeach

            </ul>
          </div>

          <div class="p-4 mb-5 border rounded-lg bg-zinc-900 border-zinc-800">
            <h2 class="text-2xl font-bold text-zinc-400">Brand</h2>
            <div class="w-16 pb-2 mb-6 border-b border-rose-600"></div>
            <ul>
            @foreach ($brands as $brand)
            <li class="mb-4" wire:key="{{$brand->id}}"">
              <label for="{{ $brand->slug}}" class="flex items-center text-zinc-400">
                <input type="checkbox" wire:model.live='selected_brands' id="{{$brand->slug}}" value="{{$brand->id}} "class="w-4 h-4 mr-2">
                <span class="text-lg">{{$brand->name}}</span>
              </label>
            </li>
            @endforeach
            
            </ul>
          </div>
          <div class="p-4 mb-5 border rounded-lg bg-zinc-900 border-zinc-800">
            <h2 class="text-2xl font-bold text-zinc-400">Product Status</h2>
            <div class="w-16 pb-2 mb-6 border-b border-rose-600"></div>

            <ul>

              <li class="mb-4">
                <label for="featured" class="flex items-center text-zinc-400">
                  <input type="checkbox" id="featured" wire:model.live='featured' class="w-4 h-4 mr-2">
                  <span class="text-lg">Featured</span>
                </label>
              </li>
              
              <li class="mb-4">
                <label for="on_sale" class="flex items-center text-zinc-400">
                  <input type="checkbox" id="on_sale" wire:model.live='on_sale' class="w-4 h-4 mr-2">
                  <span class="text-lg">On Sale</span>
                </label>
              </li>
              
              <li class="mb-4">
                <label for="in_stock" class="flex items-center text-zinc-400">
                  <input type="checkbox" id="in_stock" wire:model.live='in_stock' class="w-4 h-4 mr-2">
                  <span class="text-lg">In Stock</span>
                </label>
              </li>
            
            </ul>

          </div>
          <div class="p-4 mb-5 border rounded-lg bg-zinc-900 border-zinc-800">
            <h2 class="text-2xl font-bold text-zinc-400">Price</h2>
            <div class="w-16 pb-2 mb-6 border-b border-rose-600"></div>
            <div>
            <div class="font-semibold">{{Number::currency($price_range,'NPR')}}</div>
              <input type="range" wire:model.live='price_range' class="w-full h-1 mb-4 bg-blue-100 rounded appearance-none cursor-pointer" max="500000" value="300000" step="1000">
              <div class="flex justify-between">
                <span class="inline-block text-lg font-bold text-red-400">{{Number::currency(1000,'NPR')}}</span>
                <span class="inline-block text-lg font-bold text-red-400">{{Number::currency(500000,'NPR')}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-3 lg:w-3/4">
          <div class="px-3 mb-4">
            <div class="items-center justify-between hidden px-3 py-2 border rounded-lg bg-zinc-900 border-zinc-800 md:flex">
              <div class="flex items-center justify-between">
                <select wire:model.live='sort' class="block w-40 text-base cursor-pointer bg-zinc-900 text-zinc-400">
                  <option value="latest">Sort by latest</option>
                  <option value="price">Sort by Price</option>
                </select>
              </div>
            </div>
          </div>

          {{-- Product Box Start --}}  
          <div class="flex flex-wrap items-center">

            
          @foreach ($products as $product)
          {{-- Product End --}}
            <div class="w-full px-2 mb-4 sm:w-1/3 md:w-1/4" wire:key="{{$product->id}}">
              <div class="border rounded-lg border-zinc-700">
                  <div class="relative bg-zinc-200">
                      <a wire:navigate href="/products/{{$product->slug}}" class="">
                          <img src="{{url ('storage', $product->images[0])}}" alt="{{$product->name}}" class="object-cover w-full h-40 mx-auto">
                      </a>
                  </div>
                  <div class="p-2">
                      <div class="flex items-center justify-between gap-2 mb-1">
                          <h3 class="text-lg font-medium text-zinc-400">{{$product->name}}</h3>
                      </div>
                      <p class="text-base">
                          <span class="text-green-600">रु. {{$product->price}}</span>
                      </p>
                  </div>
                  <div class="flex justify-center p-3 border-t border-zinc-700">
                      <a href="#" wire:click.prevent='addToCart({{$product->id}})' class="flex items-center space-x-2 text-zinc-400 hover:text-red-500">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3" viewBox="0 0 16 16">
                              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                          </svg><span wire:loading.remove wire:target='addToCart({{$product->id}})'>Add to Cart</span> <span wire:loading wire:target='addToCart({{$product->id}})'>Adding..</span> 
                      </a>
                  </div>
              </div>
          </div>
            @endforeach

          </div> 
          {{-- Product Box End --}}

          
          <!-- pagination start -->
          <div class="flex justify-end mt-6">
            {{$products->links()}}
          </div>
          <!-- pagination end -->
        </div>
      </div>
    </div>
  </section>
</div>