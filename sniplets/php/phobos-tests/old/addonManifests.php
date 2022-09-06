<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database', 'aviary',);

$addons = '[
    "aboutconfigbutton/aboutconfigbutton-1.0.xpi",
    "aboutrobots/aboutrobots-1.0.0.xpi",
    "abprime/abprime-3.1.7770.xpi",
    "adblock-latitude/adblock-latitude-5.0.8.xpi",
    "esgst/esgst-8.9.1.xpi",
    "backit-unofficial-addon/backit-unofficial-addon-0.0.3.xpi",
    "blank-private-browsing-page/blankprivatebrowsingpage-1.0.0.3.xpi",
    "bookmarksviewer/bookmarksviewer-1.0.xpi",
    "canvasblocker-legacy/canvasblocker-legacy-0.2.xpi",
    "certpatrol/certpatrol-2.1.1.xpi",
    "cite4wiki/cite4wiki-1.6.xpi",
    "classic-password-editor/classicpasswordeditor-1.1.2.xpi",
    "password-manager-menu/password-manager-menu-1.1.1.xpi",
    "cmis/cmis-2020.xpi",
    "pm-commander/pm-commander-3.0.1.xpi",
    "cozy-bookmarks-toolbar/cozy-bookmarks-toolbar-1.0.0.xpi",
    "cutebuttons/CuteButtonsCrystalSVG-0.5.8.xpi",
    "double-click-tweaks/double-click-tweaks-1.2.1.xpi",
    "download-manager-customizations/download-manager-customizations-1.0.3.xpi",
    "ehprime/ehprime-1.5.7795.xpi",
    "ematrix/ematrix-5.0.0.xpi",
    "engine-click-to-search/engine-click-to-search-1.0.0.xpi",
    "fb-chat-deleter/fb-chat-deleter-1.0.xpi",
    "fect/FECT10.1.xpi",
    "sidebar-feed-reader/sidebar-feed-reader-1.0.2.xpi",
    "tabgroups/palemoon-tabgroups-0.4.xpi",
    "flft/flft-1.1.2.xpi",
    "formdraft/formdraft-1.2.xpi",
    "geekzu-cdn/geekzu-cdn-1.1.xpi",
    "linkharvester/linkharvester-1.2.0.xpi",
    "history-submenus-3/history-submenus-3-2.4.7782.xpi",
    "https-always/https-always-5.2.26.xpi",
    "https-enforcer/https-enforcer-1.0.2.xpi",
    "httpsinquirer/httpsinquirer-0.94.xpi",
    "inforss-reloaded/inforss-reloaded-2.3.0.1.xpi",
    "dom-inspector/dom-inspector-3.1.7534.xpi",
    "signtextjs/signtextjs-0.7.7.xpi",
    "offlineqr/offlineqr-1.1.4.xpi",
    "decentraleyes/decentraleyes-1.4.3.xpi",
    "i-dont-care-about-cookies/i-dont-care-about-cookies-3.3.7.xpi",
    "kakusu/kakusu-1.1.9.xpi",
    "leftsidedropdowns/leftsidedropdowns-1.0.2.xpi",
    "linkalert/linkalert-1.0.8.xpi",
    "magdown/magdown-2.24.xpi",
    "master-password/master-password-1.30.8.2.xpi",
    "menu-on-top/menu-on-top-1.13.xpi",
    "microgesture/microgesture-2.4.1.xpi",
    "microgesture-tab/microgesture-tab-2.9.xpi",
    "minama/minama-1.0.2.xpi",
    "encodr/encodr-1.0.1.xpi",
    "myosotis/myosotis-1.1.xpi",
    "neomelodica/neomelodica-2.4.xpi",
    "noia-moon-options/noia-moon-options-2.0.2.xpi",
    "notestruck/notestruck-1.0.5.xpi",
    "ocdownloader-palemoon/ocdownloader-palemoon-1.2.5.xpi",
    "okws/okws-0.4.xpi",
    "oldvk/oldvk-61.13.xpi",
    "openlinkoverlay/openlinkoverlay-2.0.0.0.xpi",
    "youtube-nonstop/youtube-nonstop-1.0.7.xpi",
    "pdf-js-for-seamonkey/pdf-js-for-seamonkey-2.3.240.xpi",
    "phoebus-dev/phoebus-dev-1.0.3.xpi",
    "locale-switcher/locale-switcher-3.1.xpi",
    "pcc/pcc-1.45.1.xpi",
    "profile-switcher/profile-switcher-1.2.0.xpi",
    "pureurl4pm/pureurl4pm-3.3.3.xpi",
    "quickpasswords/quickpasswords-3.11.xpi",
    "rehostimagepm/rehostimagepm-1.5.21.xpi",
    "reloadskipcache/reloadskipcache-1.0.1.xpi",
    "restart-manager/restart-manager-2.08.xpi",
    "sasuga/sasuga-2.2.0.xpi",
    "searchbarlikefindbar/searchbarlikefindbar-2.0.xpi",
    "selectlinks/selectlinks-1.0.xpi",
    "sessionhistory/sessionhistory-0.9.0.0.xpi",
    "silver/silver-5.6.5.xpi",
    "simple-screenshot/simple-screenshot-1.1.1.xpi",
    "sitestyles/sitestyles-3.7.xpi",
    "auto-sort-bookmarks/auto_sort_bookmarks-2.10.12-fx.xpi",
    "splashed/splashed-1.4.2.xpi",
    "sqlite-admin/sqlite-admin-1.0.xpi",
    "suspender/suspender-1.0.0.xpi",
    "swabby/swabby-1.1.1.xpi",
    "swarth/swarth-1.0.5.xpi",
    "tab-counter/tab-counter-1.04.xpi",
    "tabgroupsmanager/tabgroupsmanager-1.0.1.xpi",
    "tabkit-mouse-gestures/tabkit-mouse-gestures-0.4.0.xpi",
    "tabkit-tab-highlighter/tabkit-tab-highlighter-0.2.5.xpi",
    "tabkit2/tabkit2-0.15.0.xpi",
    "tabtweak/tabtweak-1.0.0.xpi",
    "tgsidebar/tgsidebar-1.1.0.xpi",
    "toolboxplus/toolboxplus-1.1.2.xpi",
    "treestyletabforpm/treestyletabforpm-0.0.6.xpi",
    "url-clipper/url-clipper-1.0.3.xpi",
    "url-rewriter/url-rewriter-2.8.4.xpi",
    "urlquoter/urlquoter-1.0.xpi",
    "werewolf/werewolf-1.1.xpi",
    "winmenu/winmenu-1.1.7.xpi",
    "ptxe/ptxe-1.2.1.xpi",
    "google-cdn-replace/google-cdn-replace-1.2.xpi",
    "youtube-skip-signin/youtube-skip-signin-1.0.1.xpi",
    "zombiekeys/zombiekeys-2.21.xpi",
    "ua-status/ua-status-1.1.0.xpi",
    "take-page-screenshot/take-page-screenshot-0.98.95.3.xpi",
    "recordrewind/recordrewind-1.4.8.xpi",
    "readerview/readerview-2.2.0.xpi",
    "session-manager/session-manager-0.8.1.14.xpi",
    "textfx/textfx-2.6.xpi",
    "dualpanebookmarksorganizer/dualpanebookmarksorganizer-5.1.1.xpi",
    "web-developers-toolbox/web-developers-toolbox-1.0.6.xpi",
    "tabs-to-portfolio/tabs-to-portfolio-1.0.1.xpi",
    "opendownload2/opendownload2-4.2.1.xpi",
    "fangs/fangs-1.0.8.xpi",
    "addons-inspector/addons-inspector-1.0.1.xpi",
    "new-tab-links/new-tab-links-1.0.xpi",
    "browserticktock/browserticktock-0.1.4.xpi",
    "browsepaper/browsepaper-1.4.xpi",
    "copy-as-plain-text/copy-as-plain-text-1.0.xpi",
    "colorpili/colorpili-1.0.2.xpi",
    "ambassador/ambassador-1.3.0.xpi",
    "zap-anything/zap-anything-1.1.xpi",
    "image-search-options/image-search-options-2.0.3.7.xpi",
    "find-dialog/find-dialog-1.0.xpi",
    "febe/FEBE10.4.xpi",
    "copy-hyperlink-text/copy-hyperlink-text-1.1.xpi",
    "getemall/getemall-1.1.xpi",
    "ambassador-window/ambassador-window-1.0.1.xpi",
    "title-bar-customizer/title-bar-customizer-1.4.xpi",
    "calendate/calendate-4.5.1.xpi",
    "scrollbar-search-marker/scrollbar-search-marker-1.0.xpi",
    "update-alert/update-alert-1.3.xpi",
    "autopagecolor/autopagecolor-1.2.xpi",
    "fireftp-button-replacement/fireftp-button-replacement-1.0.1.xpi",
    "google-search-bar/google-search-bar-1.1.xpi",
    "esrever/esrever-1.0.1.xpi",
    "newmime/newmime-1.3.xpi",
    "view-image-filename/view-image-filename-1.0.1.xpi",
    "extensiondev/extensiondev-1.1.5.xpi",
    "simple-marker/simple-marker-1.2.xpi",
    "change-referer-button/change_referer_button-0.5.xpi",
    "add-as-search-engine/add-as-search-engine-1.0.xpi",
    "editdatcontent/editdatcontent-2.0.0.xpi",
    "sorttabsby/sorttabsby-1.2.xpi",
    "properties-dialog/properties-dialog-1.0.xpi",
    "number-tabs/number-tabs-1.2.xpi",
    "aub/aub-1.0.2.xpi",
    "moongestures/moongestures-1.12.0.xpi",
    "showmypass/showmypass-2.0.4.xpi",
    "auto-link-text/auto-link-text-1.0.xpi",
    "gomenu/gomenu-1.0.0.xpi",
    "editdattitle/editdattitle-1.0.0.xpi",
    "butwhymod/butwhymod-1.7.xpi",
    "pmplus/pmplus-2.5.1.xpi",
    "print-preview-button-2/print-preview-button-2-1.3.1.xpi",
    "chromenavigator/chromenavigator-0.1.0.xpi",
    "pmplayer/pmplayer-1.7.1.xpi",
    "expire-history-by-days/expire-history-by-days-1.2.4.xpi",
    "extended-statusbar/extended-statusbar-2.1.2.xpi",
    "tab-mix-plus/tab-mix-plus-0.5.8.1.xpi",
    "restore-tabs-button/restore-tabs-button-1.3.xpi",
    "clickity-touch-n-push/clickity-touch-n-push-1.0.1.xpi",
    "cacheswitch/cacheswitch-0.7.xpi",
    "website-navigation-bar/website-navigation-bar-3.3.xpi",
    "yetanotheraboutconfighelper/yetanotheraboutconfighelper-1.1.xpi",
    "quickprefbar/quickprefbar-8.0.5.xpi",
    "silbe/silbe-1.0.xpi",
    "navigation-bar-enhancer/navigation-bar-enhancer-1.2.xpi",
    "pentadactyl-community/pentadactyl-community-1.4.0.xpi"
]';

