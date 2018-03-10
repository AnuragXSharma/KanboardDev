<div class="sidebar sidebar-icons">
    <div class="sidebar-title">
        <h2><?= t('Task #%d', $task['id']) ?></h2>
    </div>
    <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
    <div class="sidebar-title">
        <h2><?= t('Actions') ?></h2>
    </div>
    <ul>
        <?php if ($this->projectRole->canUpdateTask($task)): ?>
        <li>
            <?= $this->modal->large('edit', t('Edit the task'), 'TaskModificationController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('refresh fa-rotate-90', t('Edit recurrence'), 'TaskRecurrenceController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <?php endif ?>
        <li>
            <?= $this->modal->medium('plus', t('Add a sub-task'), 'SubtaskController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('code-fork', t('Add internal link'), 'TaskInternalLinkController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('external-link', t('Add external link'), 'TaskExternalLinkController', 'find', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->small('comment-o', t('Add a comment'), 'CommentController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('file', t('Attach a document'), 'TaskFileController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('camera', t('Add a screenshot'), 'TaskFileController', 'screenshot', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->small('files-o', t('Duplicate'), 'TaskDuplicationController', 'duplicate', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->small('clipboard', t('Duplicate to another project'), 'TaskDuplicationController', 'copy', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->small('clone', t('Move to another project'), 'TaskDuplicationController', 'move', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->small('paper-plane', t('Send by email'), 'TaskMailController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <?php if ($task['is_active'] == 1 && $this->projectRole->isSortableColumn($task['project_id'], $task['column_id'])): ?>
            <li>
                <?= $this->modal->small('arrows', t('Move position'), 'TaskMovePositionController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
        <?php endif ?>
        <?php if ($this->projectRole->canChangeTaskStatusInColumn($task['project_id'], $task['column_id'])): ?>
            <?php if ($task['is_active'] == 1): ?>
                <li>
                    <?= $this->modal->confirm('times', t('Close this task'), 'TaskStatusController', 'close', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
                </li>
            <?php else: ?>
                <li>
                    <?= $this->modal->confirm('check-square-o', t('Open this task'), 'TaskStatusController', 'open', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
                </li>
            <?php endif ?>
        <?php endif ?>
        <?php if ($this->projectRole->canRemoveTask($task)): ?>
            <li>
                <?= $this->modal->confirm('trash-o', t('Remove'), 'TaskSuppressionController', 'confirm', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'redirect' => 'board')) ?>
            </li>
        <?php endif ?>

        <?= $this->hook->render('template:task:sidebar:actions', array('task' => $task)) ?>
    </ul>
    <?php endif ?>
</div>
