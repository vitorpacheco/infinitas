<?php
    /**
     * Comment Template.
     *
     * @todo -c Implement .this needs to be sorted out.
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://www.dogmatic.co.za
     * @package       sort
     * @subpackage    sort.comments
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     * @since         0.5a
     */

    class FeedableBehavior extends ModelBehavior
    {

        function setup(&$Model, $settings = array())
        {
            if (!isset($this->settings[$Model->alias]))
            {
                $this->settings[$Model->alias] = array();
            }

            if ( !is_array( $settings ) )
            {
                $settings = array();
            }
            $this->settings[$Model->alias] = array_merge($this->settings[$Model->alias], $settings);
        }
    }
?>