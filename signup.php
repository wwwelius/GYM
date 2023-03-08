<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>signup</title>

   <!-- swiper css link  -->
   <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="color.css">

</head>
<body>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Create Account</h1>

   <form action="signup_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your Name" name="name">
         </div>
         <div class="inputBox">
            <span>Phone Number :</span>
            <input type="number" placeholder="enter your number" name="number">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Age :</span>
            <input type="number" placeholder="enter your Age" name="age">
         </div>
         <div class="inputBox">
            <span>Gender :</span>
            <input type="text" placeholder="enter your Age" name="gender">
         </div>
         <div class="inputBox">
            <span>NID :</span>
            <input type="number" placeholder="enter your NID" name="nid">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="enter your Address" name="address">
         </div>
         <div class="inputBox">
            <span>Bill :</span>
            <input type="number" placeholder="enter your Bill" name="bill">
         </div> 
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->



</body>
</html>