<section class="d-flex flex-column justify-content-center align-items-center">
  <h1>Home Page</h1>
  <?php
  function console_log($output, $with_script_tags = true)
  {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
      ');';
    if ($with_script_tags) {
      $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
  }
  ?>

  <?php
  console_log($users);
  ?>
  <ul>
    <?php
    foreach ($users as $user) {
      ?>

      <li>
        <p> <?php echo $user->name; ?> </p>
        <p> <?php echo $user->age; ?> </p>
      </li>


    <?php
    }
    ?>

  </ul>
</section>