<section class="hero page">
  <div class="container page-container">
    <h1 class="subtitle"><?php echo htmlspecialchars($data['title']); ?></h1>
    <h2 class="title"><?php echo htmlspecialchars($data['subtitle']); ?></h2>
    <?php if (!empty($data['slides'])) : ?>
    <div class="slider-wrapper">
      <div class="swiper rinoSwiper">
        <div class="swiper-wrapper">
          <?php foreach ($data['slides'] as $slide) : ?>
          <div class="swiper-slide">
            <div class="swiper-slide-wrapper">
              <?php if (!empty($slide['images'])) : ?>
              <?php foreach ($slide['images'] as $image) : ?>
              <img src="<?php echo htmlspecialchars(get_img_path() . $image); ?>" alt="фото" loading="lazy"
                class="swiper-slide__img">
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <!-- /.swiper-slide-wrapper -->
          </div>
          <!-- /.swiper-slide -->
          <?php endforeach; ?>
        </div>
        <!--/. swiper-wraper  -->
        <div class="swiper-navigation">
          <!-- If we need pagination -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-next"></div>
        </div>
        <!-- /.swiper-navigation -->
      </div>
      <!-- /.swiper  -->
    </div>
    <!-- /.swiper-wrapper -->
    <?php endif; ?>
  </div>
  <!-- /.container page-container -->
</section>
<!-- /.hero page -->