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
$lang['menu'] =  'pezdatabase';
$lang['1'] =  'PEZ Databases';
$lang['2'] =  'Create New PEZ Database';
$lang['3'] =  'title';
$lang['4'] =  'Enter a title for this PEZ Item';
$lang['5'] =  'An error was encountered creating the PEZ database - please try again.';
$lang['6'] =  'Invalid id - please pass in a valid PEZ database id.';
$lang['7'] =  'The PEZ database entry was not found in the datastore - please try again.';
$lang['8'] =  'update PEZ database';
$lang['9'] =  'update';
$lang['10'] =  'PEZ Database';
$lang['11'] =  'Posted a new Pez database';
$lang['12'] =  'Upload a CSV to Database';
$lang['10004'] =  'category';
$lang['10005'] =  '';
$lang['10006'] =  'Select a Category for this item';
$lang['10007'] =  'category';
$lang['10008'] =  '';
$lang['10009'] =  'Select the category for this item';
$lang['10010'] =  'pezdatabase_series label *change this*';
$lang['10011'] =  '';
$lang['10012'] =  'pezdatabase_series help *change this*';
$lang['10013'] =  'sample image';
$lang['10014'] =  '';
$lang['10015'] =  'Please upload an image for this item.';
$lang['10016'] =  'pezdatabase_image label *change this*';
$lang['10017'] =  '';
$lang['10018'] =  'pezdatabase_image help *change this*';
$lang['10019'] =  'character';
$lang['10020'] =  '';
$lang['10021'] =  'please input the caracter for this item.';
$lang['10022'] =  'pezdatabase_characer label *change this*';
$lang['10023'] =  '';
$lang['10024'] =  'pezdatabase_characer help *change this*';
$lang['10025'] =  'issue';
$lang['10026'] =  '';
$lang['10027'] =  'Select the issue for this Item';
$lang['10028'] =  'pezdatabase_issue label *change this*';
$lang['10029'] =  '';
$lang['10030'] =  'pezdatabase_issue help *change this*';
$lang['10031'] =  'variation';
$lang['10032'] =  '';
$lang['10033'] =  'Seclect the Varations';
$lang['10034'] =  'pezdatabase_variation label *change this*';
$lang['10035'] =  '';
$lang['10036'] =  'pezdatabase_variation help *change this*';
$lang['10037'] =  'country';
$lang['10038'] =  '';
$lang['10039'] =  'Select the country';
$lang['10040'] =  'pezdatabase_country label *change this*';
$lang['10041'] =  '';
$lang['10042'] =  'pezdatabase_country help *change this*';
$lang['10043'] =  'country list';
$lang['10044'] =  '';
$lang['10045'] =  'Select Country From List';
$lang['10046'] =  'pezdatabase_countrylist label *change this*';
$lang['10047'] =  '';
$lang['10048'] =  'pezdatabase_countrylist help *change this*';
$lang['10049'] =  'patent';
$lang['10050'] =  '';
$lang['10051'] =  'Select patent information';
$lang['10052'] =  'pezdatabase_patent label *change this*';
$lang['10053'] =  '';
$lang['10054'] =  'pezdatabase_patent help *change this*';
$lang['10055'] =  'feet';
$lang['10056'] =  '';
$lang['10057'] =  'Select the type of feet f or this stem';
$lang['10058'] =  'pezdatabase_feet label *change this*';
$lang['10059'] =  '';
$lang['10060'] =  'pezdatabase_feet help *change this*';
$lang['10061'] =  'stem color';
$lang['10062'] =  '';
$lang['10063'] =  'Select the color for this stem';
$lang['10064'] =  'pezdatabase_stemcolor label *change this*';
$lang['10065'] =  '';
$lang['10066'] =  'pezdatabase_stemcolor help *change this*';
$lang['10067'] =  'text description';
$lang['10068'] =  '';
$lang['10069'] =  'Information/Description of the Pez to Help Identify';
$lang['10070'] =  'pezdatabase_description label *change this*';
$lang['10071'] =  '';
$lang['10072'] =  'pezdatabase_description help *change this*';
$lang['10073'] =  'made for';
$lang['10074'] =  '';
$lang['10075'] =  'Select the company this item was made for';
$lang['10076'] =  'pezdatabase_madefor label *change this*';
$lang['10077'] =  '';
$lang['10078'] =  'pezdatabase_madefor help *change this*';
$lang['10079'] =  'wrapper';
$lang['10080'] =  '';
$lang['10081'] =  'Select the kind of wrapper';
$lang['10082'] =  'pezdatabase_wrapper label *change this*';
$lang['10083'] =  '';
$lang['10084'] =  'pezdatabase_wrapper help *change this*';
$lang['10085'] =  'candy';
$lang['10086'] =  '';
$lang['10087'] =  'Select the kind of candy with this item';
$lang['10088'] =  'pezdatabase_candy label *change this*';
$lang['10089'] =  '';
$lang['10090'] =  'pezdatabase_candy help *change this*';
$lang['10091'] =  'date';
$lang['10092'] =  '';
$lang['10093'] =  'Select a date of  puchase';
$lang['10094'] =  'pezdatabase_date label *change this*';
$lang['10095'] =  '';
$lang['10096'] =  'pezdatabase_date help *change this*';
$lang['10097'] =  'price';
$lang['10098'] =  '';
$lang['10099'] =  'input the price of this item';
$lang['10100'] =  'pezdatabase_price label *change this*';
$lang['10101'] =  '';
$lang['10102'] =  'pezdatabase_price help *change this*';
$lang['10103'] =  'location';
$lang['10104'] =  '';
$lang['10105'] =  'What was the location';
$lang['10106'] =  'pezdatabase_location label *change this*';
$lang['10107'] =  '';
$lang['10108'] =  'pezdatabase_location help *change this*';
$lang['10109'] =  'notes';
$lang['10110'] =  '';
$lang['10111'] =  'Input any notes here.';
$lang['10112'] =  'pezdatabase_notes label *change this*';
$lang['10113'] =  '';
$lang['10114'] =  'pezdatabase_notes help *change this*';
$lang['10115'] =  'stem info';
$lang['10116'] =  '';
$lang['10117'] =  'This is stem info';
$lang['10118'] =  'pezdatabase_steminfo label *change this*';
$lang['10119'] =  '';
$lang['10120'] =  'pezdatabase_steminfo help *change this*';
$lang['10121'] =  'packaging';
$lang['10122'] =  '';
$lang['10123'] =  '';
$lang['10124'] =  'pezdatabase_packaging label *change this*';
$lang['10125'] =  '';
$lang['10126'] =  'pezdatabase_packaging help *change this*';
$lang['10127'] =  'purchase info';
$lang['10128'] =  '';
$lang['10129'] =  '';
$lang['10130'] =  'pezdatabase_purchaseinfo label *change this*';
$lang['10131'] =  '';
$lang['10132'] =  'pezdatabase_purchaseinfo help *change this*';
$lang['10135'] =  'Upload a CSV file';
$lang['10134'] =  '';
$lang['10133'] =  'csv file';
