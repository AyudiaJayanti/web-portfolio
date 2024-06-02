<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="user/dist/output.css" rel="stylesheet">
  <title>Ayudia Jayanti</title>
  <link rel="stylesheet" href="user/src/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&family=Source+Sans+3:wght@800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark scroll-smooth">

  <nav class="py-2">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 navbar-sticky">
      <div class="flex justify-between items-center h-16">
        <div class="flex-shrink-0 flex items-center">
          <span class="text-white text-2xl font-bold">Ayudia <span class="text-primary"></span></span>
        </div>

        <div class="hidden sm:block ml-auto">
          <div class="ml-10 flex item-baseline space-x-4">
            <a href="#home" class=" text-white hover:underline px-3 py-2 text-sm font-medium">Home</a>
            <a href="#about" class=" text-white hover:underline px-3 py-2 text-sm font-medium">About Me</a>
            <a href="#interest" class="text-white hover:underline px-3 py-2 text-sm font-medium">Interest</a>
            <a href="#portofolio" class="text-white hover:underline px-3 py-2 text-sm font-medium">Portofolio</a>
            <a href="#contact" class="text-white border border-primary rounded-none py-[10px] px-3 hover:bg-primary text-sm font-medium">Contact</a>
          </div>
        </div>

        <div class="sm:hidden flex items-center">
          <button id="mobile-menu-btn" type="button" class="text-white hover:text-light-gray focus:outline-none focus:text-light-gray" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div id="mobile-menu" class="hidden sm:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#home" class="text-white hover:underline block px-3 py-2 text-base font-medium">Home</a>
        <a href="#about" class="text-white hover:underline block px-3 py-2 text-base font-medium">About Me</a>
        <a href="#interest" class="text-white hover:underline block px-3 py-2 text-base font-medium">Interest</a>
        <a href="#portofolio" class="text-white hover:underline block px-3 py-2 text-base font-medium">Portofolio</a>
        
        <div class="px-2">
          <a href="#contact" class="text-white border block border-primary rounded-none py-[10px] px-3 hover:bg-primary text-sm font-medium">Contact</a>
        </div>
      </div>
    </div>

  </nav>

  <section id="home" class="home text-white py-20">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <h4 class="text-2xl font-bold text-primary lg:leading-[94px] lg:text-[38px]">Hallo, I'm Ayudia Jayanti</h4>
      <h1 class="text-5xl mt-3 font-bold lg:text-[88px] lg:leading-[94px]"><span id="typed"></span></h1>
      <p class="mt-4 text-gray font-normal text-base w-full lg:w-3/6 mt-9">I'm a student who is interested with product design and front-end web development.</p>
      
      <div class="mt-14">
        <div class="mt-6 flex items-center gap-3">
          <div class="rounded-full btn-primary border-primary border hover:bg-primary py-2 px-3">
            <a href="https://instagram.com/ayudiajayanti?igshid=NzZlODBkYWE4Ng==" target="_blank" class=""><i class="fab fa-instagram fa-lg"></i></a>
          </div>
          <div class="rounded-full btn-primary border-primary border hover:bg-primary py-2 px-3">
            <a href="https://www.linkedin.com/in/ayudia-jayanti-829b621ab?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class=""><i class="fa-brands fa-linkedin fa-lg"></i></i></a>
          </div>
          <div class="rounded-full btn-primary border-primary border hover:bg-primary py-2 px-3">
            <a href="https://github.com/ayudiaj" target="_blank" class=""><i class="fa-brands fa-github fa-lg"></i></a>
          </div>
          <a href="user/src/img/UIUX.pdf" download = "UIUX.pdf" class="ml-5 flex items-center text-gray font-bold text-lg" download>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
            <span class="ml-2  hover:underline"> Download CV</span>

          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about bg-light-dark">
    <div class="container py-5 max-w-xl mx-auto  text-center px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <hr class="w-14 border-t-2 border-primary mr-4">
        <h6 class="text-primary text-xl mr-4 lg:text-xl">About Me</h6>
      </div>

      <h2 class="text-white text-3xl lg:text-5xl font-bold mb-2 mt-4 mx-auto">
        Let's Know More About Me!
      </h2>
    </div>

    <div class="grid xl:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 pl-25 pt-5 sm:py-2">
      <div class="">
        <p class="text-white mt-20  pl-20 sm:mt-0 sm:pl-1 text-xl">Hi, I'm Ayudia Jayanti, originally from <span class="bg-primary p-1 text-2xl">Bandung</span>, My academic focus revolves around UI/UX design and front-end programming. I'm dedicated to honing my skills in these areas and continually expanding my knowledge.</p>
      </div>
      <div class="items-center">
        <img src="user/src/img/Profile.png" alt="" class="w-full max-w-sm md:ml-20 sm-item xl:w-1 bottom-0 "></div>
    </div>
    
  </section>

  <section id="interest" class="services pt-5 mt-3">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="block md:flex items-start justify-between">
        <h2 class="text-white text-3xl lg:text-5xl font-bold mb-2 w-full md:w-1/2 lg:w-3/5"> Less than 1 year experience</h2>
        <div class="mt-6 md:mt-0 w-full md:w-[360px]">
          <div class="flex items-center">
            <hr class="w-14 border-t-2 border-primary mr-4">
            <h6 class="text-primary text-xl mr-4 lg:text-xl">Interest</h6>
          </div>
          <p class="mt-2 text-gray">My interest on tech.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mt-20">
        <div class="card-service bg-light-dark hover:bg-primary shadow-md rounded-none px-6 py-16" style="position: relative;">

          <i class="fa-solid fa-code fa-3x text-white"></i>
            
            <h5 class="text-white text-2xl font-bold mt-11">
              Product Design
            </h5>
            <p class="text-white text-base mb-4 leading-5 mt-5">
              I am a product designer who focuses on combining aesthetic creativity with a deep understanding of user needs to create innovative and functional design solutions.
            </p>
        </div>

        <div class="card-service bg-light-dark hover:bg-primary border shadow-md rounded-none px-6 py-16" style="position: relative;">

          <i class="fa-solid fa-pen-nib fa-3x text-white"></i>
            
            <h5 class="text-white text-2xl font-bold mt-11">
              Front-end Web
            </h5>
            <p class="text-white text-base mb-4 leading-5 mt-5">
              I am a front-end web developer proficient in translating designs into responsive and visually appealing user interfaces using web technologies and programming languages.
            </p>
        </div>

      </div>
    </div>
  </section>

  <section id="portofolio" class="work mt-28 py-28 bg-light-dark">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="block md:flex items-center justify-between">
            <div>
                <div class="flex items-center">
                    <hr class="w-14 border-t-2 border-primary mr-4">
                    <h6 class="text-primary text-xl mr-4 lg:text-xl">Portofolio</h6>
                </div>
                <h2 class="text-white text-3xl lg:text-5xl font-bold mb-2 md:w-3/4 mt-4">
                    Some of my recent projects
                </h2>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="#" class="text-white border border-primary px-3 py-2 rounded-none text-base font-medium hover:bg-primary focus:bg-primary mt-4">View All Projects</a>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <?php
            // Loop through portfolio data from database query
            foreach ($portfolio as $project) {
                ?>
                <div class="w-full md:w-1/2 px-4 mt-20">
                    <div class="relative">
                        <!-- Use the image link from the database -->
                        <img src="<?php echo $project->gambar; ?>" alt="<?php echo $project->nama_porto; ?>" class="w-full grayscale">
                    </div>
                    <h5 class="font-semibold text-white mt-9 text-[28px]"><?php echo $project->nama_porto; ?></h5>
                    <a href="<?php echo $project->link_porto; ?>" class="flex items-center text-primary font-medium text-xl mt-2" target="_blank">
                        <span class="mr-2 hover:underline">See Project</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

  <section id="contact" class="contact bg-dark py-28">
    <div class="container max-w-xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <hr class="w-14 border-t-2 border-primary mr-4">
        <h6 class="text-primary text-xl mr-4 lg:text-xl">Contact</h6>
      </div>

      <h2 class="text-white text-3xl lg:text-5xl font-bold mb-2 mt-4 mx-auto">
        Get In Touch
      </h2>

      
      <div class=" md:items-center">
        <form class="max-w-xl md:items-center space-y-5 mt-10">
          <div class="md:items-center space-y-3 mb-6">
            <div class="text-left">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
          </div>

          <div class="md:items-center space-y-3 mb-6">
            <div class="text-left">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="youremail@gmail.com" required>
          </div>

          <div class="text-left mb-6">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
              <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="mt-8 md:mt-3">
              <a href="#" class="border-primary border hover:bg-primary text-white rounded-none py-3 px-6 text-lg font-medium">Contact Me</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <footer class="pt-8 pb-6 bg-deep-dark items-center md:flex justify-center">
    <i class="fa-regular fa-copyright text-white mr-2"></i>
    <span class="text-white">Ayudia Jayanti - 225150600111005</span>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#mobile-menu-btn").click(function () {
        $("#mobile-menu").slideToggle();
      });
    });
  </script>

  <script>
    var typed = new Typed('#typed', {
      strings: ['Product Designer', 'Front-end Developer'],
      typeSpeed: 80,
      backSpeed: 50,
      loop: true
    }
    )
  </script>
</body>
</html>