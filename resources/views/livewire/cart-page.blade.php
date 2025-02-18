<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto text-zinc-200">
    <div class="container px-4 mx-auto">
      <h1 class="mb-4 text-2xl font-semibold">Shopping Cart</h1>
      <div class="flex flex-col gap-4 md:flex-row">
        <div class="md:w-3/4">
          <div class="p-6 mb-4 overflow-x-auto bg-zinc-900 rounded-xl dark:bg-zinc-900 dark:border-zinc-800">
            <table class="w-full">
              <thead>
                <tr>
                  <th class="font-semibold text-left">Product</th>
                  <th class="font-semibold text-left">Price</th>
                  <th class="font-semibold text-left">Quantity</th>
                  <th class="font-semibold text-left">Total</th>
                  <th class="font-semibold text-left">Remove</th>
                </tr>
              </thead>
              <tbody>

                @forelse ($cart_items as $item )
                  
                <tr wire:key="{{ $item['product_id'] }}">
                  <td class="py-4">
                    <div class="flex items-center">
                      <img class="w-16 h-16 mr-4" src="{{url('storage', $item['image'])}}" alt="Product image">
                      <span class="font-semibold">{{$item['name']}} </span>
                    </div>
                  </td>
                  <td class="py-4">
                    {{Number::currency($item['unit_amount'],'NPR')}}
                  </td>
                  
                  <td class="py-4">
                    <div class="flex items-center">

                      <button wire:click='decreaseQty({{ $item[ 'product_id']}})' class="px-4 py-2 mr-2 border rounded-md">-</button>

                      <span class="w-8 text-center">
                        {{$item['quantity']}}
                      </span>

                      <button wire:click='increaseQty({{ $item[ 'product_id']}})' class="px-4 py-2 ml-2 border rounded-md">+</button>

                    </div>

                  </td>
                  <td class="py-4">
                    {{Number::currency($item['total_amount'],'NPR')}}
                  </td>
                  <td>
                    <button wire:click='removeItem({{$item['product_id']}})' class="px-3 py-1 text-white bg-red-700 border-2 border-red-700 rounded-lg hover:bg-red-900 hover:text-white hover:border-red-800">Remove</button>
                  </td>
                </tr>
                @empty
                  <td colspan="5" class="py-4 mt-4 text-4xl font-semibold text-center text-zinc-400">No items in cart</td>
                @endforelse

                <!-- More product rows -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="md:w-1/4">
          <div class="p-6 rounded-lg shadow-md bg-zinc-900">
            <h2 class="mb-4 text-lg font-semibold">Summary</h2>
            <div class="flex justify-between mb-2">
              <span>Subtotal</span>
              <span>
                {{Number::currency($grand_total,'NPR')}}
              </span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Taxes</span>
              <span>
                {{Number::currency(0,'NPR')}}
              </span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Shipping</span>
              <span>
                
                {{Number::currency(0,'NPR')}}
              </span>
            </div>
            <hr class="my-2">
            <div class="flex justify-between mb-2">
              <span class="font-semibold">Total</span>
              <span class="font-semibold">

                {{Number::currency($grand_total,'NPR')}}
              </span>
            </div>

            @if ($cart_items)
              
            <a href="/checkout"  class="block w-full px-4 py-1 text-center text-white bg-green-700 border-2 rounded-lg mt-4px-3 hover:bg-green-600 hover:text-white">Checkout</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>