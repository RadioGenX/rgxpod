<?= $this->extend('_layout') ?>

<?= $this->section('title') ?>
<?= lang('Person.create') ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= lang('Person.create') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<form action="<?= route_to('person-create') ?>" method="POST" class="flex flex-col max-w-sm gap-y-4" enctype="multipart/form-data">
<?= csrf_field() ?>

<Forms.Field
    name="avatar"
    label="<?= esc(lang('Person.form.avatar')) ?>"
    helper="<?= esc(lang('Person.form.avatar_size_hint')) ?>"
    type="file"
    accept=".jpg,.jpeg,.png" />

<Forms.Field
    name="full_name"
    label="<?= esc(lang('Person.form.full_name')) ?>"
    hint="<?= esc(lang('Person.form.full_name_hint')) ?>"
    required="true"
    data-slugify="title" />

<Forms.Field
    name="unique_name"
    label="<?= esc(lang('Person.form.unique_name')) ?>"
    hint="<?= esc(lang('Person.form.unique_name_hint')) ?>"
    required="true"
    data-slugify="slug" />
<Forms.Field
    name="information_url"
    label="<?= esc(lang('Person.form.information_url')) ?>"
    hint="<?= esc(lang('Person.form.information_url_hint')) ?>" />

<Button variant="primary" class="self-end" type="submit"><?= lang('Person.form.submit_create') ?></Button>

</form>

<?= $this->endSection() ?>
