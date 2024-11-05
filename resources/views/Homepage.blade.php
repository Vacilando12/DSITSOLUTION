@extends('layout')

@section('content') 

<div class="absolute inset-0 bg-grey opacity-100 min-h-screen">
    <div class="container mx-auto h-full flex flex-col lg:flex-row items-center justify-center lg:justify-start space-y-4 lg:space-y-0 lg:space-x-8 px-5">
        <div class="text-white max-w-lg space-y-4">
            <h1 class="text-4xl lg:text-6xl font-bold leading-snug">We are in Business on Making Your Business Better</h1>
            <button class="w-full sm:w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read More</button>
        </div>
        <div class="text-white max-w-3xl space-y-4 px-5 mt-8 lg:mt-0">
            <img src="{{ asset('images/bg_1.jpg') }}" class="w-full bg-cover bg-center opacity-80 rounded-lg" alt="DS IT SOLUTION Logo" />
        </div>
    </div><br><br>
    
    <div class="mt-10 mb-20 text-center px-5">
        <h2 class="text-2xl lg:text-3xl font-bold mb-8">Our Exclusive IT Solution Services</h2>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md text-center">
                    <span class="text-4xl text-primary flaticon-web-programming"></span>
                    <h3 class="text-xl font-bold my-4">Web Development</h3>
                    <p>Creating responsive and efficient web applications tailored to your needs.</p>
                    <img src="{{ asset('images/work-4.jpg') }}" class="w-full mt-4 rounded-lg" alt="Web Development" />
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md text-center">
                    <span class="text-4xl text-primary flaticon-stats"></span>
                    <h3 class="text-xl font-bold my-4">Database Analysis</h3>
                    <p>Providing reliable and secure data solutions to optimize your operations.</p>
                    <img src="{{ asset('images/work-3.jpg') }}" class="w-full mt-4 rounded-lg" alt="Database Analysis" />
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md text-center">
                    <span class="text-4xl text-primary flaticon-secure"></span>
                    <h3 class="text-xl font-bold my-4">Server Security</h3>
                    <p>Ensuring the security and integrity of your data with robust protection systems.</p>
                    <img src="{{ asset('images/work-1.jpg') }}" class="w-full mt-4 rounded-lg" alt="Server Security" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       

<script>

  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) { 
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>

<style>
   .primary {
  color: #3490dc;
}

.hover\:text-primary:hover {
  color: #3490dc;
}
  
  #navbar.scrolled {
    background-color: skyblue; 
    color: black; 
  }
  
  #navbar.scrolled a {
    color: black; 
  }
  
  #navbar.scrolled a:hover {
    color:white; 
  }
</style>