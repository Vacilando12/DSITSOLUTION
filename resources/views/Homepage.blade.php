@extends('layout')

@section('content') 
<style>
 

    .container {
      max-width: 1200px;
      margin: 0 auto;
    
    }

    .heading {
      text-align: left;
      margin-bottom: 20px;
      justify-content: center; /* Horizontal alignment */
            align-items: center; /* Vertical alignment */
    }

    .heading h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .heading h1 span {
      color: #0177ff;
      font-size: 1.2rem;
      display: block;
      margin-bottom: 10px;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .text-section {
      flex: 1;
      min-width: 300px;
    }

    .text-section h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .text-section p {
      margin-bottom: 20px;
    }

    .feature {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .feature-item {
      flex: 1 1 calc(50% - 20px);
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .feature-item h3 {
      margin-top: 0;
      font-size: 1.2rem;
      color: #333;
    }

    .feature-item p {
      font-size: 0.9rem;
      color: #666;
    }

    .image-section {
      flex: 1;
      min-width: 300px;
      text-align: center;
    }

    .image-section img {
      max-width: 100%;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .content {
        flex-direction: column;
      }

      .feature {
        flex-direction: column;
      }

      .feature-item {
        flex: 1 1 100%;
      }
    }
  </style>

<div class="absolute inset-0 bg-grey opacity-100 min-h-screen">
    <div class="container mx-auto h-full flex flex-col lg:flex-row items-center justify-center lg:justify-start space-y-4 lg:space-y-0 lg:space-x-8 px-5">
        <div class="text-white max-w-lg space-y-4">
            <h1 class="text-4xl lg:text-6xl font-bold leading-snug">We are in Business on Making Your Business Better</h1>
            <button class="w-full sm:w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read More</button>
            <button class="w-full sm:w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Request a Consultation</button>
        </div>
        <div class="text-white max-w-3xl space-y-4 px-5 mt-8 lg:mt-0">
            <img src="{{ asset('images/bg_1.jpg') }}" class="w-full bg-cover bg-center opacity-80 rounded-lg" alt="DS IT SOLUTION Logo" />
        </div>
    </div>
    
   <br><br>
      <!-- Image Section -->
      <div class="image-section">
        <img src="{{ asset('images/backgrounds.gif') }}" alt="IT Solutions Provider Image">
    </div>

    <!-- IT Solutions Provider Section -->
    <div class="provider-section">
        <h1>Leading IT Solutions Provider</h1>
        <p>At DS IT Solutions, we specialize in creating visually stunning, high-performing websites and custom software
            solutions.</p>
        <button>Learn More</button>
    </div>

  
  
    <div class="container">
    <div class="heading">
      <span>CRAFTING VISUALLY STUNNING WEBSITES</span>
      <h1>Optimized for User Experience and Business Growth</h1>
      <p>At DS IT Solutions, we believe that the best websites are not just beautiful to look at, but also deliver tangible results for our clients.</p>
    </div>
    <div class="content">
      <div class="text-section">
        <div class="feature">
          <div class="feature-item">
            <h3>Web Development Expertise</h3>
            <p>With our extensive experience and expertise in web development, we have a proven track record of delivering visually stunning and functional websites that exceed client expectations.</p>
          </div>
          <div class="feature-item">
            <h3>Streamlining Business Operations</h3>
            <p>Our website development services are designed to not only enhance the user experience, but also optimize business operations through streamlined processes and systems.</p>
          </div>
          <div class="feature-item">
            <h3>Enhancing Productivity</h3>
            <p>Through custom software solutions, we help businesses enhance their productivity and efficiency, driving better results and growth.</p>
          </div>
          <div class="feature-item">
            <h3>Measurable Results</h3>
            <p>At DS IT Solutions, we believe in delivering measurable results for our clients, whether it’s through improved user engagement, increased conversions, or enhanced business efficiency.</p>
          </div>
        </div>
      </div>
      <div class="image-section">
        <img src="{{ asset('images/image_2.jpg') }}" alt="A person working on a laptop">
      </div>
    </div>
  </div>
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
     

<script>

  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 20) { 
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>
<style>
  
        .header {
           
            color: white;
            padding: 20;
            text-align: center;
            max-width: 100%;
           

        }

        .header .features {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .header .feature {
            text-align: center;
            max-width: 200px;
        }

        .header .feature h3 {
            font-size: 18px;
            margin-top: 10px;
        }

        .header .feature p {
            font-size: 14px;
            margin-top: 2px;
        }

        .provider-section {
            text-align: center;
            padding: 50px 20px;
        }

        .provider-section h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .provider-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .provider-section button {
            background-color: #004d63;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .provider-section button:hover {
            background-color: #006c86;
        }

        .image-section {
            text-align: center;
            display: flex;
            justify-content: center; /* Horizontal alignment */
            align-items: center; /* Vertical alignment */

        }

        .image-section img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        
          
        }
  
          .primary {
          color: #3490dc;
        }

        .hover\:text-primary:hover {
          color: #3490dc;
        }
          
          #navbar.scrolled {
            background-color: #EDEEF1FF; 
            color: black; 
          }
          
          #navbar.scrolled a {
            color: black; 
          }
          
          #navbar.scrolled a:hover {
            color: #5D6A92FF 
          }
</style>

@endsection  