<?php
/**
 * Jamroom PEZ Database module
 *
 * copyright 2017 developer networks
 *
 * This Jamroom file is LICENSED SOFTWARE, and cannot be redistributed.
 *
 * This Source Code is subject to the terms of the Jamroom Network
 * Commercial License -  please see the included "license.html" file.
 *
 * This module may include works that are not developed by
 * developer networks
 * and are used under license - any licenses are included and
 * can be found in the "contrib" directory within this module.
 *
 * This software is provided "as is" and any express or implied
 * warranties, including, but not limited to, the implied warranties
 * of merchantability and fitness for a particular purpose are
 * disclaimed.  In no event shall the Jamroom Network be liable for
 * any direct, indirect, incidental, special, exemplary or
 * consequential damages (including but not limited to, procurement
 * of substitute goods or services; loss of use, data or profits;
 * or business interruption) however caused and on any theory of
 * liability, whether in contract, strict liability, or tort
 * (including negligence or otherwise) arising from the use of this
 * software, even if advised of the possibility of such damage.
 * Some jurisdictions may not allow disclaimers of implied warranties
 * and certain statements in the above disclaimer may not apply to
 * you as regards implied warranties; the other terms and conditions
 * remain enforceable notwithstanding. In some jurisdictions it is
 * not permitted to limit liability and therefore such limitations
 * may not apply to you.
 *
 * Jamroom 5 PEZDatabase module
 *
 * copyright 2003 - 2016
 * by The Jamroom Network
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0.  Please see the included "license.html" file.
 *
 * This module may include works that are not developed by
 * The Jamroom Network
 * and are used under license - any licenses are included and
 * can be found in the "contrib" directory within this module.
 *
 * Jamroom may use modules and skins that are licensed by third party
 * developers, and licensed under a different license  - please
 * reference the individual module or skin license that is included
 * with your installation.
 *
 * This software is provided "as is" and any express or implied
 * warranties, including, but not limited to, the implied warranties
 * of merchantability and fitness for a particular purpose are
 * disclaimed.  In no event shall the Jamroom Network be liable for
 * any direct, indirect, incidental, special, exemplary or
 * consequential damages (including but not limited to, procurement
 * of substitute goods or services; loss of use, data or profits;
 * or business interruption) however caused and on any theory of
 * liability, whether in contract, strict liability, or tort
 * (including negligence or otherwise) arising from the use of this
 * software, even if advised of the possibility of such damage.
 * Some jurisdictions may not allow disclaimers of implied warranties
 * and certain statements in the above disclaimer may not apply to
 * you as regards implied warranties; the other terms and conditions
 * remain enforceable notwithstanding. In some jurisdictions it is
 * not permitted to limit liability and therefore such limitations
 * may not apply to you.
 *
 * @copyright 2012 Talldude Networks, LLC.
 */

// make sure we are not being called directly
defined('APP_DIR') or exit();

