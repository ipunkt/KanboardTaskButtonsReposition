<?php

namespace Kanboard\Plugin\TaskButtonsReposition;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('task/sidebar', 'TaskButtonsReposition:task/sidebar');
        $this->template->setTemplateOverride('task/description', 'TaskButtonsReposition:task/description');
        $this->template->setTemplateOverride('task_file/show', 'TaskButtonsReposition:task_file/show');
        $this->template->setTemplateOverride('task_external_link/show', 'TaskButtonsReposition:task_external_link/show');
        $this->template->setTemplateOverride('task_internal_link/show', 'TaskButtonsReposition:task_internal_link/show');
        $this->template->setTemplateOverride('subtask/show', 'TaskButtonsReposition:subtask/show');
        $this->hook->on("template:layout:css", array("template" => "plugins/TaskButtonsReposition/Assets/css/skin.css"));
    }

    public function getPluginName()
    {
        return 'TaskButtonsReposition';
    }

    public function getPluginDescription()
    {
        return 'By this Plugin some action buttons are moved from sidebar list to corresponding accordion section in sidebar content.';
    }

    public function getPluginAuthor()
    {
        return 'ipunkt Business Solutions';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return '';
    }
}