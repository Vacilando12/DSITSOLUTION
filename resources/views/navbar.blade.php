
<div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/background.gif') }}');">
  <nav class="bg-transparent fixed w-full z-10 text-white transition duration-300" id="navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6 bg-transparent">
    
      <a href="#" class="flex items-center space-x-3">
        <img src="{{ asset('images/DSITlogo.png') }}" class="h-8" alt="DS IT SOLUTION Logo" />
        <span class="self-center text-2xl font-semibold tracking-wide">DS IT SOLUTIONS</span>
      </a>
      
      <!-- Hamburger Menu Button for Mobile -->
      <div class="flex md:order-2">
        <button data-collapse-toggle="navbar-cta" data-target="#navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-white" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      
      <!-- Navbar Links -->
        <div class="hidden md:flex ml-auto">
         
        </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <div class="hidden md:flex space-x-8">
          <a href="#" class="hover:text-primary">Home</a>
          <a href="#" class="hover:text-primary">About</a>
          <a href="#" class="hover:text-primary">Services</a>
          <a href="#" class="hover:text-primary">Contact Us</a>
          <a href="#" class="hover:text-primary">Login</a>
        </div>
       
      </div>
     
    </div>
  </nav>
</div>

 

 

