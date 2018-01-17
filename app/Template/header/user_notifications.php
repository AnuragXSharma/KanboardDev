<span class="notification">
<?php if ($this->user->hasNotifications()): ?>
    <?= $this->modal->mediumIcon('bell web-notification-icon fa-wh', t('Unread notifications'), 'WebNotificationController', 'show', array('user_id' => $this->user->getId())) ?>
<?php else: ?>
    <?= $this->modal->mediumIcon('bell fa-wh', t('My notifications'), 'WebNotificationController', 'show', array('user_id' => $this->user->getId())) ?>
<?php endif ?>
</span>
