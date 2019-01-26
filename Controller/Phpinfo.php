<?php

namespace Kanboard\Plugin\Phpinfo\Controller;

use Kanboard\Controller\BaseController;

/**
 * Phpinfo
 *
 * @package controller
 * @author:  Martin Middeke
 * @changes/bugfix: Tobias Becker
 */
class Phpinfo extends BaseController
{
    /**
     * Phpinfo index page
     *
     * @access public
     */
    public function index()
    {
        $this->response->html($this->helper->layout->config('phpinfo:config/index', array(
            'title' => t('Settings').' &gt; '.'PHP Info',
        )));
    }
}