$addons = json_decode($addons);

$path = gfBuildPath(ROOT_PATH, DOTDOT, DOTDOT, 'storage', 'legacy', 'addons');

$gmDatabase->changeDB('phoebus_live');

$finalManifests = EMPTY_ARRAY;

foreach ($addons as $_value) {
  $_xpiFile = $path . $_value;
  $_installManifest = gfReadFileFromArchive($_xpiFile, RDF_INSTALL_MANIFEST);

  $targetApplication = EMPTY_ARRAY;

  if (array_key_exists('{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}', $_installManifest['targetApplication'])) {
    $targetApplication[TARGET_APPLICATION['palemoon']['id']] =
      $_installManifest['targetApplication']['{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}'];

    $targetApplication[TARGET_APPLICATION['palemoon']['id']]['minVersion'] = '30.0.0a1';
    $targetApplication[TARGET_APPLICATION['palemoon']['id']]['maxVersion'] = '30.*';
  }

  if (array_key_exists('{a3210b97-8e8a-4737-9aa0-aa0e607640b9}', $_installManifest['targetApplication'])) {
    $targetApplication[TARGET_APPLICATION['borealis']['id']] =
      $_installManifest['targetApplication']['{a3210b97-8e8a-4737-9aa0-aa0e607640b9}'];

    $targetApplication[TARGET_APPLICATION['borealis']['id']]['minVersion'] = '8.5.7900a1';
    $targetApplication[TARGET_APPLICATION['borealis']['id']]['maxVersion'] = '8.5.*';
  }

  if (array_key_exists(TARGET_APPLICATION['interlink']['id'], $_installManifest['targetApplication'])) {
      if (ToolkitVersionComparator::compare($_installManifest['targetApplication'][TARGET_APPLICATION['interlink']['id']]['maxVersion'], '52.9') >= 0) {
        $targetApplication[TARGET_APPLICATION['interlink']['id']] =
          $_installManifest['targetApplication'][TARGET_APPLICATION['interlink']['id']];

        $targetApplication[TARGET_APPLICATION['interlink']['id']]['minVersion'] = '52.9.7900a1';
        $targetApplication[TARGET_APPLICATION['interlink']['id']]['maxVersion'] = '52.9.*';
      }
  }

  $_installManifest['targetApplication'] = $targetApplication;

  $_slug = gfExplodeString(SLASH, $_value)[0];
  $_newXPIName = $_slug . DASH . $_installManifest['version'] . '.1-fxguid' . XPINSTALL_EXTENSION;
  $_newPath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons', $_slug);

  $_installManifest = $gmAviary->createInstallManifest($_installManifest);

  $_dbManifest = $gmDatabase->get('row', "SELECT * FROM `addon` WHERE `slug` = ?s", $_slug);
  $_owner = $gmDatabase->get('col', "SELECT `username` FROM `user` WHERE `addons` LIKE '%\"{$_slug}\"%'")[0];

  $_dbManifest['xpinstall'] = $_installManifest;
  $_dbManifest['owner'] = $_owner;
/*
  mkdir($_newPath);
  gfWriteFile($_dbManifest, $_newPath . 'shadow.json');
  copy($_xpiFile, $_newPath . $_newXPIName);
*/
  $finalManifests[$_slug] = $_dbManifest;
}

gfContent('phpEncode', $finalManifests);



// ====================================================================================================================

?>