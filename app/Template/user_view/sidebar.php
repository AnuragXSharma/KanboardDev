<div class="sidebar">
     <ul>
        <?php if ($this->user->hasAccess('UserViewController', 'show')): ?>
            <li <?= $this->app->checkMenuSelection('UserViewController', 'show') ?>>
                <?= $this->url->link(t('Summary'), 'UserViewController', 'show', array('user_id' => $user['id'])) ?>
            </li>
        <?php endif ?>
        <?php if ($this->user->isAdmin() || $this->user->isCurrentUser($user['id'])): ?>
            <?php if ($this->user->hasAccess('UserViewController', 'timesheet')): ?>
                <li <?= $this->app->checkMenuSelection('UserViewController', 'timesheet') ?>>
                    <?= $this->url->link(t('Time tracking'), 'UserViewController', 'timesheet', array('user_id' => $user['id'])) ?>
                </li>
            <?php endif ?>
            <?php if ($this->user->hasAccess('UserViewController', 'lastLogin')): ?>
                <li <?= $this->app->checkMenuSelection('UserViewController', 'lastLogin') ?>>
                    <?= $this->url->link(t('Last logins'), 'UserViewController', 'lastLogin', array('user_id' => $user['id'])) ?>
                </li>
            <?php endif ?>
            <?php if ($this->user->hasAccess('UserViewController', 'sessions')): ?>
                <li <?= $this->app->checkMenuSelection('UserViewController', 'sessions') ?>>
                    <?= $this->url->link(t('Persistent connections'), 'UserViewController', 'sessions', array('user_id' => $user['id'])) ?>
                </li>
            <?php endif ?>
            <?php if ($this->user->hasAccess('UserViewController', 'passwordReset')): ?>
                <li <?= $this->app->checkMenuSelection('UserViewController', 'passwordReset') ?>>
                    <?= $this->url->link(t('Password reset history'), 'UserViewController', 'passwordReset', array('user_id' => $user['id'])) ?>
                </li>
            <?php endif ?>
        <?php endif ?>

        <?= $this->hook->render('template:user:sidebar:information', array('user' => $user)) ?>
    </ul>
</div>
   