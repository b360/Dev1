<?php
/**
 * Jamroom mycollectioncaddie skin
 *
 * copyright 2017 The Jamroom Network
 *
 * This Jamroom file is LICENSED SOFTWARE, and cannot be redistributed.
 *
 * This Source Code is subject to the terms of the Jamroom Network
 * Commercial License -  please see the included "license.html" file.
 *
 * This module may include works that are not developed by
 * The Jamroom Network
 * and are used under license - any licenses are included and
 * can be found in the "contrib" directory within this skin.
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
 * Jamroom 5 mycollectioncaddie skin
 *
 * copyright 2003 - 2016
 * by n8Flex
 *
 * This Jamroom file is LICENSED SOFTWARE, and cannot be redistributed.
 *
 * This Source Code is subject to the terms of the Jamroom Network
 * Commercial License -  please see the included "license.html" file.
 *
 * This module may include works that are not developed by
 * n8Flex
 * and are used under license - any licenses are included and
 * can be found in the "contrib" directory within this skin.
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
 * Jamroom 5 mycollectioncaddie skin
 *
 * copyright 2003 - 2015
 * by michael
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0.  Please see the included "license.html" file.
 *
 * This module may include works that are not developed by
 * michael
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
 * Jamroom 5 Elastic skin
 * @copyright 2003 - 2014 by The Jamroom Network - All Rights Reserved
 * @author Brian Johnson - brian@jamroom.net
 */

// We are never called directly
if (!defined('APP_DIR')) {
    exit;
}

/**
 * mycollectioncaddie_meta
 */
function mycollectioncaddie_skin_meta()
{
    $_tmp = array(
        'name'        => 'mycollectioncaddie',
        'title'       => 'collectioncaddie',
        'version'     => '2.0.0',
        'developer'   => 'Developer  Networks, &copy;' . strftime('%Y'),
        'description' => 'A Skin made for collectioncaddie.com',
        'license'     => 'jcl',
        'category'    => 'eCommerce'
    );
    return $_tmp;
}

/**
 * mycollectioncaddie_init
 * unlike with a module, init() is NOT called on each page load, but is
 * called when the core needs to rebuild CSS or Javascript for the skin
 */
function mycollectioncaddie_skin_init()
{
    // Bring in all our CSS files
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'acp.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'base.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'footer.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'grid.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'header.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'html.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'image.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'core_slidebar.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'list.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'menu.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'profile.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'skin.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'player.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'override_tablet.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'override_mobile.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'animations.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'animations-ie-fix.css');
    jrCore_register_module_feature('jrCore', 'css', 'mycollectioncaddie', 'custom.css');

    // Register our Javascript files with the core
    jrCore_register_module_feature('jrCore', 'javascript', 'mycollectioncaddie', 'jquery.scrollTo.min.js');
    jrCore_register_module_feature('jrCore', 'javascript', 'mycollectioncaddie', 'jquery.sticky.js');
    jrCore_register_module_feature('jrCore', 'javascript', 'mycollectioncaddie', 'mycollectioncaddie.js');
    jrCore_register_module_feature('jrCore', 'javascript', 'mycollectioncaddie', APP_DIR . '/skins/mycollectioncaddie/contrib/slidebars/slidebars.min.js');

    // Tell the core the default icon set to use (black or white)
    jrCore_register_module_feature('jrCore', 'icon_color', 'mycollectioncaddie', 'white');
    // Tell the core the size of our action buttons (width in pixels, up to 64)
    jrCore_register_module_feature('jrCore', 'icon_size', 'mycollectioncaddie', 30);

    // available players
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_video_player', 'video');
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_audio_player', 'audio');
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_playlist_player', 'audio');
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_video_action_player', 'video');
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_audio_action_player', 'audio');
    jrCore_register_module_feature('jrCore', 'media_player', 'mycollectioncaddie', 'n8Player_playlist_action_player', 'audio');

    // default players
    jrCore_register_module_feature('jrCore', 'media_player_skin', 'mycollectioncaddie', 'jrAudio', 'n8Player_audio_player');
    jrCore_register_module_feature('jrCore', 'media_player_skin', 'mycollectioncaddie', 'jrVideo', 'n8Player_video_player');
    jrCore_register_module_feature('jrCore', 'media_player_skin', 'mycollectioncaddie', 'jrPlaylist', 'n8Player_playlist_player');

    jrCore_register_event_listener('jrCore', 'form_display', 'mycollectioncaddie_insert_field');

    return true;
}

