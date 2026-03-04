<footer class="main-footer py-5" style="background-color: #0b1a26; color: white;">
  <div class="container">
    <div class="row align-items-center"> 
      
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <h2 class="h3 mb-3" style="font-weight: bold;">UW CURRENT</h2>
        <p class="mx-auto mx-md-0" style="font-size: 0.9rem; line-height: 1.5; max-width: 400px; opacity: 0.9;">
          <em>UW Current</em> is the first, healthcare-focused news publication at the University of Waterloo. It is an editorially independent newspaper published by the Waterloo Undergraduate Student Association.
        </p>
        <div class="mt-3" style="font-size: 0.85rem; opacity: 0.8;">
          <p class="mb-0">Student Life Centre, 200 University Ave W.</p>
          <p>Waterloo, ON N2L 3G1</p>
        </div>
      </div>

      <div class="col-md-6 text-center text-md-end">
        <div class="social-links mb-3 d-flex justify-content-center justify-content-md-end align-items-center"> 
          <a href="https://www.instagram.com/uwaterloocurrent/" target="_blank" aria-label="Instagram" style="margin: 0 1rem;">
            <img src="<?php echo get_theme_file_uri('/assets/images/insta.png'); ?>" alt="Instagram" style="height: 1.2rem;">
          </a>
          <a href="mailto:uwaterloocurrent@gmail.com" target="_blank" aria-label="Email" style="margin: 0 1rem;">
            <img src="<?php echo get_theme_file_uri('/assets/images/email.png'); ?>" alt="Email" style="height: 1.2rem;">
          </a>
          <a href="https://www.forms.google.com" target="_blank" class="btn btn-outline-light btn-sm" style="margin-left: 0.5rem; border-radius: 20px; padding: 5px 15px;"> Subscribe </a>
        </div>
        
        <div style="font-size: 0.9rem; opacity: 0.8;">
          <a href="<?php echo site_url('/masthead'); ?>" class="text-white text-decoration-none">Contact / Masthead</a>
        </div>
      </div>

    </div>

    <div class="row mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
      <div class="col-12 text-center">
        <h6 class="text-uppercase mb-3" style="color: white; font-weight: bold; letter-spacing: 2px; font-size: 0.8rem;">Land Acknowledgement</h6>
        <p class="mx-auto" style="max-width: 800px; font-size: 0.9rem; line-height: 1.6; opacity: 0.9;">
          UW Current acknowledges that we live and work on the traditional territory of the Neutral, Anishinaabeg and Haudenosaunee peoples. Our campus is situated on the Haldimand Tract, the land promised to the Six Nations that includes six miles on each side of the Grand River.
        </p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12 text-center">
        <p class="mb-0" style="font-size: 0.8rem; opacity: 0.5;">
          &copy; <?php echo date("Y"); ?> UW Current. All rights reserved. | University of Waterloo
        </p>
      </div>
    </div>

  </div>
</footer>

<script>
  document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

<?php wp_footer(); ?>

<?php if ( is_front_page() ) : ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var modalElement = document.getElementById('welcomeModal');

    if (modalElement && !sessionStorage.getItem('shownWelcome')) {
        var myModal = new bootstrap.Modal(modalElement);
        myModal.show();
        sessionStorage.setItem('shownWelcome', 'true');
    }
});
</script>
<?php endif; ?>

</body>
</html>