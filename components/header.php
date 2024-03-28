 <?php
include $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';
?>

 <!DOCTYPE html>
 <html lang="ru">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="/assets/img/favicon/apple-touch-icon.png">
   <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-touch-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-touch-icon-114x114.png">

   <link rel="stylesheet" href="/assets/css/swiper.min.css">
   <link rel="stylesheet" href="/assets/css/normalize.css">
   <link rel="stylesheet" href="/assets/css/style.css">
   <title>
     <? !isset($title) ? $title='' :  $title;
      echo $title ?>
     &mdash;
     <? echo 'Кивач Эстетик Плюс' ?>
   </title>
 </head>

 <body>
   <header class="header">
     <div class="container header-container">
       <a href="/"> <img src="<?get_img_path()?>logo.png" alt="лого Кивач Эстетик Плюс" class="logo header-logo"></a>
       <nav class="button menu header-menu">
         <div class="menu-burger">
           <span class="menu-burger__line"></span>
         </div>
         <span class="header-menu__text">меню</span>
         <!-- menu.js -->
         <ul class="menu-list ">

         </ul>
         <!-- /.menu-list -->

       </nav>
       <div class="social header-social">
         <img src="<?get_img_path()?>Phone.svg" alt="phone icon" class="header-social__icon">
         <a href="tel:+7(8142)599-880" class="header-social__link">+7 (8142) 599-880</a>
       </div>

     </div>
     <!-- /.container -->


   </header>
   <!-- /.header -->
   <main>