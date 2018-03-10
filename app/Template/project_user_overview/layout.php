<section id="main">
    <div class="page-header">
        <ul class="views"> 
                <li>
                    <?= $this->render('project_user_overview/dropdown',array('users' => $users, 'filter' => $filter)) ?>
                </li>
            <?php if ($this->user->hasAccess('ProjectCreationController', 'create')): ?>
                <li>
                    <?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create') ?>
                </li>
            <?php endif ?>
            <?php if ($this->app->config('disable_private_project', 0) == 0): ?>
                <li>
                    <?= $this->modal->medium('lock', t('New private project'), 'ProjectCreationController', 'createPrivate') ?>
                </li>
            <?php endif ?>
            <li>
                <?= $this->url->icon('folder', t('Projects list'), 'ProjectListController', 'show') ?>
            </li>
        </ul>
        <div class="board-selector-container">
        <?= $this->app->component('select-dropdown-autocomplete', array(
        'name' => 'user_id',
        'items' => $users,
        'defaultValue' => $filter['user_id'],
        'sortByKeys' => true,
        'redirect' => array(
            'regex' => 'USER_ID',
            'url' => $this->url->to('ProjectUserOverviewController', $this->app->getRouterAction(), array('user_id' => 'USER_ID')),
        ),
    )) ?>
     </div>
   </div>
    <section class="sidebar-container">
        <div class="sidebar-content">
            <div class="sub-header">
                <h2><?= $this->text->e($title) ?></h2>
            </div>
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>
