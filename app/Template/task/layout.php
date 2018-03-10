<section id="main">
    <div class="page-header">
   
        <ul class="views">
            <li>
            <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
             <?= $this->render('task/dropdown', array('task' => $task)) ?>
                <?php else: ?>
                <strong><?= '#'.$task['id'] ?></strong>
            <?php endif ?>
            </li>
            <li <?= $this->app->checkMenuSelection('TaskViewController', 'show') ?>>
            <?= $this->url->icon('newspaper-o', t('Summary'), 'TaskViewController', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('ActivityController', 'task') ?>>
            <?= $this->url->icon('dashboard', t('Activity stream'), 'ActivityController', 'task', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('TaskViewController', 'transitions') ?>>
            <?= $this->url->icon('arrows-h', t('Transitions'), 'TaskViewController', 'transitions', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('TaskViewController', 'analytics') ?>>
            <?= $this->url->icon('bar-chart', t('Analytics'), 'TaskViewController', 'analytics', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
            <?php if ($task['time_estimated'] > 0 || $task['time_spent'] > 0): ?>
            <li <?= $this->app->checkMenuSelection('TaskViewController', 'timetracking') ?>>
            <?= $this->url->icon('clock-o', t('Time tracking'), 'TaskViewController', 'timetracking', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
            </li>
            <?php endif ?>  
            <li <?= $this->app->checkMenuSelection('BoardViewController') ?>>
            <?= $this->url->icon('th', '', 'BoardViewController', 'show', array('project_id' => $project['id']),false, 'view-board', t('Project Board')) ?>
            </li>
        </ul>
      
    </div>
    <section
        class="sidebar-container" id="task-view"
        data-edit-url="<?= $this->url->href('TaskModificationController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>"
        data-subtask-url="<?= $this->url->href('SubtaskController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>"
        data-internal-link-url="<?= $this->url->href('TaskInternalLinkController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>"
        data-comment-url="<?= $this->url->href('CommentController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>">

        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>
