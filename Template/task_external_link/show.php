<li class="action-list">
    <?= $this->modal->medium('external-link', t('Add external link'), 'TaskExternalLinkController', 'find', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
</li>
