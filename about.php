<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/FB_IMG_1739398755734.jpg" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm HALEEM AKMAL . A Student of HND in Computing Department from BCAS Campus [Batch : 2023] . Learning new things is my hobby.</p>

         <p>I would like to thank <a href="https://www.facebook.com/nismyi" target="_blank">Lecturer Mr. Nismy</a> Sir for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/lifestyle-people-emotions-casual-concept-confident-nice-smiling-asian-woman-cross-arms-chest-confident-ready-help-listening-coworkers-taking-part-conversation_1258-59335.jpg" alt="">
         <p>Been using their services for quite a bit and have never had an issue with the quality of their products. Online e-products working great as well. Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time. Everything else has been good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/marta" target="_blank">MARTA</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/man-indoors-DA1FH8.jpg" alt="">
         <p>It is the first online services in Centralcamp which we can trust completely.I always unbox making a video and instantly complain if there's anything wrong. Sometimes even don't need to return the item and they process the refund. KinBech do heavy fine to sellers who send wrong products thats why its platform getting better day by day.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/share/14zEgcDJyD/l" target="_blank">RISAF</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/premium_photo-1690579805307-7ec030c75543.jpeg" alt="">
         <p>KinBech is great if you choose good sellers . A variety of required item available . Customers can return and refund full amount within 7 days easily . KinBech is boosting eCommerce business in Kathmandu.It provides great opportunity to sale items online with ease.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/share/1EZZzgZeCG/" target="_blank">RASIT</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/IMG-20230128-WA0000.jpg" alt="">
         <p>Using Fix It Hardware for online percheases. I have been using from almost 3 years. Outstanding experience with them. Game vouchers and pick up point as delivery with 0 shipping charges are super saving services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/share/15yfW3Sh8k/" target="_blank">ulfa</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/.jpg" alt="">
         <p>I have been using their services for the last 2 years and I have found them extremely reliable.Their return policy is what gives you an extra layer of reliance and peace of mind. In case the product doesn't meet your expectations or if there is any fault in it. then you can return the product within seven days from the date of delivery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/share/184du8yjAV/" target="_blank">willam</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/IMG-20230215-WA0016.jpg" alt="">
         <p>Fix It Hardware is cool! I have ordered hundreds of products from it and never got any scam. It delivers products in time with out delay. Packaging of products are strong and delivery rates are too low. Just amazing Website will keep shopping from KinBech.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/share/15ns4A9Bu3/"  target="_blank">kirty</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>