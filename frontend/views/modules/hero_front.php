<?php
$data = $args['data'];
js_log($data);
?>

<section data-module="hero_front">
    <img class="image" src="<?= $data['image']['src'] ?>" alt="<?= $data['image']['alt'] ?>">

    <div class="content">
        <?php if (!empty($data['eyebrow'])) : ?>
            <p class="eyebrow"><?= $data['eyebrow'] ?></p>
        <?php endif; ?>
        <h1 class="title"><?= $data['title'] ?></h1>
    </div>

    <?php if ($data['subline']) : ?>
        <p class="subline"><?= $data['subline'] ?></p>
    <?php endif; ?>

    <a class="scroll" href="#content" aria-label="Nach unten scrollen">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 4v16M5 13l7 7 7-7"/>
        </svg>
    </a>
</section>