<?php get_template_part( 'tf-hotel/page-search' ); ?>
</div>
</div>
<?php if(is_singular('post')) { ?>
<?php get_template_part( 'templates-parts/parts/articles' ); ?>
<?php } ?>
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
            <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
            <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
        </div>
    </div>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>
  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <h2>Zapytaj o ofertę <span></span></h2>
      <!-- <p>To jest modal, który wyskoczył po 5 sekundach od załadowania strony.</p> -->
      <div class="form-wrap">
        <?php echo do_shortcode('[contact-form-7 id="412" title="Formularz kontaktowy"]'); ?>
      </div>
      <span class="close-button" onclick="closeModal()">&#x2716;</span>
    </div>
  </div>
   <!-- Modal FAQ -->
  <div id="myModalFAQ" class="modal">
    <div class="modal-content">
      <div class="form-wrap">
        <?php echo do_shortcode('[contact-form-7 id="416" title="Formularz FAQ"]'); ?>
      </div>
      <span class="close-button" onclick="closeModal()">&#x2716;</span>
    </div>
  </div>
<?php wp_footer(); ?>

</body>

</html>
