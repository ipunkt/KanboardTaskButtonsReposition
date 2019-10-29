<?php

namespace Kanboard\Plugin\KanboardTaskButtonsReposition;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach("template:task:show:before-subtasks",
            "KanboardTaskButtonsReposition:task/description");
        $this->template->hook->attach("template:task:show:before-internal-links",
            "KanboardTaskButtonsReposition:subtask/show");
        $this->template->hook->attach("template:task:show:before-external-links",
            "KanboardTaskButtonsReposition:task_internal_link/show");
        $this->template->hook->attach("template:task:show:before-attachments",
            "KanboardTaskButtonsReposition:task_external_link/show");
        $this->template->hook->attach("template:task:show:before-comments",
            "KanboardTaskButtonsReposition:task_file/show");
        $this->hook->on("template:layout:css", array("template" => "plugins/KanboardTaskButtonsReposition/Assets/css/skin.css"));
    }

    public function getPluginName()
    {
        return 'KanboardTaskButtonsReposition';
    }

    public function getPluginDescription()
    {
        return 'By this Plugin some action buttons are moved from sidebar list to corresponding accordion section in Task content view.';
    }

    public function getPluginAuthor()
    {
        return 'Andrei Volgin, ipunkt Business Solutions';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://www.ipunkt.biz/unternehmen/opensource';
    }
}
