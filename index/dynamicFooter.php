<?php ob_start(); ?>
<script defer src="assets/js/cvjs/aos.js?ver=1.2.0"></script>
<script defer src="assets/js/cvjs/main.js?ver=1.2.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<?php $CV = ob_get_clean(); ?>
<?php
if ($footer == "CV") {
    echo $CV;
}else{  
}