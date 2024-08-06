<?php
$tables = get_field('table-row');
if ($tables) : ?>
    <section class="d-flex container bg-primary py-1 bg-opacity-10 my-5">
        <table class="col table mt-n5 table-bordered text-center">
            <thead>
            <tr>
                <th class="w-50 text-white fw-bold bg-primary"><?= get_field('column-1') ?></th>
                <th class="w-50 text-white fw-bold bg-primary"><?= get_field('column-2') ?></th>
            </tr>
            </thead>
            <?php
            foreach ($tables as $table) :?>
                <tr>
                    <td><?= $table['column-1']; ?></td>
                    <td><?= $table['column-2']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
<?php endif; ?>