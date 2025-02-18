<div class="relative flex min-h-screen text-white bg-zinc-900">
    <!-- Left Sidebar - Event Creation -->
    <div class="fixed z-10 flex-col hidden h-full p-4 overflow-hidden border-r md:flex md:w-80 border-zinc-800 bg-zinc-900">
        <div class="p-6 space-y-2 rounded-xl">
            <div class="flex items-center space-x-2 text-xl font-semibold">
                <h2 class="text-white">Create a New Event</h2>
            </div>

            <form class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-medium text-zinc-400">Event Name</label>
                    <input type="text" 
                           class="w-full h-8 px-4 py-2 text-white placeholder-zinc-400 border rounded-lg bg-zinc-700 border-zinc-600 focus:border-primary focus:ring-1 focus:ring-primary">
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-zinc-400">Destination</label>
                    <input type="text" 
                           class="w-full h-8 px-4 py-2 text-white placeholder-zinc-400 border rounded-lg bg-zinc-700 border-zinc-600 focus:border-primary focus:ring-1 focus:ring-primary">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-zinc-400">Start Date</label>
                        <input type="date" 
                               class="w-full px-4 py-2 text-white border rounded-lg bg-zinc-700 border-zinc-600 focus:border-primary focus:ring-1 focus:ring-primary">
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-zinc-400">End Date</label>
                        <input type="date" 
                               class="w-full px-4 py-2 text-white border rounded-lg bg-zinc-700 border-zinc-600 focus:border-primary focus:ring-1 focus:ring-primary">
                    </div>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-zinc-400">Description</label>
                    <textarea rows="4" 
                              class="w-full px-4 py-2 text-white placeholder-zinc-400 border rounded-lg bg-zinc-700 border-zinc-600 focus:border-primary focus:ring-1 focus:ring-primary"></textarea>
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-zinc-400">Event Image</label>
                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 transition-colors border-2 border-dashed rounded-lg border-zinc-600 hover:border-primary">
                        <div class="space-y-1 text-center">
                            <svg class="w-12 h-12 mx-auto text-zinc-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-zinc-400">
                                <label class="relative font-medium rounded-md cursor-pointer text-primary hover:text-red-400 focus-within:outline-none">
                                    <span>Upload OR Drag & Drop</span>
                                    <input type="file" class="sr-only">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-4 space-x-4">
                    <button type="button" 
                            class="px-4 py-2 text-sm font-medium text-zinc-400 transition-colors border rounded-lg hover:text-white border-coral-red-600">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white transition-colors bg-red-500 rounded-lg hover:bg-red-700">
                        Create Event
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Main Content - Event Cards -->
    <main class="flex-1 p-6">
        <div class="max-w-2xl mx-auto space-y-6">


            @foreach ($events as $event )
                
            <!-- Featured Event Card -->
            <div wire:key={{$event->id}} class="overflow-hidden transition-all duration-300 bg-zinc-800 rounded-xl group hover:shadow-xl hover:shadow-red-700/10">
                <div class="relative overflow-hidden aspect-video">
                    <img src={{url('storage', $event->image)}} 
                         alt="Event Image" 
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h2 class="mb-2 text-2xl font-bold text-white">{{$event->name}}</h2>
                        <p class="text-zinc-300">{{$event->description}}</p>
                        <p class="mt-2 text-sm text-zinc-400">Destination: {{$event->destination}}</p>
                    </div>
                </div>
                <div class="p-6 bg-zinc-800">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-zinc-400">From: {{$event->from_date}} - To: {{$event->to_date}}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="text-zinc-400">{{$event->total_people}} Going</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="flex items-center space-x-2 text-zinc-400 transition-colors hover:text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>Like</span>
                        </button>
                        <button class="flex items-center space-x-2 text-zinc-400 transition-colors hover:text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>Comment</span>
                        </button>
                        <button class="px-4 py-2 text-white transition-colors bg-red-500 rounded-lg hover:bg-red-700">
                            Join Event
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

            


        </div>
    </main>

    <!-- Right Sidebar -->
    <div class="fixed right-0 hidden h-full p-6 border-l z-1 md:flex md:w-72 border-zinc-800 bg-zinc-900">
        <div class="space-y-6">
            <!-- Events You're Going -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">You're Going</h3>
                <div class="space-y-3">
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Patale Cycling Event</h4>
                        <p class="text-sm text-zinc-400">10th Feb</p>
                        <p class="text-sm text-zinc-400">14 Going</p>
                    </div>
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Jamacho Hiking Event</h4>
                        <p class="text-sm text-zinc-400">3rd March</p>
                        <p class="text-sm text-zinc-400">3 Going</p>
                    </div>
                </div>
            </div>

            <!-- Your Events -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Your Events</h3>
                <div class="space-y-3">
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Patale Cycling Event</h4>
                        <p class="text-sm text-zinc-400">10th Feb</p>
                        <p class="text-sm text-zinc-400">14 Going</p>
                    </div>
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Jamacho Hiking Event</h4>
                        <p class="text-sm text-zinc-400">3rd March</p>
                        <p class="text-sm text-zinc-400">3 Going</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>