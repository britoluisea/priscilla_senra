<?php include"footer.php"; ?>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?=JS?>jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=JS?>bootstrap.min.js"></script>
    <!-- Script   -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
            $(document).ready(function(){
                $('.ir-arriba').click(function(){$('body, html').animate({scrollTop: '0px'}, 300);});
                $(window).scroll(function(){if( $(this).scrollTop() > 0 ){$('.ir-arriba').slideDown(300);} else {$('.ir-arriba').slideUp(300);}});
                $(".spec").click(function(event) {
                  if($(this).hasClass('collapsed')){
                    console.log('no ');
                    $(this).find('.icon-spec').html("-");
                  }
                  else{
                   console.log('si');
                    $(this).find('.icon-spec').html("+");
                 }
                });
            });
    </script>
</body>
</html>