<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="mt-3">

    <?= form_open('', 'method="get"') ?>

    <div class="row my-3">
        <div class="col-md-8">
            <?= form_input([
                'name' => 'cep',
                'id' => 'cep',
                'class' => 'form-control',
                'placeholder' => 'CEP'
            ], '', 'required') ?>
        </div>

        <div class="col-md-4">
            <?= form_submit([
                'class' => 'btn btn-primary',
                'value' => 'Enviar'
            ]) ?>
        </div>
    </div>

    <?= form_close() ?>

    <?= getError() ?>    

    <?php if (isset($cep)) : ?>

        <?= $this->include('view') ?>

    <?php endif ?>

    <?= $this->endSection() ?>