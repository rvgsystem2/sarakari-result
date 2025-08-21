
<div class="max-w-7xl text-center text-white py-4 bg-blue-900">
    <h1 class="text-3xl font-bold text-center p-4">Sarakari Result</h1>
    <span class="text-center p-0">sarakariresult.com</span>
</div>

  <header class=" bg-red-800 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">

        <!-- Logo -->
        <div class="text-2xl font-bold">Sarakari Results</div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-6">
          <a href="/" class="hover:text-yellow-300">Home</a>
          <a href="{{route('latestjob')}}" class="hover:text-yellow-300">Latest Job</a>
          <a href="{{route('admit_card')}}" class="hover:text-yellow-300">Admit Card</a>
          <a href="{{route('result')}}" class="hover:text-yellow-300">Result</a>
          <a href="{{route('admission')}}" class="hover:text-yellow-300">Admission</a>
          <a href="{{route('syllbus')}}" class="hover:text-yellow-300">Syllabus</a>
          <a href="{{route('answerkey')}}" class="hover:text-yellow-300">Answer Key</a>

          <!-- Dropdown -->
          <div class="relative group">
            <button class="hover:text-yellow-300 flex items-center">
              More
              <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute hidden group-hover:block bg-white text-black mt-2 w-40 rounded shadow-lg z-10">
              <a href="{{route('contact')}}" class="block px-4 py-2 hover:bg-gray-100">Contact</a>
              <a href="{{route('privacyPolicy')}}" class="block px-4 py-2 hover:bg-gray-100">Privacy Policy</a>
              <a href="{{route('disclaimer')}}" class="block px-4 py-2 hover:bg-gray-100">Support</a>
            </div>
          </div>
        </nav>

        <!-- Mobile Toggle -->
        <div class="md:hidden">
          <button id="menuToggle" class="focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-blue-700 px-4 pb-4 space-y-2">
      <a href="/" class="block text-white hover:text-yellow-300">Home</a>
      <a href="{{route('latestjob')}}" class="block text-white hover:text-yellow-300">Latest Job</a>
      <a href="{{route('admit_card')}}" class="block text-white hover:text-yellow-300">Admit Card</a>
      <a href="{{route('result')}}" class="block text-white hover:text-yellow-300">Result</a>
      <a href="{{route('admission')}}" class="block text-white hover:text-yellow-300">Admission</a>
      <a href="{{route('syllbus')}}" class="block text-white hover:text-yellow-300">Syllabus</a>
      <a href="{{route('answerkey')}}" class="block text-white hover:text-yellow-300">Answer Key</a>
      <a href="#more" class="block text-white hover:text-yellow-300">More</a>
    </div>
  </header>

  <script>
    const toggleBtn = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

