<section class="container mx-auto">
    <h1>
        About Me
    </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum delectus aperiam harum atque, nam quia
        impedit iure officia hic totam laudantium corporis, earum enim amet facere. Eum, necessitatibus doloremque.
    </p>
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
    console_log($employee);
    ?>
    <ul>
        <?php
        foreach ($employee as $user) {
        ?>
        <li>
            <p>
                Username : <?php echo $user->username ?>
                Age : <?php echo $user->age ?>
                <img src="<?php echo $user->image ?>" alt="" width="100px" height="80px">
            </p>
        </li>

        <?php
        }
        ?>
    </ul>
</section>