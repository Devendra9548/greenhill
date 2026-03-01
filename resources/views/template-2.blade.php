<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Maxvel Group premium residential projects - pricing, highlights, floor plans, and location details." />
  <meta name="keywords" content="Maxvel Group, apartments, floor plans, real estate, pricing, location" />
  <meta name="author" content="Maxvel Group" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


  <title>Greenhills Plot LP</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/m-style.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<x-header />
<div class="main">

<section class="hero-section-2" id="home">
  
  <div class="content-layer">
  <div class="container"> 
    <div class="row">
       <div class="col-12 col-md-6 d-flex align-items-center">
        <div class="main-content-upper">
          <div class="content">
             <h1 class="main-title">Green Hills, Premium Plotted <br> Development in Shahpura,<br> Rajasthan</h1>
             <a href="#home" class="btn-web-button">Register Now</a>
          </div>
        </div>
       </div>
       <div class="col-12 col-md-6 register-layer">
        <h2 class="mb-3">Register Now</h2>
       <form name="registerForm" action="{{route('registernow')}}" method="post">
        @csrf

  <div class="row g-3">
    <div class="col-12 col-md-6">
        <label class="form-label">Full Name *</label>
        <input type="text" class="form-control" name="full_name" required>
        @error('full_name')
        <span class="fw-bold text-danger" style="font-size:13px">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Father's/Husband's Name *</label>
        <input type="text" class="form-control" name="father_husband_name" required>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Mobile Number *</label>
        <input type="tel" class="form-control" name="mobile_number" required>
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">E-mail ID</label>
        <input type="email" class="form-control" name="email_id">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Full Address</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="col-12 col-md-6">
        <label class="form-label">Aadhaar Card Number</label>
        <input type="text" class="form-control" name="aadhaar_number">
    </div>
    <div class="col-12 col-md-12">
        <label class="form-label">PAN Card Number</label>
        <input type="text" class="form-control" name="pan_number">
    </div>

  </div>

  <div class="mt-4 d-flex justify-content-end">
  @if(session('success'))
    <span class="fw-bold text-black" style="font-size:16px;margin-top: 13px; margin-right: 20px;">{{ session('success') }}</span>
    @endif
    @if(session('fail'))
    <span class="fw-bold text-danger" style="font-size:16px;margin-top: 13px; margin-right: 20px;">{{ session('fail') }}</span>
@endif
    <button type="submit" class="btn-web-button">Register Now</button>
  </div>

  </form>

       </div>
    </div>

  </div>
  </div>
</section>

<section class="second-d-section py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/3.jpg" alt="3" width="100%">
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="d-content">
               <h2>90B Approved Project</h2>
               <div class="highlight-line"></div>
               <p>Welcome to <strong>Green Hills</strong>, a thoughtfully planned, government-approved residential plotted township located in the serene surroundings of <strong>Triveni Dham, Shahpura, Rajasthan</strong>. This expansive community is designed for homebuyers and investors seeking the perfect blend of natural tranquility, modern infrastructure, and long-term value. With ample space, strategic connectivity, and essential amenities, Green Hills offers you the ideal platform to build your dream home or make a smart land investment.</p>
               <a href="#home" class="btn-web-button">Register Now</a>
               </div>
            </div>
        </div>
    </div>
</section>

<section class="second-section py-5" id="highlights">
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="content">
          <h2 class="mt-4">Project Highlights</h2>
          <div class="highlight-line"></div>
          <div class="row text-second">
            <div class="col-12">
            <ul>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
              Government-approved 90B project
            </li>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
              Spread over approximately 100 acres
            </li>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
               200+ residential plots 
            </li>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
            Plot sizes ranging from 100 sq. yds.
            </li>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
            Immediate registry and possession available
            </li>
            <li><svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
            Up to 70% bank loan facility available
            </li>
          </ul>
            <div class="box-btn mt-3">
              <a href="#home" class="btn-web-button">Register Now</a>
            </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
         <img src="/assets/imgs/3.jpg" alt="3" width="100%">
      </div>
    </div>
  </div>
</section>

