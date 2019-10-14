<li class="action-list">
    <?= $this->modal->medium('file', t('Attach a document'), 'TaskFileController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
    &nbsp
    <?= $this->modal->medium('camera', t('Add a screenshot'), 'TaskFileController', 'screenshot', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
</li>
