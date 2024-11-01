@extends('layout')
@include('navbar')
@section('content') 
<div class="absolute inset-0 bg-grey opacity-100 min-h-screen ">
    <div class="container mx-auto h-full flex items-center justify-start">
        <div class="text-white max-w-lg space-y-4 px-5">
            <h1 class="text-6xl font-bold">We are in Business on Making you Business Better</h1><br>
            <button class="w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read More</button>
        </div>
        <div class="text-white max-w-3xl space-y-4 px-5">
        <img src="{{ asset('images/bg_1.jpg') }}" class="relative bg-cover bg-center bg-black opacity-80 "  alt="DS IT SOLUTION Logo" />
        </div>
    </div>
    
    <div class=" mt-7 mb-20 text-center">
      <h2 class="text-3xl font-bold mb-8">Our Exclusive IT Solution Services</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                
                    <span class="text-4xl text-primary flaticon-web-programming"></span>
                    <h3 class="text-xl font-bold my-4">Web Development</h3>
                    <p>Creating responsive and efficient web applications tailored to your needs.</p><br>
                    <img src="{{ asset('images/work-4.jpg') }}" class="h-25 w-26"  alt="DS IT SOLUTION Logo" />
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <span class="text-4xl text-primary flaticon-stats"></span>
                    <h3 class="text-xl font-bold my-4">Database Analysis</h3>
                    <p>Providing reliable and secure data solutions to optimize your operations.</p><br>
                    <img src="{{ asset('images/work-3.jpg') }}" class="h-25 w-26"  alt="DS IT SOLUTION Logo" />
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <span class="text-4xl text-primary flaticon-secure"></span>
                    <h3 class="text-xl font-bold my-4">Server Security</h3>
                    <p>Ensuring the security and integrity of your data with robust protection systems.</p><br>
                    <img src="{{ asset('images/work-1.jpg') }}" class="h-25 w-26"  alt="DS IT SOLUTION Logo" />
            </div>
        </div>
    </div>
    
</div>


@endsection       


<script>
  // JavaScript to add a class on scroll
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) { // Adjust this value based on when you want the color change
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

<style>
  /* CSS for the scrolled class */
  #navbar.scrolled {
    background-color: white; /* Change navbar background to white */
    color: black; /* Change text color to black */
  }
  
  #navbar.scrolled a {
    color: black; /* Change link color to black when scrolled */
  }
  
  #navbar.scrolled a:hover {
    color: #00FFD1; /* Keep hover color consistent */
  }
</style>
