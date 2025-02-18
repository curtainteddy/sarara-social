<div class="relative flex min-h-screen text-white bg-zinc-900">
    <!-- Left Sidebar -->
    <div class="fixed z-10 flex-col hidden h-full p-4 border-r md:flex md:w-64 border-zinc-800 bg-zinc-900">
        <div>
            <a href="/marketplace" class="flex items-center p-2 space-x-3 transition-colors rounded-lg hover:bg-zinc-800">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span class="text-white">Marketplace</span>
            </a>
            <a href="/friends" class="flex items-center p-2 space-x-3 transition-colors rounded-lg hover:bg-zinc-800">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="text-white">Friends</span>
            </a>
            <a href="/events" class="flex items-center p-2 space-x-3 transition-colors rounded-lg hover:bg-zinc-800">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span class="text-white">Events</span>
            </a>
        </div>

        <!-- New Events Section -->
        <div class="mt-8">
            <h3 class="mb-4 text-lg font-semibold text-white">New Events</h3>
            <div class="space-y-3 ">
                <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 overflow-hidden rounded-lg bg-zinc-700">
                            <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?q=80&w=1470&auto=format&fit=crop" 
                                 alt="Epic Trip" 
                                 class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div>
                            <h4 class="font-medium text-white">Epic Trip</h4>
                            <p class="text-sm text-gray-400">3 Going</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 overflow-hidden rounded-lg bg-zinc-700">
                            <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1470&auto=format&fit=crop" 
                                 alt="Mountain Ride" 
                                 class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div>
                            <h4 class="font-medium text-white">Mountain Ride</h4>
                            <p class="text-sm text-gray-400">5 Going</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-1 p-4">
        <!-- Create Post -->
        <div class="max-w-2xl p-4 mx-auto mb-8 bg-zinc-800 rounded-xl">
            <div class="flex items-center space-x-4">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile" class="w-10 h-10 rounded-full">
                <input type="text" placeholder="Post about your day!" 
                       class="flex-1 px-4 py-2 text-white placeholder-gray-400 rounded-full bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
        </div>

        <!-- Posts -->
        <div class="max-w-2xl mx-auto space-y-6">
            <!-- Post 1 -->
            <div class="p-4 bg-zinc-800 rounded-xl">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="font-medium text-white">Peshal Sedhai</h3>
                            <p class="text-sm text-gray-400">2 hours ago</p>
                        </div>
                    </div>
                    <button class="p-2 transition-colors rounded-full hover:bg-zinc-700">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                        </svg>
                    </button>
                </div>
                <p class="mb-4 text-white">Today we went to Lakuri Vanjyang! It was fun...</p>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?q=80&w=1470&auto=format&fit=crop" 
                         alt="Post image" 
                         class="object-cover w-full h-48 rounded-lg">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1470&auto=format&fit=crop" 
                         alt="Post image" 
                         class="object-cover w-full h-48 rounded-lg">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?q=80&w=1470&auto=format&fit=crop" 
                             alt="Post image" 
                             class="object-cover w-full h-48">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/50">
                            <span class="text-xl font-bold text-white">+3</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-700">
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                        <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span>Comment</span>
                    </button>
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        <span>Share</span>
                    </button>
                </div>
            </div>

            <!-- Post 2 (Similar structure) -->
            <div class="p-4 bg-zinc-800 rounded-xl">
                <!-- Similar content structure as Post 1 -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="Profile" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="font-medium text-white">John Doe</h3>
                            <p class="text-sm text-gray-400">4 hours ago</p>
                        </div>
                    </div>
                    <button class="p-2 transition-colors rounded-full hover:bg-zinc-700">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                        </svg>
                    </button>
                </div>
                <p class="mb-4 text-white">Just got my new mountain bike! Can't wait for the weekend ride...</p>
                <img src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?q=80&w=1470&auto=format&fit=crop" 
                     alt="New bike" 
                     class="object-cover w-full h-64 mb-4 rounded-lg">
                <div class="flex items-center justify-between pt-4 border-t border-zinc-700">
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                        </svg>
                        <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span>Comment</span>
                    </button>
                    <button class="flex items-center space-x-2 text-gray-400 transition-colors hover:text-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        <span>Share</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Right Sidebar -->
    <div class="fixed right-0 hidden h-full p-6 border-l z-1 md:flex md:w-72 border-zinc-800 bg-zinc-900">
        <div class="space-y-6">
            <!-- Upcoming Events -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">You're Going</h3>
                <div class="space-y-3">
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Patale Cycling Event</h4>
                        <p class="text-sm text-gray-400">10th Feb</p>
                    </div>
                    <div class="p-3 transition-all rounded-lg cursor-pointer group bg-zinc-800/50 hover:bg-zinc-800">
                        <h4 class="font-medium text-white">Jamacho Hiking Event</h4>
                        <p class="text-sm text-gray-400">3rd March</p>
                    </div>
                </div>
            </div>

            <!-- Friends List -->
            <div>
                <h3 class="mb-4 text-lg font-semibold text-white">Friends</h3>
                <div class="space-y-3">
                    <div class="flex items-center p-2 space-x-3 transition-colors rounded-lg cursor-pointer hover:bg-zinc-800">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ramesh" alt="Friend" class="w-8 h-8 rounded-full">
                        <span class="text-white">Ramesh</span>
                    </div>
                    <div class="flex items-center p-2 space-x-3 transition-colors rounded-lg cursor-pointer hover:bg-zinc-800">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Mahesh" alt="Friend" class="w-8 h-8 rounded-full">
                        <span class="text-white">Mahesh</span>
                    </div>
                    <div class="flex items-center p-2 space-x-3 transition-colors rounded-lg cursor-pointer hover:bg-zinc-800">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ramesh2" alt="Friend" class="w-8 h-8 rounded-full">
                        <span class="text-white">Suresh</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>