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

  <title>Payment Failed | Green Hills</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/dstyle.css">
</head>
<body>

<x-header />
<div class="main">


<section class="our-policy py-3 py-md-5">
  <div class="container py-5">
    <h2 class="text-danger">Payment Failed</h2>
    <p>Order ID: {{ $orderId }}</p>
    <p>Status: {{ $status }}</p>
    <p>Sorry! Your transaction was not successful.</p>
    <a href="/">Go Back to Home</a>
  </div>
  <br><br> <br>
</section>

<x-footer />

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>