<section class="bg-primary p-2 py-5 p-lg-4">
    <div class="container text-white pb-4 pb-lg-0">
        <h4 class="border-start border-secondary ps-3 border-3 text-lg-start text-center mb-5 fs-2 text-white">
            <?= get_field('form_title', 'option'); ?>
        </h4>
        <?= do_shortcode('[gravityform id=' . get_field('formId', 'option') . ' title="false" description="false" ajax="true"]'); ?>
    </div>
</section>