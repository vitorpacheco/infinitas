<?php
    /**
     * Management Config admin edit post.
     *
     * this page is for admin to manage the setup of the site
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://infinitas-cms.org
     * @package       management
     * @subpackage    management.views.configs.admin_edit
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     */

    echo $this->Form->create('Route');
        echo $this->Infinitas->adminEditHead($this);
        echo $this->Form->input('name');
        echo $this->Form->input('url');
        echo $this->Form->input('prefix');
        echo $this->Form->input('plugin', array('class' => "json {url:{action:'getPlugins'}, target:'getControllers'}"));
        echo $this->Form->input('controller', array('class' => "json {url:{action:'getControllers'}, target:'getActions'}"));
        echo $this->Form->input('action');
        echo $this->Form->input('pass');
        echo $this->Form->input('values');
        echo $this->Form->input('rules');
        echo $this->Form->input('force_backend');
        echo $this->Form->input('force_frontend');
        echo $this->Form->input('active');
        echo $this->Form->input('theme_id');
        echo $this->Form->hidden('order_id', array('value' => 1));
    echo $this->Form->end();
 ?>