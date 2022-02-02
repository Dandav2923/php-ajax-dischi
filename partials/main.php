<?php
// var_dump($_SERVER['HTTP_HOST']);
include __DIR__ . '/../server/db.php';
?>

<section>
    <div class="container bg-dark">
        <div class=" row row-cols-6 justify-content-around">
            <?php foreach ($cards as $element) { ?>
                <div class="col card p-3 m-3 text-center">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/img/<?php echo $element['img'] ?>">
                        
                    <h2 class="fs-4 text-uppercase text-center mt-2">
                        <?php echo $element['title'] ?>
                    </h2>
                    <h3 class="fs-6">
                        <?php echo $element['artist'] ?>
                    </h3>
                    <span class="fs-6">
                        <?php echo $element['data'] ?>
                    </span>
                </div>
            <?php } ?>
        </div>
    </div>
</section>