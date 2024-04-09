<footer>


  <div class="footer-bottom" id="wrapper">
    <div class="wave">
      <canvas id="waveCanvas2"></canvas>
      <div class="go-up">
        <a href="#top">
          <div class="thankyou"><img src="<?= get_template_directory_uri(); ?>/img/common/top-arrow.png" alt="見てくれてありがとう、上に戻る矢印"></div>
        </a>
      </div>
      <img class="suzuran-sm" src="<?= get_template_directory_uri(); ?>/img/common/suzurann-sm.png" alt="小さな鈴蘭の花">
      <small class="copy">&copy;2024 HARUMI All rights reserved. </small>
    </div>
  </div>

</footer>

<script type="text/JavaScript" src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<?php
wp_enqueue_script('jquery');
wp_enqueue_script(
  'main-js',
  get_template_directory_uri() . '/js/script.js',
);
?>

<?php wp_footer(); ?>
</body>

</html>