<?php
$project = get_project_by_id(get_the_ID());
js_log($project);
?>

<main data-layout="project">
    <p>Project</p>
    <h1><?= $project['title'] ?></h1>
    <p><?= $project['lead'] ?></p>

    <section>
        <p><?= $project['client'] ?></p>
        <p><?= $project['services'] ?></p>
        <p><?= $project['year'] ?></p>
    </section>

    <img src="<?= $project['image-main']['src'] ?>" alt="<?= $project['image-main']['alt'] ?>">

    <section>
        <p><?= $project['project_heading'] ?></p>
        <a href="<?= $project['project_link'] ?>" target="_blank" rel="noopener noreferrer">
            <?= $project['project_link'] ?>
        </a>
        <p><?= $project['challenge_text'] ?></p>
        <p><?= $project['focus_text'] ?></p>
    </section>

    <section>
        <figure>
            <img src="<?= $project['bts_1']['src'] ?>" alt="<?= $project['bts_1']['alt'] ?>">
            <figcaption><?= $project['bts_1_caption'] ?></figcaption>
        </figure>

        <figure>
            <img src="<?= $project['bts_2']['src'] ?>" alt="<?= $project['bts_2']['alt'] ?>">
            <figcaption><?= $project['bts_2_caption'] ?></figcaption>
        </figure>

        <div>
            <?= wpautop($project['output_text']) ?>
        </div>
    </section>






</main>