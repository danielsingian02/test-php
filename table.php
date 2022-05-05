<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <?php foreach($tableHeader as $th) : ?>
                                <th><?= $th; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($tableRow as $key => $tr) : ?>
                            <tr>
                                <?php foreach($tr as $thKey => $td): ?>
                                    <?php if ( ! in_array($thKey, $removedIndex) ) : ?>
                                        <td><?= $td; ?></td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>