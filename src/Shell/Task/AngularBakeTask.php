<?php
namespace Dala00\AngularBake\Shell\Task;

use Bake\Shell\Task\TemplateTask;

/**
 * AngularBake shell task.
 */
class AngularBakeTask extends TemplateTask
{
    public $pathFragment = 'Template/';

    /**
     * {@inheritDoc}
     */
    public function name()
    {
        return 'angular_bake';
    }
}
