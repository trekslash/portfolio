<?php
$id = $args['id'];
$project = get_project_by_id($id);
?>
<a href="<?= $project['link'] ?>" target="_self">
    <h3><?= $project['title'] ?></h3>
    <img src="<?= $project['image-main']['src'] ?>" alt="<?= $project['image-main']['alt'] ?>">
    <p><?= esc_html(implode(', ', $project['project_categories'])) ?></p>
</a>