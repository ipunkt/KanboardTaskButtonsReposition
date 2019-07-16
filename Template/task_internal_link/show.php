<details class="accordion-section" <?= empty($links) ? '' : 'open' ?>>
    <summary class="accordion-title"><?= t('Internal links') ?></summary>
    <div class="accordion-content">
        <?= $this->render('task_internal_link/table', array(
            'links' => $links,
            'task' => $task,
            'project' => $project,
            'editable' => $editable,
            'is_public' => $is_public,
        )) ?>
    </div>
</details>

<li class="action-list">
    <?= $this->modal->medium('code-fork', t('Add internal link'), 'TaskInternalLinkController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
</li>