<?php
if( FILE_PATH ==   URL_INDEX  )
{ ?>
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?=IMG?>s1.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Deregulated Energy Markets</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a explicabo odit. Nam tempora atque sed sequi obcaecati laboriosam dolorem alias, illo perferendis, rem asperiores distinctio eos accusantium facere at!</p>
                    <a href="#" class="btn btn-success hvr-grow-shadow">READ MORE</a>
                </div>
            </div>
        </div>
    </header> <?php
}
else //header de pages internas
{  ?>
  <!-- banner -->
  <header  id="page-interna" style="
  background-image:url('<?=IMG?>s1.jpg'); 
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding:150px;
  ">
  </header>
  <?php if(isset($share_fb))
  { ?>
    <div class="container">
      <div class="col-md-12" style="margin:20px 0px;">
         <?=$share_fb; ?>
      </div>
    </div>
    <?php
  }
}
//echo FILE_PATH ." ==  ". URL_INDEX;
?>