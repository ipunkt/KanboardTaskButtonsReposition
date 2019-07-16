<?php

namespace Kanboard\Plugin\PlusButtonReposition;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('task/sidebar', 'PlusButtonReposition:task/sidebar');
        $this->template->setTemplateOverride('task/description', 'PlusButtonReposition:task/description');
        $this->template->setTemplateOverride('task_file/show', 'PlusButtonReposition:task_file/show');
        $this->template->setTemplateOverride('task_external_link/show', 'PlusButtonReposition:task_external_link/show');
        $this->template->setTemplateOverride('task_internal_link/show', 'PlusButtonReposition:task_internal_link/show');
        $this->template->setTemplateOverride('subtask/show', 'PlusButtonReposition:subtask/show');
        $this->hook->on("template:layout:css", array("template" => "plugins/PlusButtonReposition/Assets/skin.css"));
    }

    public function getPluginName()
    {
        return 'PlusButtonReposition';
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