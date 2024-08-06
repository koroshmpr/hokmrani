<?php
$addresses = get_field('addresses');
if ($addresses) :
    ?>
    <section class="position-relative py-5">
        <div class="py-4 translate-middle-y bg-secondary z-n1 position-absolute top-50 start-0 end-0"></div>
        <div class="container d-flex flex-wrap justify-content-lg-between align justify-content-center row-gap-4">
            <?php foreach ($addresses as $index => $address): ?>
                <div class="<?= $index % 2 == 0 ? 'bg-info text-primary col-lg-5' : 'bg-primary text-white col-lg-6' ?> col-12 p-4 position-relative">
                    <h5 class="border-start border-secondary ps-3 mb-4 border-3"><?= $address['title']; ?></h5>
                    <div class="pb-4">
                        <?= $address['content']; ?>
                    </div>
                    <img width="70" height="70" class="position-absolute bottom-0 start-0 ps-3 pb-3" src="<?= $address['image']['url'] ?? '' ?>" alt="<?= $address['image']['title'] ?? '' ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>