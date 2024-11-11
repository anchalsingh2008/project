<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>Wave - Bootstrap 5 One Page Template</title>
  <meta name="description" content="Wave is a Bootstrap 5 One Page Template.">
  <meta name="author" content="BootstrapBrain">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/favicon-512x512.png">

  <!-- Google Fonts Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="./assets/css/wave-bsb.css">

  <!-- BSB Head -->
</head>

<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
    <?=view('header/header'); ?> <!-- Common navigation -->
    <section>
        <h1>Our Services</h1>
        <p>We provide top-notch services in web development, design, and market research.</p>
        <ul>
            <li>Market Research</li>
            <li>Web Design</li>
            <li>SEO Services</li>
        </ul>
    </section>
    <?=view('header/footer'); ?>
</body>
</html>