<section class="amenities-section third-section" id="amenities">
  <div class="container my-5">
 
  <div class="row align-items-center g-4">

    <!-- Image First on Mobile -->
    <div class="col-lg-6 order-1 order-lg-2">
        <img src="/assets/imgs/1.jpg"
             class="highlight-img"
             alt="Location Image">
    </div>

    <!-- Content -->
    <div class="col-lg-6 order-2 order-lg-1">
        <div class="highlight-box">

            <h2 class="highlight-title">Amenities</h2>
            <div class="highlight-line"></div>
            
            <p class="text-muted mb-4">
               Green Hills is crafted to elevate your quality of life with thoughtfully designed features and community comforts:
            </p>
            <div class="highlight-height">
            <div class="highlight-card">
                <strong>1.</strong>
                Gated community 
            </div>

            <div class="highlight-card">
                <strong>2.</strong>
                24x7 CCTV surveillance 
            </div>

            <div class="highlight-card">
                <strong>3.</strong>
                Solar street lights 
            </div>
            <div class="highlight-card">
                <strong>4.</strong>
                Wide internal roads (30 ft., 40 ft., 50 ft.)
            </div>
            <div class="highlight-card">
                <strong>5.</strong>
                Multiple parks and landscaped green pockets
            </div>
            <div class="highlight-card">
                <strong>6.</strong>
                Dedicated commercial zone
            </div>
            <div class="highlight-card">
                <strong>7.</strong>
                Rain water recharge pits
            </div>
          </div>
        </div>
    </div>

  </div>
  </div>

</section>

<section class="third-section py-5">
  <div class="container my-5">
 
  <div class="row align-items-center g-4">

    <!-- Image First on Mobile -->
    <div class="col-lg-6 order-1 order-lg-1 map-column">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d453404.9564997086!2d75.889949!3d27.399871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396d1b006e2e8b3b%3A0xb89794d907066016!2sGreen%20Hills!5e0!3m2!1sen!2sus!4v1771214357364!5m2!1sen!2sus" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Content -->
    <div class="col-lg-6 order-2 order-lg-2">
        <div class="highlight-box">

            <h2 class="highlight-title">Connectivity</h2>
            <div class="highlight-line"></div>
            
            <p class="text-muted mb-4">
                Green Hills enjoys excellent connectivity to major cities and key landmarks:
            </p>
            <div class="highlight-height">
            <div class="highlight-card">
                <strong>1.</strong>
                8 km from <strong> NH-8</strong>
            </div>

            <div class="highlight-card">
                <strong>2.</strong>
                45 km from <strong>Khatu Shyam Ji Temple</strong>
            </div>

            <div class="highlight-card">
                <strong>3.</strong>
                70 km from <strong>Jaipur</strong>
            </div>
            <div class="highlight-card">
                <strong>4.</strong>
                160 km from <strong>Gurugram</strong>
            </div>
            <div class="highlight-card">
                <strong>5.</strong>
                195 km from <strong>Delhi</strong>
            </div>
            <div class="highlight-card">
                <strong>6.</strong>
                30 km from <strong>Delhi-Mumbai Expressway</strong>
            </div>
          </div>
        </div>
    </div>

  </div>
  </div>

</section>

<section class="py-5 table-section mb-3" id="pricing">
  <div class="container my-5">

  <div class="mb-5">
    <h2 class="section-title mb-3">Pricing</h2>

    <div class="custom-card bg-white">
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>TYPE</th>
                        <th>BASIC SELLING PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>30 Ft. Road</td>
                        <td>7000 per Sq. Yds.</td>
                    </tr>
                    <tr>
                        <td>42 Ft. Road</td>
                        <td>7500 per Sq. Yds.</td>
                    </tr>
                    <tr>
                        <td>50 Ft. Road</td>
                        <td>8000 per Sq. Yds.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>


  <div>
    <h2 class="section-title mb-3">Development Linked Payment Plan</h2>

    <div class="custom-card bg-white">
        <div class="table-responsive">
            <table class="table table-bordered plan-table mb-0">
                <tbody>
                    <tr>
                        <td>Registration Amount:</td>
                        <td>Rs. 11,000/-</td>
                    </tr>
                    <tr>
                        <td>Within 15 Days of Booking:</td>
                        <td>20% of BSP</td>
                    </tr>
                    <tr>
                        <td>At the time of completion of Divider + Footpath + Demarcation of Plots:</td>
                        <td> 20% of BSP</td>
                    </tr>
                    <tr>
                        <td>At the time of completion of Water Tank + Water Line:</td>
                        <td> 20% of BSP</td>
                    </tr>
                    <tr>
                        <td>At the time of completion of Road with black top:</td>
                        <td> 20% of BSP</td>
                    </tr>
                    <tr>
                        <td>At the time of completion of Project Boundary:</td>
                        <td> 10% of BSP</td>
                    </tr>
                    <tr>
                        <td>At the time of Registry & Possession:</td>
                        <td> 10% of BSP</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>

  </div>
