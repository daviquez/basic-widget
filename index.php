<?php

/**
 * Plugin Name: Simple Widget
*/
class Widget_Name extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'widget-slug',
            'Widget Name'
        );
    }

    public function widget($args, $instance){
        ?>
            <div class="main-navigation">
                <h2>Render Content</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti quos suscipit possimus quaerat enim iste, veniam debitis illum officia cumque.</p>
            </div>
        <?php
    }
}

add_action('widgets_init', function(){
    register_widget('Widget_Name');
});