<?= Arshwell\Monolith\Piece::html('site/banner', array(
    'background'    => Arshavinel\ElleTherapy\View\Site::image('banner.background', 1400, 650),
    'image'         => Arshavinel\ElleTherapy\View\Site::image('banner.imagine', 1400, 500)
)) ?>

<div class="bg-color-5">
    <div class="container text-color-7 text-center padding-4th-4th padding-md-2nd-2nd">
        <?= Arshavinel\ElleTherapy\View\Site::content('box.1.text') ?>
    </div>
</div>

<div class="container margin-3rd-3rd">
    <div class="row">
        <div class="col-md-5 mb-3">
            <img src="<?= Arshavinel\ElleTherapy\View\Site::image('despre-mine.poza', 960, 1100) ?>" width="100%" />
        </div>
        <div class="col-md-7">
            <?= Arshavinel\ElleTherapy\View\Site::content('despre-mine.descriere') ?>
        </div>
    </div>
</div>

<div class="bg-color-2">
    <div class="container text-color-7 padding-4th-4th padding-md-2nd-2nd text-center">
        <?= Arshavinel\ElleTherapy\View\Site::content('box.2.text') ?>
        <br>
        <a class="btn btn-7-2 mt-2" href="<?= Arshwell\Monolith\Web::url('site.story') ?>">
            <?= Arshavinel\ElleTherapy\View\Site::sentence('box.2.link.text') ?>
        </a>
    </div>
</div>

<div class="padding-6th-0 padding-sm-3rd-3rd">
    <?= Arshwell\Monolith\Piece::html('site/industry-comparison') ?>
</div>

<?= Arshwell\Monolith\Piece::html('site/services', array(
    'homepage' => true,
    'button' => array(
        'link' => Arshwell\Monolith\Web::url('site.coaching.info'),
        'text' => Arshavinel\ElleTherapy\View\Site::sentence('servicii.link.text')
    )
)) ?>
