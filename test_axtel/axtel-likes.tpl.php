
<style>
/* las fuentes no se agregarian desde aqui sino desde el style.css del template original para que no afecte la variable $base_url*/
@font-face {
    font-family: 'bebas_neueregular';
    src: url('<?php echo $base_url; ?>/sites/all/modules/axtel_likes/fonts/bebasneue.eot');
    src: url('<?php echo $base_url; ?>/sites/all/modules/axtel_likes/fonts/bebasneue.eot?#iefix') format('embedded-opentype'),
         url('<?php echo $base_url; ?>/sites/all/modules/axtel_likes/fonts/bebasneue.woff') format('woff'),
         url('<?php echo $base_url; ?>/sites/all/modules/axtel_likes/fonts/bebasneue.ttf') format('truetype'),
         url('<?php echo $base_url; ?>/sites/all/modules/axtel_likes/fonts/bebasneue.svg#bebas_neueregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
.fblanco{
background:#fff;
}
.pad15{
padding:15px;
}
.fonts{
font-family: 'bebas_neueregular', Arial,Helvetica,sans-serif;
font-weight:bold;
color: #D1D2D3;
text-transform:uppercase;
line-height:100%;
}

.chica{
font-size:15px;
}

.grande{
font-size:65px;
}

.face{
width:300px;
height:70px;
}

.likes{

width:160px;
height:70px;
}
.container{
width:100%;
height:auto;
}

.fondo{
background:#ccc;
}
.left{
float:left;
}
span{
width:100%;
}
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
	<div class="face pad15 left">
		<div class="fb-like" data-href="https://www.facebook.com/axtel" data-send="false" data-width="298" data-show-faces="true"></div>
	</div>
	<div class="likes  left">
		<span class="fonts grande">
    <?php
      if(isset($likes))
      {
        echo $likes;
      }else{
        echo "Dato no disponible";
      }
    ?>
    </span>
		<span class="fonts chica">Personas les gusta Axtel</span>
	</div>
</div>
