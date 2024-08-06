<section class="container py-4">
    <?php
    $courses = get_field('courses');
    if ($courses) : ?>
        <ul class="nav nav-tabs d-flex justify-content-lg-center flex-wrap gap-4 row-gap-2 border-0 mx-2 mx-lg-0"
            id="myTab" role="tablist">
            <?php foreach ($courses as $index => $course) : ?>
                <li class="nav-item row fs-6 col-6 col-md-4 col-lg-auto justify-content-center" role="presentation">
                    <button class="nav-link px-2 px-lg-3 py-3 rounded-0 course-tab border-primary border-1 <?= $index == 0 ? 'active' : ''; ?>"
                            id="course-tab-<?= $index; ?>" data-bs-toggle="tab"
                            aria-controls="course-section-<?= $index; ?>" aria-selected="true"
                            data-bs-target="#course-section-<?= $index; ?>"
                            type="button" role="tab">
                        <?= $course['course_name']; ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="py-1 tab-content" id="nav-tabContent">
            <?php
            foreach ($courses as $index => $course) :
                $type = $course['course_type'];
                ?>
                <div class="tab-pane fade <?= $index == 0 ? 'show active' : ''; ?>" id="course-section-<?= $index; ?>"
                     role="tabpanel" aria-labelledby="course-tab-<?= $index; ?>" tabindex="0">
                    <div class="d-flex gap-3 bg-light mt-3 align-items-center flex-wrap justify-content-center justify-content-lg-start overflow-hidden">
                        <div class="col-lg-2 col-12 p-lg-3 text-center"
                             style="top: 20px; z-index: 100;" data-aos="fade-left">
                            <img width="200" data-aos="fade-left" class="img-fluid p-3" src="<?= $course['image']['url'] ?? ''; ?>"
                                 alt="<?= $course['image']['title'] ?? ''; ?>">
                        </div>
                        <div class="col-lg-auto col-11 text-center text-lg-start">
                            <h3 data-aos="fade-right" class="border-bottom fw-bold border-secondary pb-3 border-3"><?= $course['course_title'] ?? ''; ?></h3>
                        </div>
                    </div>
                    <div class="col">
                        <?php
                        $sections = $course['course'];
                        foreach ($sections as $i => $section) : ?>
                            <div class="row justify-content-center overflow-hidden <?= $i > 0 ? ' border-top border-2 border-primary border-opacity-50' : '' ?>">
                                <div data-aos="fade-down"
                                     class="p-4 border border-white border-3 d-flex flex-wrap gap-2 justify-content-between align-items-center align-items-lg-start text-primary">
                                    <div class="col text-center text-lg-start">
                                        <h4 class="fs-4 border-start border-2 fw-bold border-secondary ps-2 mb-4"><?= $section['name'] ?? ''; ?></h4>
                                        <article class="text-justify">
                                            <?= $section['content']; ?>
                                        </article>
                                        <div class="d-flex justify-content-center justify-content-lg-end overflow-hidden">
                                            <button data-aos="fade-left" data-aos-delay="800"
                                                    class="course-btn rounded-start-2 fs-6 rounded-end-0"
                                                    data-target="<?= $section['name'] ?? ''; ?>"
                                                    data-type="<?= $type; ?>"
                                            >ثبت نام این دوره
                                            </button>
                                            <button data-aos="fade-right"
                                                    data-aos-delay="300"
                                                    aria-label="course info-<?= $section['name'] ?? ''; ?>"
                                                    class="courseInfo btn ms-n2 border-primary border-start border-5 rounded-end-2 fw-bold bg-secondary text-white">
                                                <svg width="25" height="25" fill="currentColor"
                                                     class="bi bi-journal-text"
                                                     viewBox="0 0 16 16">
                                                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>