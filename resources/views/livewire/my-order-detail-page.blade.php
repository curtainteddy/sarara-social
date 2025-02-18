<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto text-zinc-200">
    <h1 class="text-4xl font-bold text-zinc-200">Order Details</h1>
  
    <!-- Grid -->
    <div class="grid gap-4 mt-5 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
      <!-- Card -->
      <div class="flex flex-col border shadow-sm bg-zinc-900 rounded-xl dark:bg-zinc-900 dark:border-zinc-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-zinc-100 rounded-lg dark:bg-zinc-800">
            <svg class="flex-shrink-0 text-gray-200 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide uppercase text-zinc-500">
                Customer
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              <div>
                @if($address)
                  {{$address->full_name}}
                @else
                  <span class="text-red-500">Name not found</span>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col border shadow-sm bg-zinc-900 rounded-xl dark:bg-zinc-900 dark:border-zinc-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-zinc-100 rounded-lg dark:bg-zinc-800">
            <svg class="flex-shrink-0 text-gray-200 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 22h14" />
              <path d="M5 2h14" />
              <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
              <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide uppercase text-zinc-500">
                Order Date
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              <h3 class="text-xl font-medium text-zinc-800 dark:text-zinc-200">
                {{$order_items[0]->created_at->format('Y-m-d')}}
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col border shadow-sm bg-zinc-900 rounded-xl dark:bg-zinc-900 dark:border-zinc-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-zinc-100 rounded-lg dark:bg-zinc-800">
            <svg class="flex-shrink-0 text-gray-200 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
              <path d="m12 12 4 10 1.7-4.3L22 16Z" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide uppercase text-zinc-500">
                Order Status
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              @php
              $status = '';


              if($order->status == 'new'){
                $status = '<span class="px-3 py-1 text-white bg-blue-500 rounded shadow">New</span>';     
              }
              if($order->status == 'processing'){
                $status = '<span class="px-3 py-1 text-white bg-yellow-500 rounded shadow">Processing</span>';     
              }
              if($order->status == 'shipped'){
                $status = '<span class="px-3 py-1 text-white bg-pink-500 rounded shadow">Shipped</span>';     
              }
              if($order->status == 'delivered'){
                $status = '<span class="px-3 py-1 text-white bg-green-700 rounded shadow">Delivered</span>';     
              }
              if($order->status == 'cancelled'){
                $status = '<span class="px-3 py-1 text-white bg-red-500 rounded shadow">Cancelled</span>';     
              }
            @endphp

                {!! $status !!}

            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col border shadow-sm bg-zinc-900 rounded-xl dark:bg-zinc-900 dark:border-zinc-800">
        <div class="flex p-4 md:p-5 gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-zinc-100 rounded-lg dark:bg-zinc-800">
            <svg class="flex-shrink-0 text-gray-200 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
              <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
              <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs tracking-wide uppercase text-zinc-500">
                Payment Status
              </p>
            </div>
            <div class="flex items-center mt-1 gap-x-2">
              @php
                  $payment_status = '';

                  if($order->payment_status == 'paid'){
                    $payment_status = '<span class="px-3 py-1 text-white bg-green-500 rounded shadow">Paid</span>';     
                  }
                  if($order->payment_status == 'pending'){
                    $payment_status = '<span class="px-3 py-1 text-white bg-yellow-500 rounded shadow">Pending</span>';     
                  }

                  if($order->payment_status == 'failed'){
                    $payment_status = '<span class="px-3 py-1 text-white bg-red-500 rounded shadow">Failed</span>';     
                  }

              @endphp 
              {!! $payment_status !!}

            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  
    <div class="flex flex-col gap-4 mt-4 md:flex-row">
      <div class="md:w-3/4">
        <div class="p-6 mb-4 overflow-x-auto rounded-lg shadow-md bg-zinc-900">
          <table class="w-full">
            <thead>
              <tr>
                <th class="font-semibold text-left">Product</th>
                <th class="font-semibold text-left">Price</th>
                <th class="font-semibold text-left">Quantity</th>
                <th class="font-semibold text-left">Total</th>
              </tr>
            </thead>
            <tbody>
  
              <!--[if BLOCK]><![endif]-->
              @foreach ($order_items as $item )
              <tr wire:key="{{$item->id}}">
                <td class="py-4">
                  <div class="flex items-center">
                    <img class="w-16 h-16 mr-4" src="{{url('storage',$item->product->images[0])}}" alt="Product image">
                    <span class="font-semibold">{{$item->product->name}}</span>
                  </div>
                </td>
                <td class="py-4">
                  {{ Number::currency($item->unit_amount,"NPR") }}
                </td>
                <td class="py-4">
                  <span class="w-8 text-center">
                    {{$item->quantity}}
                  </span>
                </td>
                <td class="py-4">
                  {{ Number::currency($item->total_amount,"NPR") }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
  
        <div class="p-6 mb-4 overflow-x-auto rounded-lg shadow-md bg-zinc-900">
          <h1 class="mb-3 font-bold font-3xl text-zinc-500">Shipping Address</h1>
          <div class="flex items-center justify-between">
            <div>
              <p>
                @if($address)
                  {{$address->street_address}}, {{$address->city}}, {{$address->province}}, {{$address->zip_code}}
                @else
                  <span class="text-red-500">Adress not found</span>
                @endif
              </p>
            </div>
            <div>
              <p class="font-semibold">Phone:</p>
              <p>
                @if($address)
                  {{$address->phone}}
                @else
                  <span class="text-red-500">Phone not found</span>
                @endif
              </p>
            </div>
          </div>
        </div>
  
      </div>
      <div class="md:w-1/4">
        <div class="p-6 rounded-lg shadow-md bg-zinc-900">
          <h2 class="mb-4 text-lg font-semibold">Summary</h2>
          <div class="flex justify-between mb-2">
            <span>Subtotal</span>
            <span>
              {{ Number::currency($item->order->grand_total,"NPR") }}
            </span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Taxes</span>
            <span>NPR 0.00</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Shipping</span>
            <span>NPR 0.00</span>
          </div>
          <hr class="my-2">
          <div class="flex justify-between mb-2">
            <span class="font-semibold">Grand Total</span>
            <span class="font-semibold">
              {{ Number::currency($item->order->grand_total,"NPR") }}

            </span>
          </div>
  
        </div>
      </div>
    </div>
  </div>