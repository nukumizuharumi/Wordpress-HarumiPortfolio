<footer id="contact">
  <div class="footer-inner">
    <div class="h2"><span class="title-big-b">contact</span><br><span class="jp-sm-b">-お声かけ-</span></div>
    <form action="program.php" method="post" novalidate>
      <dl>
        <div class="form-item">
          <dt class="sun-sm">name -お名前-</dt>
          <dd><input type="text" name="userName" required></i></dd>
        </div>
        <div class="form-item">
          <dt class="sun-sm">mail address -メールアドレス-</dt>
          <dd><input type="email" name="userEmail"></dd>
        </div>
        <div class="form-item">
          <dt class="sun-sm">message -メッセージ-</dt>
          <dd><textarea name="message" rows="10"></textarea>
          </dd>
        </div>
      </dl>
      <div class="form-submit button-cover">
        <button type="submit" value="送信する"><a href="#"><span class="title-big-b">send</span><br><span class="jp-sm-b"> -送信する-</span></a></button>
      </div>


    </form>
  </div>

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
  // wp_enqueue_script('jquery');
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/script.js',
  );
?>

<?php wp_footer(); ?>
</body>

</html>