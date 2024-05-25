<?php
  get_header()
?>
<main class="home-page">
  <section class="home-section-1">
    <div class="home-section-container">
      <div class="text-content">
        <p>Hello,</p>
        <h1 class="title">I'm Akhil TJ</h1>
        <p>Freelance Designer, specialized in UI/UX.</p>
      </div>
      <div class="social-icons">
        <a href="#">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'?>" alt="Twitter">
        </a>
        <a href="#">
            <img src="<?php echo get_template_directory_uri() . './assets/images/linkedin.png'?>" alt="Linkedin">
        </a>
        <a href="#">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.png'?>" alt="Instagram">
        </a>
        <a href="#">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/behance.png'?>" alt="Behance">
        </a>
      </div>
    </div>
  </section>
</main>
<?php
  get_footer()
?>