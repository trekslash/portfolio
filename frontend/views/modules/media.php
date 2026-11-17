<?php
$media = $args['media'] ?? null;
if (!$media || empty($media['src'])) return;
?>
<?php if ($media['type'] === 'video') : ?>
    <video autoplay muted loop playsinline>
        <source src="<?= esc_url($media['src']) ?>" type="<?= esc_attr($media['mime']) ?>">
    </video>
<?php else : ?>
    <img src="<?= esc_url($media['src']) ?>" alt="<?= esc_attr($media['alt']) ?>">
<?php endif; ?>