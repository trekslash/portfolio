<?php
$data = $args['data'];
?>

<section data-module="approach">
    <?php if (!empty($data['eyebrow'])) : ?>
        <p class="eyebrow"><?= esc_html($data['eyebrow']) ?></p>
    <?php endif; ?>

    <h2 class="title"><?= nl2br(esc_html($data['title'])) ?></h2>

    <?php if (!empty($data['items'])) : ?>
        <ol class="items">
            <?php foreach ($data['items'] as $item) : ?>
                <li class="item">
                    <h3 class="item-title"><?= esc_html($item['title']) ?></h3>
                    <p class="item-description"><?= esc_html($item['description']) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?>

    <?php if (!empty($data['text'])) : ?>
        <p class="text"><?= nl2br(esc_html($data['text'])) ?></p>
    <?php endif; ?>
</section>