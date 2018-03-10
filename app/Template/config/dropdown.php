<div class="dropdown">
    <a href="#" class="dropdown-menu action-menu w3-white"><i class="fa fa-navicon"></i></a>
    <ul>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'index') ?>>
            <?= $this->url->link(t('About'), 'ConfigController', 'index') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'application') ?>>
            <?= $this->url->link(t('Application settings'), 'ConfigController', 'application') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'email') ?>>
            <?= $this->url->link(t('Email settings'), 'ConfigController', 'email') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'project') ?>>
            <?= $this->url->link(t('Project settings'), 'ConfigController', 'project') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'board') ?>>
            <?= $this->url->link(t('Board settings'), 'ConfigController', 'board') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('TagController', 'index') ?>>
            <?= $this->url->link(t('Tags management'), 'TagController', 'index') ?>
        </li>
 
    </ul>
</div>
