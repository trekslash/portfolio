<?php
$project = get_project_by_id(get_the_ID());
js_log($project);
?>

<main data-layout="project">
    <section class="hero">
        <h1><?= $project['title'] ?></h1>
        <h3><?= $project['lead'] ?></h3>

        <div class="project-info">
                <div class="project-info__item">
                    <h4>Kund:in</h4>
                    <h6><?= $project['client'] ?></h6>
                </div>

                <div class="project-info__item">
                    <h4>Services</h4>
                     <h6 class="category">
                     <?php foreach ($project['project_categories'] as $category) : ?>
                     <span class="category-item"><?= $category ?></span>
                    <?php endforeach; ?>
                    </h6>
                </div>

                <div class="project-info__item">
                    <h4>Jahr</h4>
                    <h6><?= $project['year'] ?></h6>
                </div>
        </div>
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