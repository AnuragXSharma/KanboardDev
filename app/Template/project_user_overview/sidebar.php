<div class="sidebar">
   <ul>
        <li <?= $this->app->checkMenuSelection('ProjectUserOverviewController', 'managers') ?>>
            <?= $this->url->link(t('Project managers'), 'ProjectUserOverviewController', 'managers', $filter) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ProjectUserOverviewController', 'members') ?>>
            <?= $this->url->link(t('Project members'), 'ProjectUserOverviewController', 'members', $filter) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ProjectUserOverviewController', 'opens') ?>>
            <?= $this->url->link(t('Open tasks'), 'ProjectUserOverviewController', 'opens', $filter) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ProjectUserOverviewController', 'closed') ?>>
            <?= $this->url->link(t('Closed tasks'), 'ProjectUserOverviewController', 'closed', $filter) ?>
        </li>

        <?= $this->hook->render('template:project-user:sidebar') ?>
    </ul>
</div>
