<?php if ($this->projectRole->canUpdateTask($task)): ?>
    <li class="action-list">
        <?= $this->modal->large('edit', t('Edit the task'), 'TaskModificationController', 'edit',
            array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
    </li>
<?php endif ?>
