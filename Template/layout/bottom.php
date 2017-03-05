<?= $this->app->component('chat-widget', array(
    'defaultTitle'  => t('Kanboard Chat'),
    'interval'      => 3,
    'lastMessageId' => $last_message_id,
    'showUrl'       => $this->url->to('ChatController', 'show', array('plugin' => 'Chat')),
    'checkUrl'      => $this->url->to('ChatController', 'check', array('plugin' => 'Chat')),
    'pingUrl'       => $this->url->to('ChatController', 'ping', array('plugin' => 'Chat')),
)) ?>