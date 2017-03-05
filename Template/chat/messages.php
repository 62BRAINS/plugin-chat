<?php if (empty($messages)): ?>
    <p class="alert"><?= t('There is no message.') ?></p>
<?php else: ?>
    <div class="chat-messages">
        <?php foreach ($messages as $message): ?>
            <div class="chat-message <?= $message['unread'] ? 'unread' : '' ?>">
                <?= $this->helper->avatar->small(
                    $message['user_id'],
                    $message['username'],
                    $message['name'],
                    $message['email'],
                    $message['avatar_path'],
                    'avatar-left'); ?>

                <div class="chat-message-body">
                    <?= $this->helper->text->markdown($message['message']) ?>
                </div>
                <div class="chat-message-info">
                    <?= $this->helper->dt->datetime($message['creation_date']) ?> -
                    <?= $this->text->e($message['username']) ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>