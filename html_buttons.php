<?php
/**
 * This source file is part of the open source project
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2023, Packet Tide, LLC (https://www.packettide.com)
 * @license   https://expressionengine.com/license Licensed under Apache License, Version 2.0
 */

/**
 * Pre Defined HTML Buttons
 */

// $installation_defaults
// $predefined_buttons

return array(
    'defaults' => array('H2','H3','bold', 'italic', 'blockquote', 'anchor', 'picture'),
    'buttons' => array(
        'H1' => array(
            'tag_name' => lang('H1'),
            'tag_open' => '# ',
            'tag_close' => '',
            'accesskey' => '1',
            'classname' => ''
        ),
        'H2' => array(
            'tag_name' => lang('H2'),
            'tag_open' => '## ',
            'tag_close' => '',
            'accesskey' => '2',
            'classname' => ''
        ),
        'H3' => array(
            'tag_name' => lang('H3'),
            'tag_open' => '### ',
            'tag_close' => '',
            'accesskey' => '3',
            'classname' => ''
        ),
        'H4' => array(
            'tag_name' => lang('H4'),
            'tag_open' => '### ',
            'tag_close' => '',
            'accesskey' => '4',
            'classname' => ''
        ),
        'CODE' => array(
            'tag_name' => lang('Code'),
            'tag_open' => '`',
            'tag_close' => '` ',
            'accesskey' => '',
            'classname' => ''
        ),
        'HTML' => array(
            'tag_name' => lang('HTML'),
            'tag_open' => '```html ',
            'tag_close' => '```',
            'accesskey' => '',
            'classname' => ''
        ),
        'bold' => array(
            'tag_name' => lang('html_btn_bold'),
            'tag_open' => '**',
            'tag_close' => '** ',
            'accesskey' => 'b',
            'classname' => 'html-bold'
        ),
        'italic' => array(
            'tag_name' => lang('html_btn_italic'),
            'tag_open' => '*',
            'tag_close' => '* ',
            'accesskey' => 'i',
            'classname' => 'html-italic'
        ),
        'I&B' => array(
            'tag_name' => lang('I&B'),
            'tag_open' => '***',
            'tag_close' => '*** ',
            'accesskey' => '',
            'classname' => ''
        ),
        'strike' => array(
            'tag_name' => lang('html_btn_strike'),
            'tag_open' => '~~',
            'tag_close' => '~~ ',
            'accesskey' => 's',
            'classname' => 'html-strike'
        ),
        'ins' => array(
            'tag_name' => lang('html_btn_ins'),
            'tag_open' => '<ins>',
            'tag_close' => '</ins>',
            'accesskey' => '',
            'classname' => 'html-ins'
        ),
        'ul' => array(
            'tag_name' => lang('html_btn_ul'),
            'tag_open' => '- ',
            'tag_close' => '',
            'accesskey' => 'u',
            'classname' => 'html-list'
        ),
        'ol' => array(
            'tag_name' => lang('html_btn_ol'),
            'tag_open' => '1. ',
            'tag_close' => '',
            'accesskey' => 'o',
            'classname' => 'html-order-list'
        ),
        'blockquote' => array(
            'tag_name' => lang('html_btn_blockquote'),
            'tag_open' => '> ',
            'tag_close' => '',
            'accesskey' => 'q',
            'classname' => 'html-quote'
        ),
        'anchor' => array(
            'tag_name' => lang('html_btn_anchor'),
            'tag_open' => '[[![Title]!]]([![Link:!:https://]!]) ',
            'tag_close' => '',
            'accesskey' => 'k',
            'classname' => 'html-link'
        ),
        'picture' => array(
            'tag_name' => lang('html_btn_picture'),
            'tag_open' => '![ ]([![Link:!:https://]!])',
            'tag_close' => '',
            'accesskey' => '',
            'classname' => 'html-upload'
        ),
    )
);

// EOF
