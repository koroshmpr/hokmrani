<?php
$details = get_field('details');
if ($details):
    ?>
    <section class="d-flex flex-wrap">
        <div class="col-lg-2 col-12 bg-primary d-flex position-relative align-items-start justify-content-center">
            <img width="180" class="img-fluid position-sticky top-0 pt-lg-5" src="<?= get_field('section_image')['url'] ?? ''; ?>"
                 alt="<?= get_field('section_image')['title'] ?? ''; ?>">
        </div>
        <div class="col bg-primary bg-opacity-10 pt-5">
            <?php
            foreach ($details as $detail) : ?>
                <div class="d-flex flex-wrap align-items-center py-3 px-3 px-lg-0">
                    <div class="col-md-3 col-12 text-center">
                        <img data-aos="zoom-in" width="150" src="<?= $detail['image']['url'] ?? ''; ?>"
                             alt="<?= $detail['image']['title'] ?? ''; ?>">
                    </div>
                    <div class="text-dark col-md-9 col-lg-6 col-12 overflow-hidden">
                        <h2 data-aos="fade-left"
                            class="border-start border-2 mb-4 border-secondary ps-3"><?= $detail['title']; ?></h2>
                        <?php if ($detail['excerpt']): ?>
                            <div data-aos="fade-left" data-aos-delay="100"
                                 class="mb-3"> <?= $detail['excerpt']; ?></div>
                        <?php endif; ?>
                        <div class="text-justify" data-aos="fade-left" data-aos-delay="200"><?= $detail['content']; ?></div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>