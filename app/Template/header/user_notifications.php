<span class="notification">
<?php if ($this->user->hasNotifications()): ?>
    <?= $this->modal->mediumIcon('bell web-notification-icon fa-wh', t('Unread notifications'), 'WebNotificationController', 'show', array('user_id' => $this->user->getId())) ?>
<?php else: ?>
    <?= $this->modal->mediumIcon('bell fa-wh', t('My notifications'), 'WebNotificationController', 'show', array('user_id' => $this->user->getId())) ?>
<?php endif ?>
</span>
<span>
<a href="https://www.facebook.com/ProjectPrimeOffice/" target="_blank"> <i class="fa fa-facebook-square web-notification-icon fa-wh fa-fw fa-lg"></i></a>    
</span>