//------------------------------
// create
//------------------------------
function view_myPEZDatabase_create($_post, $_user, $_conf)
{
    // Must be logged in to create a new pezdatabase
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZDatabase');
    jrProfile_check_disk_usage();

    // Get language strings
    $_lang = jrUser_load_lang_strings();

    // Start our create form
    $_sr = array(
        "_profile_id = {$_user['user_active_profile_id']}",
    );
    $tmp = jrCore_page_banner_item_jumper('myPEZDatabase', 'pezdatabase_title', $_sr, 'create', 'update');
    jrCore_page_banner($_lang['myPEZDatabase'][2], $tmp);

    // Form init
    $_tmp = array(
        'submit_value' => 2,
        'cancel'       => jrCore_is_profile_referrer()
    );
    jrCore_form_create($_tmp);

    // ***  PEZDatabase Title ***
    $_tmp = array(
        'name'       => 'pezdatabase_title',
        'label'      => 3,
        'help'       => 4,
        'type'       => 'text',
        'validate'   => 'printable',
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Character ***
    $_tmp = array(
        'name'       => 'pezdatabase_character',
        'label'      => 'Character',
        'help'       => 'What is the name of this PEZ character?',
        'type'       => 'text',
        'validate'   => 'printable',
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

// TODO create category, series, sub-series chained select here.

    // *** PEZDatabase Issue ***
    $_issue_opt = array(
        0 => 'None',
        1 => 'A',
        2 => 'B',
        3 => 'C',
        4 => 'D',
        5 => 'E',
        6 => 'F',
        7 => 'G',
        7 => 'H'

    );

    $_tmp = array(
        'name'     => 'issue',
        'type'     => 'select',
        'options'  => $_issue_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Issue',
        'help'     => 'Select the issue for this Item.',
        'order'    => 3
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

// *** PEZDatabase Variation ***
$_tmp = array(
    'name'       => 'pezdatabase_variation',
    'label'      => 'Variation',
    'help'       => 'What is the Variation of this PEZ? (Red Head, Brown Eyes, Crystal Head...) ',
    'type'       => 'text',
    'validate'   => 'printable',
    'required'   => false,
    'onkeypress' => "if (event && event.keyCode == 13) return false;"
);
jrCore_form_field_create($_tmp);


// *** PEZDatabase Stem Info Header ***
$_tmp = array(
    'name'       => 'pezdatabase_steminfo',
    'label'      => 'Stem Info',
    'help'       => '',
    'type'       => 'text',
    'validate'   => 'printable',
    'required'   => false,
    'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
jrCore_form_field_create($_tmp);

// *** PEZDatabase IMC Country ***
$_imc_opt = array(
    0 => 'None',
    1 => '1 Austria/Hungary',
    2 => '2 Austria/Hong Kong',
    3 => '3 Austria/Hungary',
    4 => '4 Austria',
    5 => '5 Yugoslavia/Slovenia',
    6 => '6 Hong Kong/China',
    7 => '7 Czechoslovakia',
    8 => '8 Austria',
    9 => '9 United States',
    10 => 'V Yugoslavia'
    );

$_tmp = array(
    'name'     => 'pezdatabase_country',
    'type'     => 'select',
    'options'  => $_imc_opt,
    'validate' => 'printable',
    'required' => 'off',
    'default'  => 0,
    'label'    => 'IMC Country',
    'help'     => 'Select the IMC Country for this PEZ Item.',
    'order'    => 4
    );
jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Country List ***
    $_countrylist_opt = array(
        0 => 'None',
        1 => 'American',
        2 => 'Austria',
        3 => 'China',
        4 => 'chezech Republic',
        5 => 'Czechosolovakia',
        6 => 'Hong Kong',
        7 => 'Hungary',
        8 => 'Yugoslavia'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_countrylist',
        'type'     => 'select',
        'options'  => $_countrylist_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Country List',
        'help'     => 'Select the IMC Country for this PEZ Item.',
        'order'    => 5
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Patent ***
    $_patent_opt = array(
        0 => 'None',
        1 => '2,620,061',
        2 => '3,410,455',
        3 => '3,845,882',
        4 => '3,942,683',
        5 => '4,966,305',
        6 => '5,984,285',
        7 => '7,523,841'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_patent',
        'type'     => 'select',
        'options'  => $_patent_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Patent',
        'help'     => 'Select the Patent for this PEZ Item.',
        'order'    => 6
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Feet ***
    $_feet_opt = array(
        0 => 'None',
        1 => 'NF',
        2 => 'Thin Feet',
        3 => 'Thick Feet'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_feet',
        'type'     => 'select',
        'options'  => $_feet_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Feet',
        'help'     => 'Select the feet of this PEZ Item.',
        'order'    => 7
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);


    // *** PEZDatabase Stem Color ***
    $_color_opt = array(
        0 => 'None',
        1 => 'Aqua',
        2 => 'Beigh',
        3 => 'Black',
        4 => 'Blue',
        5 => 'Brown',
        6 => 'Fusha',
        7 => 'Glow-in-the-Dark',
        8 => 'Gold',
        9 => 'Grey',
        10 => 'Green',
        11=> 'Khaki',
        12 => 'Lavender',
        13 => 'Lime',
        14=> 'Multi',
        15 => 'Navy',
        16 => 'Neon Green',
        17=> 'Neon Orange',
        18 => 'Neon Pink',
        19 => 'Neon Red',
        20=> 'Neon Yellow',
        21 => 'Orange',
        22 => 'Pink',
        23=> 'Purple',
        24 => 'Red',
        25 => 'Royal Blue',
        26=> 'Silver',
        27 => 'Teal',
        28 => 'White and  Yellow'

    );

    $_tmp = array(
        'name'     => 'pezdatabase_stemcolor',
        'type'     => 'select',
        'options'  => $_color_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Stem Color',
        'help'     => 'Select the Stem Color of this PEZ Item.',
        'order'    => 9
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase description ***
    $_tmp = array(
        'name'       => 'pezdatabase_description',
        'label'      => 'description',
        'help'       => 'Enter a description for this database.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'order'    => 10,
        'required'   => false
    );
    jrCore_form_field_create($_tmp);


    // *** PEZDatabase Image ***
    $_tmp = array(
        'name'     => 'pezdatabase_image',
        'label'    => 'Image',
        'help'     => 'Select an image for this PEZ item.',
        'text'     => 'Upload A New  Image',
        'type'     => 'image',
        'order'    => 11,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // ***  PEZDatabase Packaging ***
    $_tmp = array(
        'name'       => 'pezdatabase_packaging',
        'label'      => 'Packaging',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 12,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

    // ***  PEZDatabase Made For ***
    $_tmp = array(
        'name'       => 'pezdatabase_madefor',
        'label'      => 'Made For',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 13,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

// TODO missing wrapper from create form
    // *** PEZDatabase Wrapper ***
    $_wrapper_opt = array(
        0 => 'None',
        1 => 'Plastic',
        2 => 'Cardboard'

    );

    $_tmp = array(
        'name'     => 'pezdatabase_wrapper',
        'type'     => 'select',
        'options'  => $_wrapper_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Wrapper',
        'order'    => 14,
        'help'     => 'Select the wrapper of this PEZ Item.',
        'required'   => False

    );
    jrCore_register_setting('myPEZDatabase', $_tmp);


// TODO missing candy from create form ?
    // *** PEZDatabase Candy ***
    $_candy_opt = array(
        0 => 'None',
        1 => 'Cola',
        2 => 'Peppermint Sugar-free',
        3 => 'Fizzy',
        4 => 'Lemon',
        5 => 'Orange',
        6 => 'Strawberry',
        7 => 'Cherry',
        8 => 'Mango',
        9 => 'Rasberry',
        10 => 'Sour Mix',
        11 => 'Liquorice'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_candy',
        'type'     => 'select',
        'options'  => $_candy_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Candy',
        'help'     => 'Select the candy for this PEZ Item.',
        'order'    => 15,
        'required'   => False

    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // ***  PEZDatabase Purchase Info ***
    $_tmp = array(
        'name'       => 'pezdatabase_purchaseinfo',
        'label'      => 'Purchase Info',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 16,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Publish Date ***
    $_tmp = array(
        'name'     => 'pezdatabase_date',
        'label'    => 'Date',
        'help'     => 'What is the publish date of this PEZ item?',
        'type'     => 'date',
        'validate' => 'date',
        'order'    => 17,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Price ***
    $_tmp = array(
        'name'     => 'pezdatabase_price',
        'label'    => 'Price',
        'help'     => 'What is the price of this PEZ item?',
        'type'     => 'text',
        'validate' => 'number_nz',
        'order'    => 18,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Location ***
    $_tmp = array(
        'name'       => 'pezdatabase_location',
        'label'      => 'Location',
        'help'       => 'What is the location of this PEZ item?',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'      => 19,
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

    // PEZ description
    $_tmp = array(
        'name'       => 'pezdatabase_notes',
        'label'      => 'Notes',
        'help'       => 'Enter any notes for this item.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'order'    => 20,
        'required'   => false
    );
    jrCore_form_field_create($_tmp);


    // This is where you would hook in to the form with php

    // Display page with form in it
    jrCore_page_display();

}

//------------------------------
// create_save
//------------------------------
function view_myPEZDatabase_create_save($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrCore_form_validate($_post);
    jrUser_check_quota_access('myPEZDatabase');

    // Get our posted data - the jrCore_form_get_save_data function will
    // return just those fields that were presented in the form.
    $_rt = jrCore_form_get_save_data('myPEZDatabase', 'create', $_post);

    // Add in our SEO URL names
    $_rt['pezdatabase_title_url'] = jrCore_url_string($_rt['pezdatabase_title']);

    // $xid will be the INSERT_ID (_item_id) of the created item
    $xid = jrCore_db_create_item('myPEZDatabase', $_rt);
    if (!$xid) {
        jrCore_set_form_notice('error', 5);
        jrCore_form_result();
    }

    // Save any uploaded media files added in by our
    jrCore_save_all_media_files('myPEZDatabase', 'create', $_user['user_active_profile_id'], $xid);

    // Add to Actions...
    jrCore_run_module_function('jrAction_save', 'create', 'myPEZDatabase', $xid);

    jrCore_form_delete_session();
    jrProfile_reset_cache();

    // redirect to the actual pezdatabase page, not the update page.
    jrCore_form_result("{$_conf['jrCore_base_url']}/{$_user['profile_url']}/{$_post['module_url']}/{$xid}/{$_rt['pezdatabase_title_url']}");
}

//------------------------------
// update
//------------------------------
function view_myPEZDatabase_update($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZDatabase');

    // We should get an id on the URL
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
    }
    $_rt = jrCore_db_get_item('myPEZDatabase', $_post['id']);
    if (!$_rt) {
        jrCore_notice_page('error', 7);
    }
    // Make sure the calling user has permission to edit this item
    if (!jrUser_can_edit_item($_rt)) {
        jrUser_not_authorized();
    }

    // Start output
    $_sr = array(
        "_profile_id = {$_user['user_active_profile_id']}",
    );
    $tmp = jrCore_page_banner_item_jumper('myPEZDatabase', 'pezdatabase_title', $_sr, 'create', 'update');
    jrCore_page_banner(8, $tmp);

    // Form init
    $_tmp = array(
        'submit_value' => 9,
        'cancel'       => jrCore_is_profile_referrer(),
        'values'       => $_rt
    );
    jrCore_form_create($_tmp);

    // id
    $_tmp = array(
        'name'     => 'id',
        'type'     => 'hidden',
        'value'    => $_post['id'],
        'validate' => 'number_nz'
    );
    jrCore_form_field_create($_tmp);

    // PEZDatabase Title
    $_tmp = array(
        'name'     => 'pezdatabase_title',
        'label'    => 3,
        'help'     => 4,
        'type'     => 'text',
        'validate' => 'printable',
        'required' => true
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Character ***
    $_tmp = array(
        'name'       => 'pezdatabase_character',
        'label'      => 'Character',
        'help'       => 'What is the name of this PEZ character?',
        'type'       => 'text',
        'validate'   => 'printable',
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

// TODO create category, series, sub-series chained select here.

    // *** PEZDatabase Issue ***
    $_issue_opt = array(
        0 => 'None',
        1 => 'A',
        2 => 'B',
        3 => 'C',
        4 => 'D',
        5 => 'E',
        6 => 'F',
        7 => 'G',
        7 => 'H'

    );

    $_tmp = array(
        'name'     => 'issue',
        'type'     => 'select',
        'options'  => $_issue_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Issue',
        'help'     => 'Select the issue for this Item.',
        'order'    => 3
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

// *** PEZDatabase Variation ***
    $_tmp = array(
        'name'       => 'pezdatabase_variation',
        'label'      => 'Variation',
        'help'       => 'What is the Variation of this PEZ? (Red Head, Brown Eyes, Crystal Head...) ',
        'type'       => 'text',
        'validate'   => 'printable',
        'required'   => false,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);


// *** PEZDatabase Stem Info Header ***
    $_tmp = array(
        'name'       => 'pezdatabase_steminfo',
        'label'      => 'Stem Info',
        'help'       => '',
        'type'       => 'text',
        'validate'   => 'printable',
        'required'   => false,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

// *** PEZDatabase IMC Country ***
    $_imc_opt = array(
        0 => 'None',
        1 => '1 Austria/Hungary',
        2 => '2 Austria/Hong Kong',
        3 => '3 Austria/Hungary',
        4 => '4 Austria',
        5 => '5 Yugoslavia/Slovenia',
        6 => '6 Hong Kong/China',
        7 => '7 Czechoslovakia',
        8 => '8 Austria',
        9 => '9 United States',
        10 => 'V Yugoslavia'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_country',
        'type'     => 'select',
        'options'  => $_imc_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'IMC Country',
        'help'     => 'Select the IMC Country for this PEZ Item.',
        'order'    => 4
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Country List ***
    $_countrylist_opt = array(
        0 => 'None',
        1 => 'American',
        2 => 'Austria',
        3 => 'China',
        4 => 'chezech Republic',
        5 => 'Czechosolovakia',
        6 => 'Hong Kong',
        7 => 'Hungary',
        8 => 'Yugoslavia'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_countrylist',
        'type'     => 'select',
        'options'  => $_countrylist_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Country List',
        'help'     => 'Select the IMC Country for this PEZ Item.',
        'order'    => 5
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Patent ***
    $_patent_opt = array(
        0 => 'None',
        1 => '2,620,061',
        2 => '3,410,455',
        3 => '3,845,882',
        4 => '3,942,683',
        5 => '4,966,305',
        6 => '5,984,285',
        7 => '7,523,841'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_patent',
        'type'     => 'select',
        'options'  => $_patent_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Patent',
        'help'     => 'Select the Patent for this PEZ Item.',
        'order'    => 6
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase Feet ***
    $_feet_opt = array(
        0 => 'None',
        1 => 'NF',
        2 => 'Thin Feet',
        3 => 'Thick Feet'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_feet',
        'type'     => 'select',
        'options'  => $_feet_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Feet',
        'help'     => 'Select the feet of this PEZ Item.',
        'order'    => 7
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);


    // *** PEZDatabase Stem Color ***
    $_color_opt = array(
        0 => 'None',
        1 => 'Aqua',
        2 => 'Beigh',
        3 => 'Black',
        4 => 'Blue',
        5 => 'Brown',
        6 => 'Fusha',
        7 => 'Glow-in-the-Dark',
        8 => 'Gold',
        9 => 'Grey',
        10 => 'Green',
        11=> 'Khaki',
        12 => 'Lavender',
        13 => 'Lime',
        14=> 'Multi',
        15 => 'Navy',
        16 => 'Neon Green',
        17=> 'Neon Orange',
        18 => 'Neon Pink',
        19 => 'Neon Red',
        20=> 'Neon Yellow',
        21 => 'Orange',
        22 => 'Pink',
        23=> 'Purple',
        24 => 'Red',
        25 => 'Royal Blue',
        26=> 'Silver',
        27 => 'Teal',
        28 => 'White and  Yellow'

    );

    $_tmp = array(
        'name'     => 'pezdatabase_stemcolor',
        'type'     => 'select',
        'options'  => $_color_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Stem Color',
        'help'     => 'Select the Stem Color of this PEZ Item.',
        'order'    => 9
    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // *** PEZDatabase description ***
    $_tmp = array(
        'name'       => 'pezdatabase_description',
        'label'      => 'description',
        'help'       => 'Enter a description for this database.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'order'    => 10,
        'required'   => false
    );
    jrCore_form_field_create($_tmp);


    // *** PEZDatabase Image ***
    $_tmp = array(
        'name'     => 'pezdatabase_image',
        'label'    => 'Image',
        'help'     => 'Select an image for this PEZ item.',
        'text'     => 'Upload A New  Image',
        'type'     => 'image',
        'order'    => 11,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // ***  PEZDatabase Packaging ***
    $_tmp = array(
        'name'       => 'pezdatabase_packaging',
        'label'      => 'Packaging',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 12,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

    // ***  PEZDatabase Made For ***
    $_tmp = array(
        'name'       => 'pezdatabase_madefor',
        'label'      => 'Made For',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 13,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

// TODO missing wrapper from create form
    // *** PEZDatabase Wrapper ***
    $_wrapper_opt = array(
        0 => 'None',
        1 => 'Plastic',
        2 => 'Cardboard'

    );

    $_tmp = array(
        'name'     => 'pezdatabase_wrapper',
        'type'     => 'select',
        'options'  => $_wrapper_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Wrapper',
        'order'    => 14,
        'help'     => 'Select the wrapper of this PEZ Item.',
        'required'   => False

    );
    jrCore_register_setting('myPEZDatabase', $_tmp);


// TODO missing candy from create form ?
    // *** PEZDatabase Candy ***
    $_candy_opt = array(
        0 => 'None',
        1 => 'Cola',
        2 => 'Peppermint Sugar-free',
        3 => 'Fizzy',
        4 => 'Lemon',
        5 => 'Orange',
        6 => 'Strawberry',
        7 => 'Cherry',
        8 => 'Mango',
        9 => 'Rasberry',
        10 => 'Sour Mix',
        11 => 'Liquorice'
    );

    $_tmp = array(
        'name'     => 'pezdatabase_candy',
        'type'     => 'select',
        'options'  => $_candy_opt,
        'validate' => 'printable',
        'required' => 'off',
        'default'  => 0,
        'label'    => 'Candy',
        'help'     => 'Select the candy for this PEZ Item.',
        'order'    => 15,
        'required'   => False

    );
    jrCore_register_setting('myPEZDatabase', $_tmp);

    // ***  PEZDatabase Purchase Info ***
    $_tmp = array(
        'name'       => 'pezdatabase_purchaseinfo',
        'label'      => 'Purchase Info',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'    => 16,
        'required'   => False
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Publish Date ***
    $_tmp = array(
        'name'     => 'pezdatabase_date',
        'label'    => 'Date',
        'help'     => 'What is the publish date of this PEZ item?',
        'type'     => 'date',
        'validate' => 'date',
        'order'    => 17,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Price ***
    $_tmp = array(
        'name'     => 'pezdatabase_price',
        'label'    => 'Price',
        'help'     => 'What is the price of this PEZ item?',
        'type'     => 'text',
        'validate' => 'number_nz',
        'order'    => 18,
        'required' => false
    );
    jrCore_form_field_create($_tmp);

    // *** PEZDatabase Location ***
    $_tmp = array(
        'name'       => 'pezdatabase_location',
        'label'      => 'Location',
        'help'       => 'What is the location of this PEZ item?',
        'type'       => 'text',
        'validate'   => 'printable',
        'order'      => 19,
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

    // PEZ description
    $_tmp = array(
        'name'       => 'pezdatabase_notes',
        'label'      => 'Notes',
        'help'       => 'Enter any notes for this item.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'order'    => 20,
        'required'   => false
    );
    jrCore_form_field_create($_tmp);

    // Display page with form in it
    jrCore_page_display();
}

//------------------------------
// update_save
//------------------------------
function view_myPEZDatabase_update_save($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();

    // Validate all incoming posted data
    jrCore_form_validate($_post);
    jrUser_check_quota_access('myPEZDatabase');

    // Make sure we get a good _item_id
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
        jrCore_form_result('referrer');
    }

    // Get data
    $_rt = jrCore_db_get_item('myPEZDatabase', $_post['id']);
    if (!isset($_rt) || !is_array($_rt)) {
        // Item does not exist....
        jrCore_notice_page('error', 7);
        jrCore_form_result('referrer');
    }

    // Make sure the calling user has permission to edit this item
    if (!jrUser_can_edit_item($_rt)) {
        jrUser_not_authorized();
    }

    // Get our posted data - the jrCore_form_get_save_data function will
    // return just those fields that were presented in the form.
    $_sv = jrCore_form_get_save_data('myPEZDatabase', 'update', $_post);

    // Add in our SEO URL names
    $_sv['pezdatabase_title_url'] = jrCore_url_string($_sv['pezdatabase_title']);

    // Save all updated fields to the Data Store
    jrCore_db_update_item('myPEZDatabase', $_post['id'], $_sv);

    // Save any uploaded media file
    jrCore_save_all_media_files('myPEZDatabase', 'update', $_user['user_active_profile_id'], $_post['id']);

    // Add to Actions...
    jrCore_run_module_function('jrAction_save', 'update', 'myPEZDatabase', $_post['id']);

    jrCore_form_delete_session();
    jrProfile_reset_cache();
    jrCore_form_result("{$_conf['jrCore_base_url']}/{$_user['profile_url']}/{$_post['module_url']}/{$_post['id']}/{$_sv['pezdatabase_title_url']}");
}

//------------------------------
// delete
//------------------------------
function view_myPEZDatabase_delete($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZDatabase');

    // Make sure we get a good id
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
        jrCore_form_result('referrer');
    }
    $_rt = jrCore_db_get_item('myPEZDatabase', $_post['id']);

    // Make sure the calling user has permission to delete this item
    if (!jrUser_can_edit_item($_rt)) {
        jrUser_not_authorized();
    }
    // Delete item and any associated files
    jrCore_db_delete_item('myPEZDatabase', $_post['id']);
    jrProfile_reset_cache();
    jrCore_form_result('delete_referrer');
}

//------------------------------
// uploadODS
//------------------------------
function view_myPEZDatabase_uploadODS($_data, $_user, $_conf, $_args, $event)
{
    // Must be logged in to uploadODS
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZDatabase');
    jrProfile_check_disk_usage();

    // Get language strings
    $_lang = jrUser_load_lang_strings();

    // Start our upload form
    jrCore_page_banner('Upload ODS');

    // Form init
    $_tmp = array(
        'submit_value' => 'submit',
        'cancel'       => jrCore_is_profile_referrer()
    );
    jrCore_form_create($_tmp);

    // PEZDatabase Title
    $_tmp = array(
        'name'       => "new_ODS",
        'type'       => 'file',
        'label'      => 'ODS File',
        'help'       => 'Upload an ODS file to the database',
        'text'       => 'Select ODS to Upload',
        'extensions' => 'ods',
        'multiple'   => false,
        'required'   => true,

    );
    jrCore_form_field_create($_tmp);

    // Display page with form in it
    jrCore_page_display();

}

//------------------------------
// save ODS
//------------------------------
function view_myPEZDatabase_uploadODS_save($_post, $_user, $_conf)
{

    // Must be logged in
    jrUser_session_require_login();

    // include PHPExcel to read excel files
    include(APP_DIR . "/modules/myPEZDatabase/contrib/PHPExcel.php");

    // Validate all incoming posted data
    jrCore_form_validate($_post);
    jrUser_check_quota_access('myPEZDatabase');

    // save files here
    $ods_file = jrCore_get_uploaded_media_files('myPEZDatabase', 'new_ODS');
    if (!is_file($ods_file[0])) {
        // thow an error here, there is no file.
        jrCore_set_form_notice('error', "No file uploaded - please try again ");
        jrCore_form_result();
    }

    // get the file name of the uploaded file and initialize the reader
    $inputFile     = $ods_file[0];
    $inputFileType = PHPExcel_IOFactory::identify($inputFile);
    $objReader     = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel   = $objReader->load($inputFile);

    // Get worksheet dimensions
    $sheet         = $objPHPExcel->getSheet(0);
    $highestRow    = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();

    // Loop through each row of the worksheet in turn
    $_sv = array();
    for ($row = 2; $row <= $highestRow; $row++) {
        //  Read a row of data into an array
        $rowDataArray = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, true, false);
        $rowData      = $rowDataArray[0]; // this will contain the data of all the cells of the row in array format
        $_sv[]        = array(
            'pezdatabase_title'       => jrCore_db_escape($rowData[3]),
            'pezdatabase_series_0'    => jrCore_db_escape($rowData[0]),
            'pezdatabase_series_1'    => jrCore_db_escape($rowData[1]),
            'pezdatabase_series_2'    => jrCore_db_escape($rowData[2]),
            'pezdatabase_character'   => jrCore_db_escape($rowData[3]),
            'pezdatabase_issue'       => jrCore_db_escape($rowData[4]),
            'pezdatabase_variation'   => jrCore_db_escape($rowData[5]),
            'pezdatabase_description' => jrCore_db_escape($rowData[6]),
            'pezdatabase_production'  => jrCore_db_escape($rowData[7]),
            'pezdatabase_country'     => jrCore_db_escape($rowData[8]),
            'pezdatabase_copyright'   => jrCore_db_escape($rowData[9]),
            'pezdatabase_stemspecial' => jrCore_db_escape($rowData[10]),
            'pezdatabase_stemcolor'   => jrCore_db_escape($rowData[11]),
            'pezdatabase_patent'      => jrCore_db_escape($rowData[12]),
            'pezdatabase_feet'        => jrCore_db_escape($rowData[13]),
            'pezdatabase_madefor'     => jrCore_db_escape($rowData[14]),
            'pezdatabase_wrapper'     => jrCore_db_escape($rowData[15]),

        );
    }
    // key => value structure

    jrCore_db_create_multiple_items('myPEZDatabase', $_sv);

    jrCore_form_delete_session();
    jrProfile_reset_cache();
    jrCore_form_result("{$_conf['jrCore_base_url']}/{$_user['profile_url']}/{$_post['module_url']}");
}


