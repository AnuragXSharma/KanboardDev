<div class="page-header">
    <h2><?= t('Add new tag') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('ProjectTagController', 'save', array('project_id' => $project['id'])) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, array('autofocus', 'required', 'maxlength="255"')) ?>

    <?= $this->modal->submitButtons() ?>
</form>
