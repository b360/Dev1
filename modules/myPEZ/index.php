<?php
/**
 * Jamroom 5 PEZ module
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
function view_myPEZ_create($_post, $_user, $_conf)
{
    // Must be logged in to create a new pez
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZ');
    jrProfile_check_disk_usage();

    $_pez = jrCore_db_get_item('myPEZDatabase', $_post['_1']);

    // Get language strings
    $_lang = jrUser_load_lang_strings();

    // Start our create form
    $_sr = array(
        "_profile_id = {$_user['user_active_profile_id']}",
    );
    $tmp = jrCore_page_banner_item_jumper('myPEZ', 'pez_title', $_sr, 'create', 'update');
    jrCore_page_banner($_lang['myPEZ'][2], $tmp);

    // Form init
    $_tmp = array(
        'submit_value' => 2,
        'cancel'       => jrCore_is_profile_referrer()
    );
    jrCore_form_create($_tmp);

    // THIS FORM JUST NEEDS EXPANDING OUT TO SAVE WHATEVER DATA YOU WANT FROM THE PEZ DATABASE TO THE PEZ USERS FORM.

    // PEZ Title
    $_tmp = array(
        'name'       => 'pez_title',
        'label'      => 3,
        'help'       => 4,
        'type'       => 'text',
        'validate'   => 'printable',
        'default'    => $_pez['pezdatabase_title'],
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

    // PEZ description
    $_tmp = array(
        'name'       => 'pez_description',
        'label'      => 'description',
        'help'       => 'Enter a description for this database.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'required'   => true,
        'onkeypress' => "if (event && event.keyCode == 13) return false;"
    );
    jrCore_form_field_create($_tmp);

    // Display page with form in it
    jrCore_form_delete_session();
    jrCore_page_display();
}

//------------------------------
// create_save
//------------------------------
function view_myPEZ_create_save($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrCore_form_validate($_post);
    jrUser_check_quota_access('myPEZ');

    // Get our posted data - the jrCore_form_get_save_data function will
    // return just those fields that were presented in the form.
    $_rt = jrCore_form_get_save_data('myPEZ', 'create', $_post);

    // Add in our SEO URL names
    $_rt['pez_title_url'] = jrCore_url_string($_rt['pez_title']);

    // $xid will be the INSERT_ID (_item_id) of the created item
    $xid = jrCore_db_create_item('myPEZ', $_rt);
    if (!$xid) {
        jrCore_set_form_notice('error', 5);
        jrCore_form_result();
    }

    // Save any uploaded media files added in by our
    jrCore_save_all_media_files('myPEZ', 'create', $_user['user_active_profile_id'], $xid);

    // Add to Actions...
    jrCore_run_module_function('jrAction_save', 'create', 'myPEZ', $xid);

    jrCore_form_delete_session();
    jrProfile_reset_cache();

    // redirect to the actual pez page, not the update page.
    jrCore_form_result("{$_conf['jrCore_base_url']}/{$_user['profile_url']}/{$_post['module_url']}/{$xid}/{$_rt['pez_title_url']}");
}

//------------------------------
// update
//------------------------------
function view_myPEZ_update($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZ');

    // We should get an id on the URL
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
    }
    $_rt = jrCore_db_get_item('myPEZ', $_post['id']);
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
    $tmp = jrCore_page_banner_item_jumper('myPEZ', 'pez_title', $_sr, 'create', 'update');
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

    // PEZ Title
    $_tmp = array(
        'name'     => 'pez_title',
        'label'    => 3,
        'help'     => 4,
        'type'     => 'text',
        'validate' => 'printable',
        'required' => true
    );
    jrCore_form_field_create($_tmp);

    // PEZ description
    $_tmp = array(
        'name'       => 'pez_description',
        'label'      => 'description',
        'help'       => 'Enter a description for this database.',
        'type'       => 'textarea',
        'validate'   => 'printable',
        'required'   => true
    );
    jrCore_form_field_create($_tmp);

    // Display page with form in it
    jrCore_page_display();
}

//------------------------------
// update_save
//------------------------------
function view_myPEZ_update_save($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();

    // Validate all incoming posted data
    jrCore_form_validate($_post);
    jrUser_check_quota_access('myPEZ');

    // Make sure we get a good _item_id
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
        jrCore_form_result('referrer');
    }

    // Get data
    $_rt = jrCore_db_get_item('myPEZ', $_post['id']);
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
    $_sv = jrCore_form_get_save_data('myPEZ', 'update', $_post);

    // Add in our SEO URL names
    $_sv['pez_title_url'] = jrCore_url_string($_sv['pez_title']);

    // Save all updated fields to the Data Store
    jrCore_db_update_item('myPEZ', $_post['id'], $_sv);

    // Save any uploaded media file
    jrCore_save_all_media_files('myPEZ', 'update', $_user['user_active_profile_id'], $_post['id']);

    // Add to Actions...
    jrCore_run_module_function('jrAction_save', 'update', 'myPEZ', $_post['id']);

    jrCore_form_delete_session();
    jrProfile_reset_cache();
    jrCore_form_result("{$_conf['jrCore_base_url']}/{$_user['profile_url']}/{$_post['module_url']}/{$_post['id']}/{$_sv['pez_title_url']}");
}

//------------------------------
// delete
//------------------------------
function view_myPEZ_delete($_post, $_user, $_conf)
{
    // Must be logged in
    jrUser_session_require_login();
    jrUser_check_quota_access('myPEZ');

    // Make sure we get a good id
    if (!isset($_post['id']) || !jrCore_checktype($_post['id'], 'number_nz')) {
        jrCore_notice_page('error', 6);
        jrCore_form_result('referrer');
    }
    $_rt = jrCore_db_get_item('myPEZ', $_post['id']);

    // Make sure the calling user has permission to delete this item
    if (!jrUser_can_edit_item($_rt)) {
        jrUser_not_authorized();
    }
    // Delete item and any associated files
    jrCore_db_delete_item('myPEZ', $_post['id']);
    jrProfile_reset_cache();
    jrCore_form_result('delete_referrer');
}
