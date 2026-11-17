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

    <?php get_template_part('frontend/views/modules/media', null, ['media' => $project['image-main']]); ?>

    <section class="project-intro">
        <div class="project-intro__left">
            <p class="eyebrow">Das Resultat</p>
            <h2><?= $project['subtitel'] ?></h2>

            <?php if (!empty($project['link-extern'])) : ?>
                <a class="button" href="<?= esc_url($project['link-extern']) ?>" target="_blank" rel="noopener">
                    Resultat entdecken
                    <span aria-hidden="true">→</span>
                </a>
            <?php endif; ?>
        </div>

        <div class="project-intro__right">
            <div class="project-intro__item">
                <h4>Challenge</h4>
                <p><?= $project['challenge_text'] ?></p>
            </div>

            <div class="project-intro__item">
                <h4>Fokus</h4>
                <p><?= $project['focus_text'] ?></p>
            </div>
        </div>
    </section>

    <section class="project-bts">
        <figure class="project-bts__item project-bts__item--large">
            <img src="<?= esc_url($project['bts_1']['src']) ?>" alt="<?= esc_attr($project['bts_1']['alt']) ?>">
            <figcaption>01 / <?= esc_html($project['bts_1_caption']) ?></figcaption>
        </figure>

        <figure class="project-bts__item project-bts__item--small">
            <img src="<?= esc_url($project['bts_2']['src']) ?>" alt="<?= esc_attr($project['bts_2']['alt']) ?>">
            <figcaption>02 / <?= esc_html($project['bts_2_caption']) ?></figcaption>
        </figure>
    </section>

    <section class="output">
        <p class="eyebrow">Output</p>
        <h2><?= esc_html($project['output_text']) ?></h2>
    </section>





</main>