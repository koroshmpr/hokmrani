<?php
$logo = get_field('siteLogo', 'option');
?>
<a class="text-start col-8 col-lg-4" href="<?= get_field('mainwebsite-link' , 'option')['url'] ?? home_url(); ?>" aria-label="back to home page">
    <img class="img-fluid object-fit-contain" width="" height="71" src="<?= $logo['url'] ?? ''; ?>"
         alt="<?= $logo['title'] ?? ''; ?>">
</a>