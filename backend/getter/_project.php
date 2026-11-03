<?php

function get_project_by_id(int $id):array {
    $title = get_the_title($id);
    $lead = carbon_get_post_meta($id, 'lead');
    $client = carbon_get_post_meta($id, 'client');
    $services = carbon_get_post_meta($id, 'services');
    $year = carbon_get_post_meta($id, 'year');

    $image_main_id = carbon_get_post_meta($id, 'image-main');
    $image_main = get_media_by_id($image_main_id);

    $project_heading = carbon_get_post_meta($id, 'project-heading');
    $project_link = carbon_get_post_meta($id, 'project-link');
    $challenge_text = carbon_get_post_meta($id, 'challenge-text');
    $focus_text = carbon_get_post_meta($id, 'focus-text');

    $bts_1_id = carbon_get_post_meta($id, 'bts-1');
    $bts_1 = get_media_by_id($bts_1_id);
    $bts_1_caption = carbon_get_post_meta($id, 'bts-1-caption');

    $bts_2_id = carbon_get_post_meta($id, 'bts-2');
    $bts_2 = get_media_by_id($bts_2_id);
    $bts_2_caption = carbon_get_post_meta($id, 'bts-2-caption');

    $output_text = carbon_get_post_meta($id, 'output-text');

    return [
        'title' => $title,
        'lead' => $lead,
        'client' => $client,
        'services' => $services,
        'year' => $year,
        'image-main' => $image_main,
        'project_heading' => $project_heading,
        'project_link' => $project_link,
        'challenge_text' => $challenge_text,
        'focus_text' => $focus_text,
        'bts_1' => $bts_1,
        'bts_1_caption' => $bts_1_caption,
        'bts_2' => $bts_2,
        'bts_2_caption' => $bts_2_caption,
        'output_text' => $output_text,
    ];
}