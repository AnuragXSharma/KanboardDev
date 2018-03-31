<?php if (empty($overview_paginator)): ?>
    <p class="alert"><?= t('There is nothing assigned to you.') ?></p>
<?php else: ?>
    <?php foreach ($overview_paginator as $result): ?>
        <?php if (! $result['paginator']->isEmpty()): ?>
            <div class="sub-header">
                <h2><?= $this->url->link($this->text->e($result['project_name']), 'BoardViewController', 'show', array('project_id' => $result['project_id'])) ?></h2>
            </div>

            <div class="table-list">
                <?= $this->render('task_list/header', array(
                    'paginator' => $result['paginator'],
                )) ?>

                <?php foreach ($result['paginator']->getCollection() as $task): ?>
                    <div class="table-list-row color-<?= $task['color_id'] ?>">
                        <?= $this->render('task_list/task_title', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_details', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_avatars', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_icons', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_subtasks', array(
                            'task'    => $task,
                            'user_id' => $user['id'],
                        )) ?>
                    </div>
                <?php endforeach ?>
            </div>

            <?= $result['paginator'] ?>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>

<?= $this->hook->render('template:dashboard:show', array('user' => $user)) ?>
