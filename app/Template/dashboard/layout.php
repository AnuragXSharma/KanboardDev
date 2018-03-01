<section id="main">
    <div class="page-header">
        <ul class="views">
            <li <?= $this->app->checkMenuSelection('DashboardController', 'show') ?>>
            <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('DashboardController', 'projects') ?>>
            <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
            </li>
            <li <?= $this->app->checkMenuSelection('DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
            </li>
            <li>
                <?= $this->modal->medium('dashboard', t('My activity stream'), 'ActivityController', 'user') ?>
            </li>
            <?= $this->hook->render('template:dashboard:page-header:menu', array('user' => $user)) ?>
        </ul>
        <div class="filter-box">
          <form method="get" action="<?= $this->url->dir() ?>" class="search">
          <?= $this->form->hidden('controller', array('controller' => 'SearchController')) ?>
          <?= $this->form->hidden('action', array('action' => 'index')) ?>

           <div class="input-addon">
            <?= $this->form->text('search', array(), array(), array('placeholder="'.t('Search').'"'), 'input-addon-field') ?>
            <div class="input-addon-item">
                <?= $this->render('app/filters_helper') ?>
            </div>
           </div>
         </form>
        </div>
    </div>

    <section class="sidebar-container" id="dashboard">
        
        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>
