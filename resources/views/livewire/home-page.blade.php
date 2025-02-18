<style>
  #animated-text {
      transition: opacity 0.5s ease-in-out;
      display: inline-block;
  }
  .fade-out {
      opacity: 0;
  }
  .fade-in {
      opacity: 1;
  }
  .animate-pulse {
      animation: pulse 1.5s infinite;
  }
  @keyframes pulse {
      0%, 100% {
          transform: scale(1);
      }
      50% {
          transform: scale(1.05);
      }
  }
</style>
<div>
  <!-- Hero Section -->
  <section class="relative flex items-center justify-center h-screen overflow-hidden bg-gray-900">
      <!-- Background Video/Image with Overlay -->
      <div class="absolute inset-0 z-0">
          <img 
              src="{{ asset('images/mainbackground.png') }}" 
              alt="Background" 
              class="object-cover w-full h-full opacity-50"
          >
          <div class="absolute inset-0 bg-gradient-to-b from-zinc-900/10 to-red-950/80"></div>
      </div>

      <!-- Content -->
      <div class="container relative z-10 px-4 mx-auto text-center sm:px-6 lg:px-8">
          <div class="animate-fadeIn">
              <h1 class="mb-8 text-5xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
                  Future of <span id="animated-text" class="text-red-700 animate-pulse">Cycling</span><br/>
                  <span class="text-4xl sm:text-5xl lg:text-6xl">Community</span>
              </h1>
              <p class="max-w-3xl mx-auto mb-12 text-xl leading-relaxed text-gray-300 sm:text-2xl">
                  Join Sarara – the social hub for cyclists, hikers and trekkers! Connect with fellow riders, discover scenic routes, and share your experiences.
              </p>
              <div class="flex flex-col justify-center gap-6 sm:flex-row">
                  <a href="/register" 
                     class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white transition-all duration-300 transform bg-red-700 rounded-lg group hover:bg-red-700 hover:scale-105 hover:shadow-lg">
                      Let's Go Sarara
                      <svg class="w-6 h-6 ml-2 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m9 18 6-6-6-6"/>
                      </svg>
                  </a>
                  <a href="/events" 
                     class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-gray-900 transition-all duration-300 transform bg-white rounded-lg hover:bg-gray-100 hover:scale-105 hover:shadow-lg">
                      What's New?
                  </a>
              </div>
          </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute transform -translate-x-1/2 bottom-8 left-1/2 animate-bounce">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
          </svg>
      </div>
  </section>

  <!-- Shop Now Section -->
  <section class="h-screen bg-gray-800">
      <div class="flex flex-col h-full lg:flex-row">
          <!-- Left Image Section -->
          <div class="relative w-full lg:w-1/2 h-[40vh] lg:h-full overflow-hidden group">
              <img 
                  src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?q=80&w=1470&auto=format&fit=crop" 
                  alt="Cyclists riding" 
                  class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
          </div>

          <!-- Right Content Section -->
          <div class="flex items-center w-full p-8 overflow-y-auto lg:w-1/2 bg-zinc-900 lg:p-16">
              <div class="max-w-2xl mx-auto">
                  <h2 class="mb-8 text-4xl font-bold md:text-5xl lg:text-6xl animate-fadeIn">
                      <span class="text-red-700">RIDE,</span>
                      <span class="text-white">SHARE<br/>SHOP & BUILD</span>
                  </h2>

                  <p class="mb-8 text-lg leading-relaxed text-zinc-200">
                      Experience the thrill of cycling with our community. Share rides, find the best gear, and build lasting connections.
                  </p>

                  <!-- Progress Indicators -->
                  <div class="flex gap-3 mb-10">
                      <div class="w-4 h-4 bg-red-700 rounded-full"></div>
                      <div class="w-4 h-4 transition-colors duration-300 rounded-full bg-zinc-700 hover:bg-red-700"></div>
                      <div class="w-4 h-4 transition-colors duration-300 rounded-full bg-zinc-700 hover:bg-red-700"></div>
                      <div class="w-4 h-4 transition-colors duration-300 rounded-full bg-zinc-700 hover:bg-red-700"></div>
                  </div>

                  <!-- Stats Grid -->
                  <div class="grid grid-cols-3 gap-8 mb-12">
                      <div class="transition-transform duration-300 transform cursor-pointer group hover:scale-105">
                          <p class="text-4xl font-bold text-red-700 group-hover:animate-pulse">15K+</p>
                          <p class="text-sm font-medium uppercase text-zinc-200">Active Users</p>
                      </div>
                      <div class="transition-transform duration-300 transform cursor-pointer group hover:scale-105">
                          <p class="text-4xl font-bold text-red-700 group-hover:animate-pulse">500+</p>
                          <p class="text-sm font-medium uppercase text-zinc-200">Parts Sold</p>
                      </div>
                      <div class="transition-transform duration-300 transform cursor-pointer group hover:scale-105">
                          <p class="text-4xl font-bold text-red-700 group-hover:animate-pulse">75+</p>
                          <p class="text-sm font-medium uppercase text-zinc-200">Rides Done</p>
                      </div>
                  </div>
                  <a href="/marketplace" 
                     class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white transition-all duration-300 transform bg-red-700 rounded-lg group hover:bg-red-700 hover:scale-105 hover:shadow-lg">
                      SHOP NOW
                      <svg class="w-6 h-6 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                  </a>

              </div>
          </div>
      </div>
  </section>

  <!-- Who Are We Section -->
  <section class="h-screen text-white bg-gray-900">
      <div class="flex flex-col h-full lg:flex-row">
          <!-- Left Content -->
          <div class="flex items-center w-full p-8 bg-black lg:w-1/2 lg:p-16">
              <div class="max-w-xl mx-auto">
                  <div class="space-y-8 animate-fadeIn">
                      <h2 class="text-5xl font-bold tracking-tight lg:text-6xl">
                          WHO ARE <span class="text-red-700">WE?</span>
                      </h2>
                      <p class="text-2xl font-semibold">
                          WE ARE CYCLING COMMUNITY BASED IN <span class="text-red-700">NEPAL</span>
                      </p>
                      <p class="text-lg leading-relaxed text-gray-300">
                          Dedicated to bringing cyclists together, creating memorable experiences, and building a stronger community through our shared passion for cycling.
                      </p>
                      <a href="#" class="inline-flex items-center text-lg text-red-700 transition-all duration-300 hover:text-red-400 group">
                          Learn More 
                          <svg class="w-6 h-6 ml-2 transition-transform duration-300 transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                          </svg>
                      </a>
                  </div>
              </div>
          </div>


          <!-- Improved Right Grid -->
          <div class="w-full p-8 overflow-y-auto lg:w-1/2 bg-gradient-to-br from-zinc-900 to-black lg:p-16">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
              <!-- Enhanced Feature Cards -->
              <div class="relative group">
                <!-- Gradient border animation -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-primary via-purple-500 to-pink-500 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-gradient-xy"></div>
                
                <div class="relative flex items-center gap-4 px-7 py-6 bg-zinc-900 rounded-xl ring-1 ring-gray-800/5 shadow-2xl transition-all duration-300 hover:shadow-[0_0_2rem_-0.5rem_#DC2626] group-hover:scale-[1.01]">
                  <div class="flex-shrink-0 w-16 h-16 overflow-hidden rounded-lg ring-1 ring-gray-900/5">
                    <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?q=80&w=1470&auto=format&fit=crop" 
                         alt="Cycling Event" 
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                  </div>
                  
                  <div class="flex-1">
                    <h3 class="mb-2 text-xl font-bold text-white transition-colors duration-300 group-hover:text-primary">
                      CYCLING EVENT
                    </h3>
                    <p class="leading-relaxed text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                      Join exciting cycling events and connect with fellow enthusiasts.
                    </p>
                  </div>
                  
                  <!-- Hover arrow indicator -->
                  <div class="absolute transition-all duration-300 transform translate-x-2 opacity-0 right-4 group-hover:opacity-100 group-hover:translate-x-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Marketplace Card -->
              <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-primary via-purple-500 to-pink-500 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-gradient-xy"></div>
                
                <div class="relative flex items-center gap-4 px-7 py-6 bg-zinc-900 rounded-xl ring-1 ring-gray-800/5 shadow-2xl transition-all duration-300 hover:shadow-[0_0_2rem_-0.5rem_#DC2626] group-hover:scale-[1.01]">
                  <div class="flex-shrink-0 w-16 h-16 overflow-hidden rounded-lg ring-1 ring-gray-900/5">
                    <img src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?q=80&w=1470&auto=format&fit=crop" 
                         alt="Marketplace" 
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                  </div>
                  
                  <div class="flex-1">
                    <h3 class="mb-2 text-xl font-bold text-white transition-colors duration-300 group-hover:text-primary">
                      MARKETPLACE
                    </h3>
                    <p class="leading-relaxed text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                      Buy and sell quality cycling gear in our trusted marketplace.
                    </p>
                  </div>
                  
                  <div class="absolute transition-all duration-300 transform translate-x-2 opacity-0 right-4 group-hover:opacity-100 group-hover:translate-x-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Events Card -->
              <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-primary via-purple-500 to-pink-500 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-gradient-xy"></div>
                
                <div class="relative flex items-center gap-4 px-7 py-6 bg-zinc-900 rounded-xl ring-1 ring-gray-800/5 shadow-2xl transition-all duration-300 hover:shadow-[0_0_2rem_-0.5rem_#DC2626] group-hover:scale-[1.01]">
                  <div class="flex-shrink-0 w-16 h-16 overflow-hidden rounded-lg ring-1 ring-gray-900/5">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1470&auto=format&fit=crop" 
                         alt="Events" 
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                  </div>
                  
                  <div class="flex-1">
                    <h3 class="mb-2 text-xl font-bold text-white transition-colors duration-300 group-hover:text-primary">
                      EVENTS
                    </h3>
                    <p class="leading-relaxed text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                      Discover in exciting cycling events near you.
                    </p>
                  </div>
                  
                  <div class="absolute transition-all duration-300 transform translate-x-2 opacity-0 right-4 group-hover:opacity-100 group-hover:translate-x-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                  </div>
                </div>
              </div>

              <!-- Community Card -->
              <div class="relative group">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-primary via-purple-500 to-pink-500 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-gradient-xy"></div>
                
                <div class="relative flex items-center gap-4 px-7 py-6 bg-zinc-900 rounded-xl ring-1 ring-gray-800/5 shadow-2xl transition-all duration-300 hover:shadow-[0_0_2rem_-0.5rem_#DC2626] group-hover:scale-[1.01]">
                  <div class="flex-shrink-0 w-16 h-16 overflow-hidden rounded-lg ring-1 ring-gray-900/5">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1470&auto=format&fit=crop" 
                         alt="Community" 
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                  </div>
                  
                  <div class="flex-1">
                    <h3 class="mb-2 text-xl font-bold text-white transition-colors duration-300 group-hover:text-primary">
                      COMMUNITY
                    </h3>
                    <p class="leading-relaxed text-gray-400 transition-colors duration-300 group-hover:text-gray-300">
                      Connect with cyclists, share experiences, and grow together.
                    </p>
                  </div>
                  
                  <div class="absolute transition-all duration-300 transform translate-x-2 opacity-0 right-4 group-hover:opacity-100 group-hover:translate-x-0">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                  </div>
                </div>
              </div>
              </div>
          </div>
      </div>
  </section>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const textElement = document.getElementById('animated-text');
      const textOptions = ['Cycling', 'Trekking', 'Hiking'];
      let currentIndex = 0;

      setInterval(() => {
          textElement.classList.remove('fade-in');
          textElement.classList.add('fade-out');

          setTimeout(() => {
              currentIndex = (currentIndex + 1) % textOptions.length;
              textElement.textContent = textOptions[currentIndex];
              textElement.classList.remove('fade-out');
              textElement.classList.add('fade-in');
          }, 500); // Match the transition duration
      }, 2000); // Change text every 2 seconds
  });
</script>