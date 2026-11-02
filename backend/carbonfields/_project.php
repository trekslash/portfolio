<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make('post_meta', 'Projekt')
    ->where('post_type', '=', 'project')
    ->add_fields([
        Field::make('textarea', 'lead', 'Lead')->set_required(),
        Field::make('text', 'client', 'Kund:in')->set_required(),
        Field::make('text', 'services', 'Services')->set_required(),
        Field::make('text', 'year', 'Jahr')->set_required(),
        Field::make('image', 'image-main', 'Hauptbild')->set_required(),
        Field::make('textarea', 'project-heading', 'Projekt – Überschrift')->set_required(),
        Field::make('text', 'project-link', 'Projekt – Link')->set_required(),
        Field::make('textarea', 'challenge-text', 'Challenge – Text')->set_required(),
        Field::make('textarea', 'focus-text', 'Fokus – Text')->set_required(),
        Field::make('image', 'bts-1', 'Behind the Scene 1')->set_required(),
        Field::make('text', 'bts-1-caption', 'Behind the Scene 1 Bildlegende')->set_required(),
        Field::make('image', 'bts-2', 'Behind the Scene 2')->set_required(),
        Field::make('text', 'bts-2-caption', 'Behind the Scene 2 Bildlegende')->set_required(),
        Field::make('textarea', 'output-text', 'Output – Text')->set_required(),

    ]);