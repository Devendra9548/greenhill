<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Form | Green Hills</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Maxvel Group premium residential projects - pricing, highlights, floor plans, and location details." />
  <meta name="keywords" content="Maxvel Group, apartments, floor plans, real estate, pricing, location" />
  <meta name="author" content="Maxvel Group" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/registration.css">
</head>
<body>

<x-header />
<div class="main">

<section class="registration-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
            <h2 class="mb-3">Register Now</h2>
             <form id="registerForm" method="post" enctype="multipart/form-data" autocomplete="off">
               @csrf
               <div class="row g-3">
                 <div class="col-12 col-md-6">
                     <label class="form-label">Full Name *</label>
                     <input type="text" class="form-control" name="full_name" id="fullName" onchange="getpersonalInfo()" autocomplete="off" required>
                     @error('full_name')
                     <span class="fw-bold text-danger" style="font-size:13px">{{ $message }}</span>
                     @enderror
                 </div>
                 <div class="col-12 col-md-6">
                     <label class="form-label">Father's/Husband's Name *</label>
                     <input type="text" class="form-control" autocomplete="off" name="father_husband_name" required>
                 </div>
                 <div class="col-12 col-md-6">
                     <label class="form-label">Mobile Number *</label>
                     <input type="tel" class="form-control" name="mobile_number" id="email" autocomplete="off" onchange="getpersonalInfo()" required>
                 </div>
                 <div class="col-12 col-md-6">
                     <label class="form-label">E-mail ID *</label>
                     <input type="email" class="form-control" name="email_id" id="phone" autocomplete="off" onchange="getpersonalInfo()" required>
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">Full Address *</label>
                     <input type="text" class="form-control" name="address" required>
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">Aadhaar Card Number *</label>
                     <input type="text" class="form-control" name="aadhaar_number" required>
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">PAN Card Number *</label>
                     <input type="text" class="form-control" name="pan_number" required>
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">Aadhaar Card Number (PDF/JPG)</label>
                     <input type="file" class="form-control" name="aadhaar_file" accept=".jpg,.jpeg,.png,.JPG,.JPEG,.PNG,.webp,image/*" onchange="previewImage(event)">
                     <img id="preview" src="" alt="Image Preview" style="max-width:200px; display:none;">
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">PAN Card Number (PDF/JPG)</label>
                     <input type="file" class="form-control" name="pan_file" accept=".jpg,.jpeg,.png,.JPG,.JPEG,.PNG,.webp,image/*" onchange="previewImage1(event)">
                     <img id="preview1" src="" alt="Image Preview" style="max-width:200px; display:none;">
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">DOB *</label>
                     <input type="text" class="form-control" id="dob" name="dob" placeholder="Select your date of birth" required>
                 </div>
                 
                 <div class="col-12 col-md-12">
                     <label class="form-label">Nationality *</label>
                     <input type="text" class="form-control" name="nationality" value="INDIAN" required>
                 </div>
                 <div class="col-12 col-md-12">
                     <label class="form-label">Quota *</label>
                     <select class="form-select" name="quota" aria-label="Default select example">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Government/Ex-Government Employee">Government/Ex-Government Employee</option>
                        <option value="Management">Management</option>
                     </select>
                 </div>
               </div>

               <div class="mt-4 d-block d-md-flex justify-content-end">
                  <img src="/assets/imgs/spinner.gif" alt="" width="26px" id="CtSpinner">
                  <span class="fw-bold text-black text-success success-mm mb-2 mb-md-0" id="success-mm" style="font-size:16px;margin-top: 13px; margin-right: 20px;">Thank you for Submission.</span>
                  <span class="fw-bold text-danger fail-mm mb-2 mb-md-0" id="fail-mm" style="font-size:16px;margin-top: 13px; margin-right: 20px;">Fail</span>
                 <button type="submit" class="btn-web-button">Register Now</button>
               </div>

               </form>
            </div>
        </div>
    </div>
</section>

<x-footer />


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.getElementById("preview");
            img.src = e.target.result;
            img.style.display = "block";
        }

        reader.readAsDataURL(file);
    }
  }
</script>

<script>
  function previewImage1(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.getElementById("preview1");
            img.src = e.target.result;
            img.style.display = "block";
        }

        reader.readAsDataURL(file);
    }
  }
</script>

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

<script>
 var uphone = '';
 var ufirstName = '';
 var uemail = '';
 
  function getpersonalInfo() {
    ufirstName = document.querySelector("#fullName").value;
    uemail = document.querySelector("#email").value;
    uphone = document.querySelector("#phone").value;
  }
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$(document).ready(function() {
    $("#registerForm").submit(function(event) {
        event.preventDefault();
        document.querySelector("#CtSpinner").style.display = "block";
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url:"/registernow",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res.success == true) {
                 $("#registerForm")[0].reset();
                 document.querySelector("#CtSpinner").style.display = "none";
                 document.querySelector("#success-mm").style.display = "none";
                 RazorPayNow(res.amount, res.rzp_order_id);
                } 
                else {
                 document.querySelector("#fail-mm").style.display = "block";
                }
            }
        });
    });
});
</script>

<script>
    function RazorPayNow(amount, rzp_order) {
        var options = {
            "key": "{{env('RAZORPAY_KEY')}}",
            "amount": amount,
            "currency": "INR",
            "name": "Green Hills",
            "description": 'for Registration Fees',
            "image": "",
            "order_id": rzp_order,
            "callback_url": "{{route('successpay')}}",
            "prefill": {
                "name": ufirstName,
                "email": uemail,
                "contact": uphone
            },
            "theme": {
                "color": "#3399cc"
            }, 
            "modal": {
                "ondismiss": function(){
                    window.location.href = "{{ url('/cancel') }}?order_id=" + rzp_order + "&status=cancelled";
                }
            }
        };
        var rzp1 = new Razorpay(options);
        
        rzp1.on('payment.failed', function (response){
        alert(response.error.description);
        window.location.href = "{{ url('/cancel') }}?order_id=" + rzp_order + "&payment_id=" + response.error.metadata.payment_id + "&status=failed";
        });

        
        rzp1.open();
    }
</script>

<script>
   flatpickr("#dob", {
    dateFormat: "d-m-Y",
    maxDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    theme: "material_blue"
   });
</script>
</body>
</html>