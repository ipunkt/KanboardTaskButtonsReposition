<details class="accordion-section" <?= empty($task['description']) ? '' : 'open' ?>>
    <summary class="accordion-title"><?= t('Description') ?></summary>
    <div class="accordion-content">
        <article class="markdown">
            <?= $this->text->markdown($task['description'], isset($is_public) && $is_public) ?>
        </article>
    </div>
</details>

<?php if ($this->projectRole->canUpdateTask($task)): ?>
    <li class="action-list">
        <?= $this->modal->large('edit', t('Edit the task'), 'TaskModificationController', 'edit',
            array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
    </li>
<?php endif ?>