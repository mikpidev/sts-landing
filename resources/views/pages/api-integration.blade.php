@extends('layout.app')

@section('title', 'Inicio - STS')

@section('content')


<!--====== gLightBox CSS ======-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />

<section class="portfolio-area portfolio-one py-5">
   <div class="container-fluid px-lg-5 px-3">
      <div class="row align-items-center mb-5">

         <!-- Texto -->
         <div class="col-lg-8">

            <h1 class="display-2 fw-bold mt-2">
               Hacienda DTE Integration API
            </h1>
            <span class=" fw-semibold text-uppercase">
               Backend Integration Service

            </span>

            <p><br></p>

            <div class="tech-stack">

               <div class="tech-icon">
                  <i class="devicon-laravel-original colored"></i>
               </div>

               <div class="tech-icon">
                  <i class="devicon-php-plain colored"></i>
               </div>

               <div class="tech-icon">
                  <i class="devicon-mysql-original colored"></i>
               </div>

               <div class="tech-icon">

                  <i class="devicon-json-plain colored"></i>
               </div>


               <div class="tech-icon">
                  <i class="devicon-docker-plain colored"></i>
               </div>

            </div>

            <br>
            <p class="lead text-muted">
               Backend service developed to integrate business applications with El Salvador's Hacienda electronic invoicing platform. The solution manages electronic tax document workflows, including DTE JSON generation, authentication, digital signing, API communication, validation processes, and response handling. </p>

         </div>


      </div>
      <div class="row">
         <div class="col-lg-12">

            <div class="portfolio-menu">

               <button class="active" data-filter="features">FEATURES</button>
               <button data-filter="tech">TECH STACK</button>

            </div>

         </div>
      </div>

   </div>



</section>
<section class="portfolio-area portfolio-one py-0">
   <div class="container-fluid px-lg-5 px-3"> <!-- row -->
      <div class="row grid">
         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img src="https://i.ibb.co/1YRSW0X1/apidte.png" alt="login" border="0"></a>
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/1YRSW0X1/apidte.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">API Structure</a>
                        </h4>
                        <p class="text">
                           isual representation of the backend workflow used to process electronic tax documents, including generation, signing, API communication, and status tracking. </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>



         <div class="row grid">

            <div class="col-lg-4 col-sm-6 hide" data-filter="tech">
               <div class="portfolio-style-one text-center">
                  <div class="portfolio-tech-image">
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original-wordmark.svg" border="0" />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original-wordmark.svg">
                              <i class="lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Laravel</a>
                           </h4>
                           <p class="text">
                              Used to build the backend architecture, business logic, service layers, API communication, and electronic document processing workflows.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- single portfolio -->
            </div>

            <div class="col-lg-4 col-sm-6 hide" data-filter="tech">
               <div class="portfolio-style-one text-center">
                  <div class="portfolio-tech-image">

                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" border="0" />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg">
                              <i class="lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">PHP</a>
                           </h4>
                           <p class="text">
                              Used as the main programming language to develop the backend services, data processing logic, and integration workflows.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- single portfolio -->
            </div>

            <div class="col-lg-4 col-sm-6 hide" data-filter="tech">
               <div class="portfolio-style-one text-center">
                  <div class="portfolio-tech-image">
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">MySQL</a>
                           </h4>
                           <p class="text">
                              Used to store document information, processing records, API responses, and DTE transaction data.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- single portfolio -->
            </div>

            <div class="col-lg-4 col-sm-6 hide" data-filter="tech">
               <div class="portfolio-style-one text-center">
                  <div class="portfolio-tech-image">
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original-wordmark.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original-wordmark.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Docker</a>
                           </h4>
                           <p class="text">
                              Used to run isolated services required for the development environment, including digital signing components. </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- single portfolio -->
            </div>

            <div class="col-lg-4 col-sm-6 hide" data-filter="tech">
               <div class="portfolio-style-one text-center">
                  <div class="portfolio-tech-image">

                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/json/json-original.svg" />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/json/json-original.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Json</a>
                           </h4>
                           <p class="text">
                              Used to structure electronic tax documents according to Hacienda's DTE data requirements.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- single portfolio -->
            </div>


            <!-- add more cards before this line  -->

         </div>

         <!-- add more cards before this line  -->

      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>

<!-- TECH Cards -->

<!--====== portfolio ONE PART ENDS ======-->

<!--====== gLightBox js ======-->
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/js/glightbox.min.js"></script>

<script>
   const filters = document.querySelectorAll(".portfolio-menu button");

   filters.forEach((filter) => {
      filter.addEventListener("click", function() {
         // ==== Filter btn toggle
         let filterBtn = filters[0];
         while (filterBtn) {
            if (filterBtn.tagName === "BUTTON") {
               filterBtn.classList.remove("active");
            }
            filterBtn = filterBtn.nextSibling;
         }
         this.classList.add("active");

         // === filter
         let selectedFilter = filter.getAttribute("data-filter");
         let itemsToHide = document.querySelectorAll(
            `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
         );
         let itemsToShow = document.querySelectorAll(
            `.grid [data-filter='${selectedFilter}']`
         );

         if (selectedFilter == "all") {
            itemsToHide = [];
            itemsToShow = document.querySelectorAll(".grid [data-filter]");
         }

         itemsToHide.forEach((el) => {
            el.classList.add("hide");
            el.classList.remove("show");
         });

         itemsToShow.forEach((el) => {
            el.classList.remove("hide");
            el.classList.add("show");
         });
      });
   });

   //========= glightbox
   const myGallery = GLightbox({
      selector: ".glightbox",
      type: "image",
      width: 900,
   });
</script>


@endsection