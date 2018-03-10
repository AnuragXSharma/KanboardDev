<section id="main">
    
    <div class="page-header">
    <ul class="views">
        <li>
             <?= $this->render('config/dropdown') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('LinkController') ?>>
            <?= $this->url->link(t('Link labels'), 'LinkController', 'show') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('CurrencyController') ?>>
            <?= $this->url->link(t('Currency rates'), 'CurrencyController', 'show') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'integrations') ?>>
            <?= $this->url->link(t('Integrations'), 'ConfigController', 'integrations') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'webhook') ?>>
            <?= $this->url->link(t('Webhooks'), 'ConfigController', 'webhook') ?>
        </li>
        <li <?= $this->app->checkMenuSelection('ConfigController', 'api') ?>>
            <?= $this->url->link(t('API'), 'ConfigController', 'api') ?>
        </li>
        <?= $this->hook->render('template:config:sidebar') ?>
    </ul>
</div>
    <section class="sidebar-container" id="config-section">
              <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>
