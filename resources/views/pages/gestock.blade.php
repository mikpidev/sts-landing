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
               Gestock
            </h1>
            <span class=" fw-semibold text-uppercase">
               Sales Management System

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
                  <i class="devicon-bootstrap-plain colored"></i>
               </div>

               <div class="tech-icon">
                  <i class="devicon-javascript-plain colored"></i>
               </div>


               <div class="tech-icon">
                  <i class="devicon-docker-plain colored"></i>
               </div>

               <div class="tech-icon">
                  <i class="devicon-oracle-original colored"></i>
               </div>

               <div class="tech-icon">
                  <i class="devicon-linux-plain colored"></i>

               </div>

            </div>

            <br>
            <p class="lead text-muted">
               Gestock is a multi-tenant business management platform designed to adapt to different industries. It provides tools for inventory control, sales management, customer administration, reporting, and electronic invoicing, allowing each business to operate in an independent and scalable environment.
            </p>

         </div>

         <!-- Logo -->
         <div class="col-lg-4 text-center">

            <img src="https://i.ibb.co/605r0jry/Gestock.png"
               class="img-fluid"
               style="max-width: 220px;     margin-top: 30px;">

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
                  <img src="https://i.ibb.co/1tkwbXHS/login.png" alt="login" border="0"></a>
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/1tkwbXHS/login.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Login</a>
                        </h4>
                        <p class="text">
                           Fast point-of-sale interface designed for high-volume daily sales.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>

         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img src="https://i.ibb.co/LDgtZDyp/multitennant.png" alt="multitennant"></a>
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/LDgtZDyp/multitennant.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Multi-tenant Platform</a>
                        </h4>
                        <p class="text">
                           Generate and send DTEs directly to the tax authority.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>


         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://i.ibb.co/99rJDsTP/dashboard.png"
                     alt="dashboard" />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/99rJDsTP/dashboard.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Dashboard</a>
                        </h4>
                        <p class="text">
                           Manage user accounts, assign roles, and control access to different areas of the system, ensuring a secure and organized workflow.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>



         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://i.ibb.co/whQd278d/users.png"
                     alt="users" />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/whQd278d/users.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Users Management</a>
                        </h4>
                        <p class="text">
                           Export all sales documents within a selected date range into a ZIP file containing PDF invoices and their corresponding JSON files for accounting and tax purposes.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>

         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://i.ibb.co/RZcpFLW/customers.png"
                     alt="customers" />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/RZcpFLW/customers.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Customer Management</a>
                        </h4>
                        <p class="text">
                           Centralize customer information, quickly search existing records, and simplify the sales process with organized and up-to-date customer profiles.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>

         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://i.ibb.co/4RGfk4KN/salesindex.png"
                     alt="salesindex" />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/4RGfk4KN/salesindex.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Sales History</a>
                        </h4>
                        <p class="text">
                           Manage user accounts, assign roles, and control access to different areas of the system, ensuring a secure and organized workflow.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>

         <div class="col-lg-4 col-sm-6 show" data-filter="features">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://i.ibb.co/LDwfzPPc/salescreate.png"
                     alt="salesindex" />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://i.ibb.co/LDwfzPPc/salescreate.png">
                           <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">POS</a>
                        </h4>
                        <p class="text">
                           Manage user accounts, assign roles, and control access to different areas of the system, ensuring a secure and organized workflow.
                        </p>
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
                              Built the backend, business logic, authentication, and electronic invoicing workflows.
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
                              Developed the server-side application logic and integrated external tax authority services.
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
                              Stored and managed business data, including products, customers, sales, and inventory.
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
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original-wordmark.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original-wordmark.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Bootstrap</a>
                           </h4>
                           <p class="text">
                              Created a responsive and consistent user interface optimized for desktop and tablet use.
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
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-plain.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-plain.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">JavaScript</a>
                           </h4>
                           <p class="text">
                              Enhanced the user experience with dynamic forms, interactive tables, and real-time validations.
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
                              Provided a consistent local development environment and hosted the electronic signature service required for DTE generation.
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
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/oracle/oracle-original.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/oracle/oracle-original.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Oracle Cloud Infrastructure (OCI)</a>
                           </h4>
                           <p class="text">
                              Hosted backups, reports, and cloud resources used by the application.
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
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linux/linux-original.svg" border='0' />

                  </div>
                  <div class="portfolio-overlay d-flex align-items-center">
                     <div class="portfolio-content">
                        <div class="portfolio-icon">
                           <a
                              class="image-popup-two glightbox"
                              href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linux/linux-original.svg">
                              <i class=" lni lni-zoom-in"></i>
                           </a>
                        </div>
                        <div class="portfolio-text">
                           <h4 class="portfolio-title">
                              <a href="javascript:void(0)">Linux</a>
                           </h4>
                           <p class="text">
                              Deployed and maintained the production environment using Apache, PHP, and scheduled background tasks.
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