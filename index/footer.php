</div>
<footer class="container-fluid d-flex justify-content-center py-3 bg-black" >
    <div class="row">
       
       
        <div class="container d-flex justify-content-center ">
            <img class="altlogo" src="https://www.sibervatan.org/assets/img/sibervatanlogo.png" alt="">
       </div>
       <div class="container d-flex justify-content-center pt-5">
       <p id="sub_text" class="text-white"></p>
       </div>
    </div>
</footer>
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.site-header').addClass('site-headerscroll');
         
        } else {
            $('.site-header').removeClass('site-headerscroll');
        }
    });
    
</script>
<script src="./assets/js/bootstrap_js/bootstrap.bundle.min.js"></script>
<?php 
require 'dynamicFooter.php';
?>
<script src="./assets/js/ui-index-matrix-animation.js"></script>
<script>
    const MainFormData = new FormData();
    MainFormData.append('token','<?php echo $_SESSION['token']?>');
    MainFormData.append('operation','settingsGet');
    fetch('../BlogEngine/blogEngine.php',{
        method:'POST',
        body:MainFormData
    }).then(response => response.json()).then(data =>{
        
        document.querySelector('title').textContent = data.site_title;
        document.querySelector('#sub_text').textContent = data.sub_text;
        document.querySelector('#site_main_header').textContent = data.site_main_header;
        document.querySelector('.altlogo').setAttribute('src',data.sub_logo_src);
        document.querySelector('.altlogo').setAttribute('onclick','window.open(`'+data.sub_logo_href+'`)');
        links = JSON.parse(data.social_media_links);
        links.forEach(social_media => {
            document.querySelector("#social_media_links").innerHTML += `<button type="button" onClick="window.open('`+social_media.adres+`')" class="btn `+social_media.platform+` "><i class="text-white fa-brands fa-`+social_media.platform+`"></i></button>`;
        });
        if( document.querySelector('#site_main_text') != null){
            document.querySelector('#site_main_text').innerHTML = data.site_main_text;
        }
    })
</script>

</body>

</html>