

<?php
$id = $args['id'];
$project = get_project_by_id($id);
?>
<a href="<?= $project['link'] ?>" target="_self">

    <?php get_template_part('frontend/views/modules/media', null, ['media' => $project['image-main']]); ?>
    <h3><?= $project['title'] ?></h3>
    <p><?= esc_html(implode(', ', $project['project_categories'])) ?></p>
</a>