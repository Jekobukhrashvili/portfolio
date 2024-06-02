<?php
  $first_section = get_field('first_section');
  $title = $first_section['title'];
  $name = $first_section['name'];
  $proffesion = $first_section['proffesion'];
  $social = $first_section['social'];

  $second_section = get_field('second_section');
  $second_title = $second_section['second_title'];
  $text1 = $second_section['text1'];
  $text2 = $second_section['text2'];
  $text3 = $second_section['text3'];
  $text4 = $second_section['text4'];
  $text5 = $second_section['text5'];
  $my_image = $second_section['my_image'];
  $my_image2 = $second_section['my_image2'];
  $my_image3 = $second_section['my_image3'];
  $my_image4 = $second_section['my_image4'];
  $my_image5 = $second_section['my_image5'];
  
  // echo '<pre>';
  // print_r($projects_id);
  // echo '</pre>';


  get_header()
?>

<main class="home-page">
  <!-- First-Section-Start -->
  <section class="home-section-1">
    <div class="home-section-container">
      <div class="text-content">
        <p><?php echo $title ?></p>
        <h1 class="title"><?php echo $name ?></h1>
        <p><?php echo $proffesion ?></p>
      </div>
      <div class="social-icons">
        <?php if($social['twitter']): ?>
          <a href="<?php echo $social['twitter'] ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'?>" alt="Twitter">
          </a>
        <?php endif; ?>
        <?php if($social['linkedin']): ?>
          <a href="<?php echo $social['linkedin'] ?>">
            <img src="<?php echo get_template_directory_uri() . './assets/images/linkedin.png'?>" alt="Linkedin">
          </a>
        <?php endif; ?>
        <?php if($social['instagram']): ?>
          <a href="<?php echo $social['instagram'] ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png'?>" alt="Instagram">
          </a>
        <?php endif; ?>
        <?php if($social['behance']): ?>
          <a href="<?php echo $social['behance'] ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/behance.png'?>" alt="Behance">
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- First-Section-End -->

  <!-- Second-Section-Start -->
  <section class="home-section-2">
    <div class="second-container">
      <h2><?php echo $second_title ?></h2>
      <div class="container-flex card1">
        <div class="content">
          <h3><?php echo $text1 ?></h3>
          <p><?php echo $text2 ?></p>
          <div class="paragraph">
            <p><?php echo $text3 ?></p>
            <p><?php echo $text4 ?></p>
            <p><?php echo $text5 ?></p>
          </div>
          <a href="#">
            <button class="content-button">Read More</button>
          </a>
        </div>
        <div class="image"> <img src="<?php echo $my_image['url']; ?>" alt="">
        </div>
      </div>

      <div class="container-flex card2">
        <div class="content">
          <h3><?php echo $text1 ?></h3>
          <p><?php echo $text2 ?></p>
          <div class="paragraph">
            <p><?php echo $text3 ?></p>
            <p><?php echo $text4 ?></p>
            <p><?php echo $text5 ?></p>
          </div>
          <a href="#">
            <button class="content-button">Download</button>
          </a>
        </div>
        <div class="image"> <img src="<?php echo $my_image2['url']; ?>" alt="">
        </div>
      </div>

      <div class="container-flex card3">
        <div class="content">
          <h3><?php echo $text1 ?></h3>
          <p><?php echo $text2 ?></p>
          <div class="paragraph">
            <p><?php echo $text3 ?></p>
            <p><?php echo $text4 ?></p>
            <p><?php echo $text5 ?></p>
          </div>
          <a href="#">
            <button class="content-button">Live Demo</button>
          </a>
        </div>
        <div class="image"> <img src="<?php echo $my_image3['url']; ?>" alt="">
        </div>
      </div>

      <div class="container-flex card4">
        <div class="content">
          <h3><?php echo $text1 ?></h3>
          <p><?php echo $text2 ?></p>
          <div class="paragraph">
            <p><?php echo $text3 ?></p>
            <p><?php echo $text4 ?></p>
            <p><?php echo $text5 ?></p>
          </div>
          <a href="#">
            <button class="content-button">Download</button>
          </a>
        </div>
        <div class="image"> <img src="<?php echo $my_image4['url']; ?>" alt="">
        </div>
      </div>

      <div class="container-flex card5">
        <div class="content">
          <h3><?php echo $text1 ?></h3>
          <p><?php echo $text2 ?></p>
          <div class="paragraph">
            <p><?php echo $text3 ?></p>
            <p><?php echo $text4 ?></p>
            <p><?php echo $text5 ?></p>
          </div>
          <a href="#">
            <button class="content-button">Live Demo</button>
          </a>
        </div>
        <div class="image"> <img src="<?php echo $my_image5['url']; ?>" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Second-Section-End -->

  <!-- Third-Section-Start -->
  <section class="home-section-3">
    <div class="third-container">
      <h2>#Playground</h2>
      <div class="image-container">
        <img src="<?php echo $my_image['url']; ?>" alt="image1">
        <img src="<?php echo $my_image2['url']; ?>" alt="image2">
        <img src="<?php echo $my_image3['url']; ?>" alt="image3">
        <img src="<?php echo $my_image4['url']; ?>" alt="image4">
        <img src="<?php echo $my_image5['url']; ?>" alt="image5">
        <img src="<?php echo $my_image['url']; ?>" alt="image1">
        <img src="<?php echo $my_image2['url']; ?>" alt="image2">
        <img src="<?php echo $my_image3['url']; ?>" alt="image3">
        <img src="<?php echo $my_image4['url']; ?>" alt="image4">
        <img src="<?php echo $my_image5['url']; ?>" alt="image5">
      </div>
    </div>
  </section>
  <!-- Third-Section-End -->
</main>

<?php
  get_footer()
?>