</section>

<section class="highlight-section">
  <div class="container">
     <p class="m-0">Bank loans up to 70% available* to make your investment easier and more accessible.</p>
     <a href="#home" class="btn-web-button">Register Now</a>
  </div>
</section>

<section class="why-choose-us py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-6 left-clm">
        <img src="/assets/imgs/1.jpg" alt="web image" width="100%" />
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center highlight-box-main">
         <div class="content highlight-box">
           <h2>Why Invest in Green Hills?</h2>
           <div class="highlight-line"></div>
           <p>Green Hills is more than just land,  it’s a lifestyle destination blending peaceful living, community comfort, and robust future appreciation potential. Whether you’re buying for self-use or as a long-term investment, this project ticks all the boxes of security, connectivity, infrastructure, and growth.</p>
           <a href="#home" class="btn-web-button">Register Now</a>
         </div>
      </div>
    </div>
  </div>
</section>

<section class="siteplan" id="floorplans">
  <div class="container">
  <div class="container my-5">

  <div class="row align-items-center g-4">
    <div class="col-lg-12 order-1 order-lg-2">
        <div class="siteplan-preview">
            <iframe src="/assets/pdfs/FINAL GREEN HILL'S LAYOUT PLAN 24-09-2025.pdf" width="100%" height="700"></iframe>
        </div>
    </div>

    <div class="col-lg-12 order-2 order-lg-1">
        <div class="siteplan-box">
            <h2 class="section-title">Site Plan</h2>
            <div class="section-line"></div>
        </div>
    </div>

   </div>
  </div>
  </div>
</section>

<section class="contactus-section py-5" id="location">
  <div class="contact-section py-5">
    <div class="container">
        <div class="row g-4 align-items-stretch">

        <!-- Map -->
            <div class="col-lg-7 order-2">
                <div class="map-box">
                    <!-- Replace src with your real map embed -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d453404.9564997086!2d75.889949!3d27.399871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396d1b006e2e8b3b%3A0xb89794d907066016!2sGreen%20Hills!5e0!3m2!1sen!2sus!4v1771214357364!5m2!1sen!2sus"
                        width="100%" height="100%" style="min-height:350px;border:0;"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 order-1">
                <div class="contact-card">

                    <h2 class="contact-title">Contact Us</h2>
                    <div class="contact-line"></div>

                    <div class="contact-item">
                        <div class="contact-icon contact-icon-2">
                            <img src="/assets/imgs/telephone.png" alt="telephone" width="100%">
                        </div>
                        <div class="social-content">
                            <strong>Phone:</strong>
                            <p>87500 40098</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                             <img src="/assets/imgs/circle.png" alt="circle" width="100%">
                        </div>
                        <div class="social-content">
                            <strong>Address:</strong>
                            <p>Green Hills, Triveni Dham, Shahpura, Rajasthan</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
  </div>
</section>

<x-footer />


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach(link => {
    link.addEventListener("click", function () {
      navLinks.forEach(l => l.classList.remove("active"));
      this.classList.add("active");
    });
  });

  navLinks.forEach(link => {
    link.addEventListener("mouseover", function () {
      navLinks.forEach(l => l.classList.remove("active"));
      this.classList.add("active");
    });
  });
</script>

</body>
</html>