function smarty_function_mycollectioncaddie_cat_title($params, &$smarty)
{
    $_sc = array(
        'search'         => array(
            "product_category_url = {$params['cat']}"
        ),
        'return_keys'    => array('product_category'),
        'skip_triggers'  => true,
        'ignore_pending' => true,
        'privacy_check'  => false,
        'limit'          => 1
    );
    $_rt = jrCore_db_search_items('jrStore', $_sc);

    return $_rt['_items'][0]['product_category'];
}



function smarty_function_mycollectioncaddie_sort($params, &$smarty)
{
    return jrCore_parse_template($params['template'], $params, 'mycollectioncaddie');
}

function smarty_function_mycollectioncaddie_icon($params, $smarty)
{
    return jrCore_parse_template('icon.tpl', $params, 'mycollectioncaddie');
}

/**
 * @param $params
 * @param $smarty
 * @return string
 */
function smarty_function_mycollectioncaddie_breadcrumbs($params, $smarty)
{
    return jrCore_parse_template('breadcrumbs.tpl', $params, 'mycollectioncaddie');
}

/**
 * @param $_args
 * @param $smarty
 * @return int
 */
function smarty_function_mycollectioncaddie_followers($_args, $smarty)
{
    return $_data['followers'] = (int) jrCore_db_run_key_function('jrFollower', 'follow_profile_id', $_args['profile_id'], 'count');
}

/**
 * "Feedback" buttons under timeline entries
 * @param $params array
 * @param $smarty object
 * @return bool|string
 */
function smarty_function_mycollectioncaddie_feedback_buttons($params, $smarty)
{
    if (!isset($params['module'])) {
        return jrCore_smarty_missing_error('module');
    }
    if (!isset($params['item'])) {
        return jrCore_smarty_missing_error('item');
    }
    if (!is_array($params['item'])) {
        return jrCore_smarty_invalid_error('item');
    }

    $show = false;
    if (jrCore_module_is_active('jrLike')) {
        $show = true;
    }
    if (jrCore_module_is_active('jrComment')) {
        $show = true;
    }
    if (jrCore_module_is_active('jrTags')) {
        $show = true;
    }
    if (jrCore_module_is_active('jrShareThis')) {
        $show = true;
    }
    if (jrCore_module_is_active('jrAction')) {
        $show = true;
    }
    if ($show) {
        $prefix                  = jrCore_db_get_prefix($params['module']);
        $params['comment_count'] = 0;
        if (isset($params['item']["{$prefix}_comment_count"])) {
            $params['comment_count'] = $params['item']["{$prefix}_comment_count"];
        }
        $params['rating_count'] = 0;
        if (isset($params['item']["{$prefix}_rating_overall_count"])) {
            $params['rating_count'] = $params['item']["{$prefix}_rating_overall_count"];
        }
        $params['tag_count'] = 0;
        if (isset($params['item']["{$prefix}_tag_count"])) {
            $params['tag_count'] = $params['item']["{$prefix}_tag_count"];
        }
        return jrCore_parse_template('feedback.tpl', $params, 'mycollectioncaddie');
    }
    return false;
}

/**
 * Formats variables from a list item into
 * variables the index templates can understand
 *
 * @params array current ranking item passed
 * @item current list item
 * @module current list module
 */
function smarty_function_mycollectioncaddie_process_item($params, &$smarty) {

    global $_conf;

    // get our item array
    $item = $params['item'];

    // get or module
    $module = $params['module'];

    // get our module url
    $murl = jrCore_get_module_url($params['module']);

    // get our prefix
    $prefix = jrCore_db_get_prefix($module);

    // lang
    $_ln = jrUser_load_lang_strings();

    // set up our return
    $res = array(
        'module'        => $module,
        'murl'          => $murl,
        '_item_id'      => $item["_item_id"],
        'title'         => $item["{$prefix}_title"],
        'title_url'     => $item["{$prefix}_title_url"],
        'prefix'        => $prefix,
        'album'         => $item["{$prefix}_album"],
        'category'      => strlen($item["{$prefix}_category"]) > 0 ? $item["{$prefix}_category"] : $item["{$prefix}_genre"],
        'image_type'    => "{$prefix}_image",
        'text'          => strlen($item["{$prefix}_text"]) > 0 ? strip_tags($item["{$prefix}_text"]) : strip_tags($item["{$prefix}_description"]),
        'url'           => $_conf['jrCore_base_url'] .'/' . $item['profile_url'] . '/' . $murl . '/' . $item['_item_id'] . '/' . $item["{$prefix}_title_url"],
        'price'         => $item["{$prefix}_file_item_price"],
        'read_more'     => $_ln['mycollectioncaddie'][71]
    );

    switch($module) {
        case 'jrVideo':
            $res['read_more'] = $_ln['mycollectioncaddie'][73];
            break;
    }

    if ( $module == 'jrProfile') {
        $res['_item_id'] = $item['_profile_id'];
        $res['title'] = $item['profile_name'];
        $res['title_url'] = $item['profile_url'];
        $res['text'] = $item['profile_bio'];
        $res['url'] = $_conf['jrCore_base_url'] . '/' . $item["profile_url"];
    }

    // return our new item
    if (!empty($params['assign'])) {
        $smarty->assign($params['assign'], $res);
        return '';
    }

    return $res;

}

