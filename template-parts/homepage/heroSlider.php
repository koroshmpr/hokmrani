<section class="swiper hero_slider" data-aos="zoom-in">
    <div class="swiper-wrapper hero">
        <?php $sliders = get_field('slider');
        if ($sliders) :
            $i = 1;
            foreach ($sliders as $slider) : ?>
                <a href="<?= $slider['link']['url'] ?? '' ;?>" class="swiper-slide h-auto position-relative text-center">
                    <div class="position-absolute top-0 bottom-0 text-white start-50 translate-middle-x col-lg-5 col-9 row align-content-center">
                        <?php if ($slider['title']): ?>
                            <h<?= $i < 7 ? $i : 6; ?> class="display-4 " data-aos="fade-down"
                                                      data-aos-delay="300"> <?= $slider['title']; ?></h<?= $i < 7 ? $i : 6; ?>>
                        <?php endif; ?>
                        <article data-aos="fade-up" data-aos-delay="300"><?= $slider['text']; ?></article>
                    </div>
                    <img class="object-fit-cover w-100 h-100 <?= $slider['image_mobile'] ? 'd-none d-lg-inline' : ''; ?>"
                         src="<?= $slider['image']['url'] ?? ''; ?>"
                         alt="<?= $slider['image']['title'] ?? ''; ?>">
                    <?php if ($slider['image_mobile']) : ?>
                        <img class="object-fit-cover w-100 h-100 d-lg-none"
                             src="<?= $slider['image_mobile']['url'] ?? ''; ?>"
                             alt="<?= $slider['image_mobile']['title'] ?? ''; ?>">
                    <?php endif; ?>
                </a>
                <?php
                $i++;
            endforeach;
        endif; ?>
    </div>
</section>