<?php ob_start(); ?>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'" />
<noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
</noscript>
<link href="assets/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
<link href="assets/css/cvcss/aos.css?ver=1.2.0" rel="stylesheet">
<link href="assets/css/cvcss/main.css?ver=1.2.0" rel="stylesheet">
<noscript>
    <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
    </style>
</noscript>
<?php $CV = ob_get_clean(); ?>
<?php
if ($header == "CV") {
    echo $CV;
}else{
}