/**
 * @param $params
 * @param $smarty
 * @return string
 */
function smarty_function_mycollectioncaddie_clear_notifications($params, $smarty)
{
    return jrCore_parse_template('notifications_reset.tpl', $params, 'mycollectioncaddie');
}

/**
 * @param $params
 * @param $smarty
 * @return array|string
 */
function smarty_function_mycollectioncaddie_stats($params, $smarty)
{
    // Enabled?
    if (!jrCore_module_is_active('jrAction')) {
        return '';
    }

    $out = array();
    if (jrCore_checktype($params['profile_id'], 'number_nz')) {
        $out['actions'] = (int) jrCore_db_run_key_function('jrAction', '_profile_id', $params['profile_id'], 'count');
    }

    // Trigger our action_stats event  (jrFollowers adds in 'following' and 'followers')
    $out = jrCore_trigger_event('jrAction', 'action_stats', $out, $params);

    if (!empty($params['assign'])) {
        $smarty->assign($params['assign'], $out);
        return '';
    }
    return $out;
}

/**
 * @param $_data
 * @return mixed
 */
function mycollectioncaddie_insert_field($_data)
{
    // Is this the jrProfile/settings form?
    if (isset($_data['form_view']) &&
        ($_data['form_view'] == 'jrAudio/create' || $_data['form_view'] == 'jrAudio/update' ||
            $_data['form_view'] == 'jrAudio/create_album' || $_data['form_view'] == 'jrAudio/update_album')
    ) {

        if (!isset($_data['audio_text'])) {
            $_tmp = array(
                'name'          => 'audio_text',
                'label'         => 'Audio Text',
                'help'          => 'Enter a description for this audio file',
                'type'          => 'editor',
                'default'       => '',
                'validate'      => 'allowed_html',
                'form_designer' => true
            );
            jrCore_form_field_create($_tmp);
        }

        if (!isset($_data['audio_lyrics'])) {
            $_tmp = array(
                'name'          => 'audio_lyrics',
                'label'         => 'Audio Lyrics',
                'help'          => 'Enter the lyrics for this audio song',
                'type'          => 'editor',
                'default'       => '',
                'validate'      => 'allowed_html',
                'form_designer' => true
            );
            jrCore_form_field_create($_tmp);
        }

    }

    if (isset($_data['form_view']) &&
        ($_data['form_view'] == 'jrVideo/create' || $_data['form_view'] == 'jrVideo/update' ||
            $_data['form_view'] == 'jrVideo/create_album' || $_data['form_view'] == 'jrVideo/update_album')
    ) {

        if (!isset($_data['video_text'])) {
            $_tmp = array(
                'name'          => 'video_text',
                'label'         => 'Video Text',
                'help'          => 'Enter a description of this video',
                'type'          => 'editor',
                'default'       => '',
                'validate'      => 'allowed_html',
                'form_designer' => true
            );
            jrCore_form_field_create($_tmp);
        }

        if (!isset($_data['video_category'])) {
            $_tmp = array(
                'name'          => 'video_category',
                'label'         => 'Video Category',
                'help'          => 'Enter a category for this video',
                'type'          => 'select_and_text',
                'validate'      => 'printable',
                'form_designer' => true
            );
            jrCore_form_field_create($_tmp);
        }
    }

    if (isset($_data['form_view']) && $_data['form_view'] == 'jrProfile/settings') {

        $_tmp = array(
            'name'          => 'profile_header_image',
            'type'          => 'image',
            'label'         => 'Cover Image',
            'help'          => 'Enter the home location for this profile',
            'form_designer' => true
        );
        jrCore_form_field_create($_tmp);

        $_tmp = array(
            'name'          => 'profile_website',
            'type'          => 'text',
            'label'         => 'Website',
            'sublabel'      => 'must include http://',
            'help'          => 'Enter the home website for this profile',
            'form_designer' => true
        );
        jrCore_form_field_create($_tmp);

        $_tmp = array(
            'name'          => 'profile_location',
            'type'          => 'text',
            'label'         => 'Location',
            'sublabel'      => 'City, State',
            'help'          => 'Enter the home location for this profile',
            'form_designer' => true
        );
        jrCore_form_field_create($_tmp);
    }

    return $_data;
}
