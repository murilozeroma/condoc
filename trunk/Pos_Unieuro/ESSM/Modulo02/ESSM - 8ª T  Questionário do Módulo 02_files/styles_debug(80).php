/** Path: parents base core **/
/**
 * Required to undo YUI resets that override input size
 */
input[type=text],input[type=password],textarea{width:auto;}

/* Fix for YUI overriding styles */
strong{font-style:inherit;}em{font-weight:inherit;}

/**
 * General
 */
th,
td,
a img {border-width:0;}
acronym,
abbr {cursor: help;}
.dir-ltr,
.mdl-left,
.dir-rtl .mdl-right {text-align: left;}
.dir-rtl,
.mdl-right,
.dir-rtl .mdl-left {text-align: right;}
#add,
#remove,
.centerpara,
.mdl-align {text-align: center;}
a.dimmed,
a.dimmed:link,
a.dimmed:visited,
a.dimmed_text,
a.dimmed_text:link,
a.dimmed_text:visited,
.dimmed_text,
.dimmed_text a,
.dimmed_text a:link,
.dimmed_text a:visited,
.usersuspended,
.usersuspended a,
.usersuspended a:link,
.usersuspended a:visited,
.dimmed_category,
.dimmed_category a {
    color: #AAA;
}
.activity.label .dimmed_text {
    opacity: 0.5;
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
    filter: alpha(opacity=50);
}
.unlist,
.unlist li,
.inline-list,
.inline-list li,
.block .list,
.block .list li,
.sitetopic .section li.activity,
.course-content .section li.activity,
.tabtree li {list-style: none;margin:0;padding:0;}

.course-content .current {background:#E3E3E3;}

.inline-list li {display: inline;}
.notifytiny {font-size:0.7em;}
.notifytiny li,
.notifytiny td {font-size:100%;}
.red,
.notifyproblem {color:#660000;}
.green,
.notifysuccess {color:#006600;}
.reportlink {text-align:right;}
a.autolink.glossary:hover {cursor: help;}
/* Block which is hidden if javascript enabled, prevents fickering visible when JS from footer used! */
.collapsibleregioncaption {white-space: nowrap;}
.collapsibleregioncaption img {vertical-align: middle;}
.jsenabled .hiddenifjs {display: none;}
.jsenabled .collapsibleregion {overflow:hidden;}
.jsenabled .collapsed .collapsibleregioninner {visibility: hidden;}
.yui-overlay .yui-widget-bd {background-color:#FFEE69;border:1px solid #A6982B;border-top-color: #D4C237;color:#000000;left:0;padding:2px 5px;position:relative;top:0;z-index:1;}
.clearer {background:transparent;border-width:0;clear:both;display:block;height:1px;margin:0;padding:0;}
.clearfix:after {clear: both;content: ".";display: block;height: 0;min-width: 0;visibility: hidden;}
.bold,
.warning,
.errorbox .title,
.pagingbar .title,
.pagingbar .thispage,
.headingblock {font-weight: bold;}
img.resize {height: 1em;width: 1em;}
.block img.resize,
.breadcrumb img.resize {height: 0.9em;width: 0.8em;}
img.icon {height:16px;vertical-align:middle;width:16px;padding-right:4px;}
img.iconsmall {height:11px;margin-right:1px;vertical-align:middle;width:11px;}
img.iconhelp {height:17px;margin-right:4px;vertical-align:middle;width:17px;}
img.icontoggle {height:17px;vertical-align:middle;width:50px;}
img.iconkbhelp {height:17px;width:49px;}
.categorybox .category {font-size:1.2em;font-weight:bold;}
.generalbox {border:1px solid;}
.boxaligncenter {margin-left:auto;margin-right:auto;}
.boxalignright {margin-left:auto;margin-right:0;}
.boxalignleft {margin-left:0;margin-right:auto;}
.boxwidthnarrow {width: 30%;}
.boxwidthnormal {width: 50%;}
.boxwidthwide {width: 80%;}
.buttons .singlebutton,
.buttons .singlebutton form,
.buttons .singlebutton div {display: inline;}
.buttons .singlebutton input {margin:20px 5px;}
.blink {text-decoration: blink;}
.headermain {font-weight:bold;}
#maincontent {display: block;height: 1px;overflow: hidden;}
img.uihint {cursor: help;}
#addmembersform table {margin-left: auto;margin-right: auto;}
.formtable tbody th,
.generaltable th.header {vertical-align: top;}
.flexible th {white-space: nowrap;}
.cell {vertical-align: top;}
.helplink img {height: 17px;vertical-align: middle;width: 17px;}
img.emoticon {vertical-align: middle;width: 15px;height: 15px;}
form.popupform,
form.popupform div {display: inline;}
.arrow_button input {overflow:hidden;}

/** The 1-pixel padding is there to avoid phantom scroll bars on OS X (FF, Safari and Chrome)**/
.no-overflow {overflow:auto;padding-bottom:1px;}
.pagelayout-report .no-overflow {overflow:visible;}
.no-overflow > .generaltable {margin-bottom:0;}
.ie6 .no-overflow {width:100%;}

/** IE6 float + background bug solution **/
.ie6 li.section {line-height:1.2em;width:100%;}

/**
 * Accessibility features
 */
/*Accessibility: text 'seen' by screen readers but not visual users. */
.accesshide {position:absolute;left:-10000px;font-weight:normal;font-size:1em;}
.dir-rtl .accesshide {top:-30000px;left:auto;}
span.hide,
div.hide {display:none;}
.invisiblefieldset {display:inline;border-width:0;padding:0;margin:0;}
/*Accessibility: Skip block link, for keyboard-only users. */
a.skip-block,
a.skip {position: absolute;top: -1000em;font-size: 0.85em;text-decoration:none;}
a.skip-block:focus,
a.skip-block:active,
a.skip:focus,
a.skip:active {position: static;display: block;}
.skip-block-to {display: block;height: 1px;overflow: hidden;}
/* Accessibility: only certain fonts support Unicode chars like &#x25BA; in IE6 */
.arrow,
.arrow_button input {font-family: Arial,Helvetica,Courier,sans-serif;}

#yui-module-debug {display:none;}

/**
 * Header
 */
.headermain {float:left;margin:15px;font-size:2.3em;}
.headermenu {float:right;margin:10px;font-size:0.8em;text-align:right;}

/**
 * Navbar
 */
.navbar {clear:both;overflow:hidden;}
.ie6 .navbar {overflow:hidden;height:100%;}
.breadcrumb {float:left;}
.navbutton {text-align:right;}
.breadcrumb ul {padding:0;margin:0;text-indent:0;list-style:none;}
.navbutton {float: right;}
.breadcrumb li,
.navbutton div,
.navbutton form {display:inline;}

/**
 * Footer
 */
#page-footer {text-align:center;font-size:0.9em;}
#page-footer .homelink {margin: 1em 0;}
#page-footer .homelink a {padding-left:1em;padding-right:1em;}
#page-footer .logininfo,
#page-footer .sitelink,
#page-footer .helplink {margin:0px 10px;}
#page-footer .performanceinfo {text-align:center;margin:10px 20%;}
#page-footer .performanceinfo span {display:block;}
#page-footer .validators {margin-top:40px;padding-top:5px;border-top: 1px dotted gray;}
#page-footer .validators ul {margin:0px;padding:0px;list-style-type:none;}
#page-footer .validators ul li {display:inline;margin-right:10px;margin-left:10px;}

/**
 * Tabs
 */
.tabtree {position:relative;margin-bottom:3.5em;}
.tabtree li {display:inline;}
.tabtree ul {margin:5px;}
.tabtree ul li.here ul {position:absolute;top:100%;width:100%;}
.tabtree ul li.here .empty {display:none;}

/**
 * Mforms
 */
.mform fieldset {border:1px solid;}
.mform fieldset fieldset {border-width:0px;}
.mform fieldset legend {font-weight:bold;margin-left:0.5em;}
.mform fieldset div {margin:10px;margin-top:0;}
.mform fieldset div div {margin:0;}
.mform fieldset .advancedbutton {text-align:right;}
.mform fieldset.hidden {border-width:0;}
.mform fieldset.group {margin-bottom: 0}
.mform fieldset.error {border: 1px solid #A00;}
.mform .fitem {width:100%;overflow:hidden;margin-top:5px;margin-bottom:1px;clear:right;}
.mform .fitem .fitemtitle {width:15%;text-align:right;float:left;}
.mform .fitem .fitemtitle div {display: inline;}
.mform .fitem .felement {border-width: 0;width:80%;margin-left:16%;}
.mform .fitem fieldset.felement {margin-left:0;padding-left:1%;margin-bottom:0}
.mform .error,
.mform .required {color:#A00;}
.mform .required .fgroup span label {color:#000;}
.mform .fdescription.required {color:#A00;text-align:right;}
.mform .fpassword .unmask {display:inline;margin-left:0.5em;}
.mform .ftextarea #id_alltext {width: 100%;}
.mform ul.file-list {padding:0;margin:0;list-style:none;}
.mform label .req,
.mform label .adv {cursor: help;}
.mform .fcheckbox input {margin-left: 0;}
.mform .fitem fieldset.fgroup label,
.mform .fradio label,
.mform .fcheckbox label,
.mform fieldset.fdate_selector label {display:inline;float: none;width: auto;}
.mform .ftags label.accesshide {display: block;position: static;}
.mform .ftags select {margin-bottom: 0.7em;min-width: 22em;}

input#id_externalurl {direction:ltr;}

/** Browser corrections for mforms **/
.ie .mform .fitem .felement {margin-left:0;text-align:left;float:left;}
/** Fix IE double margin + float bugs **/
.ie .mform .fitem .fitemtitle {padding-right:1em;}
#portfolio-add-button {display:inline;}

/**
 * phpinfo styles
 */
.phpinfo .center {text-align: center;}
.phpinfo .center table {margin-left: auto;margin-right: auto;text-align: left;border-collapse: collapse;}
.phpinfo .center th {text-align: center;}
.phpinfo .e,
.phpinfo .v,
.phpinfo .h {border: 1px solid #000000;font-size: 0.8em;vertical-align: baseline;color: #000000;background-color: #cccccc;}
.phpinfo .e {background-color: #ccccff;font-weight: bold;}
.phpinfo .h {background-color: #9999cc;font-weight: bold;}

/**
 * Blogs
 */
.addbloglink {text-align: center;}
.blog_entry .audience {text-align: right;}
.blog_entry .tags {margin-top: 15px;}

/**
 * Group
 */
#page-group-index #groupeditform {text-align: center;}
#doc-contents h1 {margin: 1em 0 0 0;}
#doc-contents ul {margin: 0;padding: 0;width: 90%;}
#doc-contents ul li {list-style-type: none;}
.groupmanagementtable td {vertical-align: top;}
.groupmanagementtable #existingcell,
.groupmanagementtable #potentialcell {width: 42%;}
.groupmanagementtable #buttonscell {width: 16%;}
.groupmanagementtable #buttonscell input {width: 80%;}
.groupmanagementtable #removeselect_wrapper,
.groupmanagementtable #addselect_wrapper {width: 100%;}
.groupmanagementtable #removeselect_wrapper label,
.groupmanagementtable #addselect_wrapper label {font-weight: normal;}
.dir-rtl .groupmanagementtable p {text-align: right;}
#group-usersummary {width: 14em;}
.groupselector {margin-top: 3px;margin-bottom: 3px;}

/**
 * Login
 */
.loginbox {margin:15px;overflow:visible;}
.loginbox.twocolumns {margin:15px;}
.loginbox h2,
.loginbox .subcontent {margin:5px;padding:10px;text-align:center;}
.loginbox .loginpanel .desc {margin:0;padding:0;margin-bottom:5px;}
.loginbox .signuppanel .subcontent {text-align:left;}
.loginbox .loginsub {margin-left:0;margin-right:0;}
.loginbox .guestsub,
.loginbox .forgotsub,
.loginbox .potentialidps {margin:5px 12%;}
.loginbox .potentialidps .potentialidplist {margin-left:40%;}
.loginbox .potentialidps .potentialidplist div {text-align:left;}
.loginbox .loginform {margin-top:1em;text-align:left;}
.loginbox .loginform .form-label {float:left;text-align:right;width:44%;direction:rtl; white-space:nowrap;}
.dir-rtl .loginbox .loginform .form-label {float:left;text-align:right;width:44%;direction:ltr; white-space:nowrap;}
.loginbox .loginform .form-input {float:right;width:55%;}
.loginbox .loginform .form-input input {width: 6em;}
.loginbox .signupform {margin-top:1em;text-align:center;}
.loginbox.twocolumns .loginpanel {float:left;width:49.5%;border-right: 1px solid;margin-bottom:-2000px;padding-bottom:2000px;}
.loginbox.twocolumns .signuppanel {float:right;width:50%;margin-bottom:-2000px;padding-bottom:2000px;}

/**
 * Notes
 */
.notepost {margin-bottom: 1em;}
.notepost .userpicture {float: left;margin-right: 5px;}
.notepost .content,
.notepost .footer {clear: both;}
.notesgroup {margin-left:20px;}

/**
 * My Moodle
 */
.path-my .coursebox .overview .name {margin-left:20px;}
.path-my .coursebox .overview .info {margin-left:25px;}
.path-my .coursebox .overview .details {margin-left:25px;}
.path-my .coursebox .overview {margin-bottom:10px;}
.path-my .coursebox .info {float: none;}

/**
 * Logs
 */
.logtable th {text-align:left;}

/**
 * Modules
 */
.mod_introbox {border:1px solid;padding:10px;}
table.mod_index {width:100%;}

/**
 * Help
 */
#help_icon_tooltip div.bd {width: 35em;}
#help hr {border: none;height: 1px;background: #ccc;}
#help .center {text-align: center;}
#help .moreinfo {text-align: right;}
#help .indent {margin-left: 40px;}
#help .indent-big {margin-left: 160px;margin-right: 160px;}
#help #emoticons{text-align: center;clear:both;width: 300px;margin-right: auto;margin-left:auto;}
#help #emoticons ul{list-style-type: none;}
#help #emoticons li{margin-bottom: 3px;width: 120px;border-left: 3px solid gray;padding-left: 7px;float: left;}

/**
 * Comments
 */
.comment-ctrl {font-size: 12px;display: none;margin:0;padding:0;}
.comment-ctrl h5 {margin:0;padding: 5px;}
.comment-area {max-width: 400px;padding: 5px;}
.comment-area textarea {width:100%;overflow:auto;}
.comment-area .fd {text-align:right;}
.comment-meta span {color:gray;}
.comment-list {font-size: 11px;overflow:auto;list-style:none;padding:0;margin:0;}
.comment-list li {margin: 2px;list-style:none;margin-bottom:5px;clear:both;}
.comment-list li.first {display:none}
.comment-paging{text-align:center;}
.comment-paging .pageno{padding:2px;}
.comment-paging .curpage{border:1px solid #CCC;}
.comment-userpicture {width: 20px;float:left;}
.comment-content {margin-left: 22px;}
.comment-content div {margin:0;padding:0;}
.comment-content p {padding:0;margin:0 18px 0 0;}
.comment-delete {float:right;text-align:right;}
.comment-delete-confirm {background: #eee; padding: 2px; width: 5em;text-align:center;}
.comment-container {float:left;margin: 4px;}
.comment-report-selectall{display:none}
.comment-link {display:none}
.jsenabled .comment-link {display:block}
.jsenabled .showcommentsnonjs{display:none}
.jsenabled .comment-report-selectall{display:inline}

/**
 * Completion progress report
 */
.completion-expired {background:#FFDDDD;}
.completion-expected {font-size:0.75em;}
.completion-sortchoice,
.completion-identifyfield {font-size:0.75em;vertical-align:bottom;}
.completion-progresscell {text-align:right;}
.completion-expired .completion-expected {font-weight:bold;}

/**
 * Tags
 */
#page-tag-coursetags_edit .coursetag_edit_centered {position: relative;width: 600px;margin: 20px auto;}
#page-tag-coursetags_edit .coursetag_edit_row {clear:both;}
#page-tag-coursetags_edit .coursetag_edit_row .coursetag_edit_left {float:left;width:50%;text-align:right;}
#page-tag-coursetags_edit .coursetag_edit_row .coursetag_edit_right {margin-left:50%;}
#page-tag-coursetags_edit .coursetag_edit_input3 {display: none;}
#page-tag-coursetags_more .coursetag_more_large {font-size: 120%;}
#page-tag-coursetags_more .coursetag_more_small {font-size: 80%;}
#page-tag-coursetags_more .coursetag_more_link {font-size: 80%;}
#tag-description,
#tag-blogs {width:100%;}
#tag-management-box {margin-bottom:10px;line-height:20px;}
#tag-user-table {padding:3px;clear: both;width:100%;}
#tag-user-table:after {content:".";display:block;clear:both;visibility:hidden;height:0;overflow:hidden;}
img.user-image {height:100px;width:100px;}
#small-tag-cloud-box {width:300px;margin:0 auto;}
#big-tag-cloud-box {width:600px;margin:0 auto;float:none;}
ul#tag-cloud-list {list-style:none;padding:5px;margin:0;}
ul#tag-cloud-list li {margin:0;display:inline;list-style-type:none;}
#tag-search-box {text-align:center;margin:10px auto;}
#tag-search-results-container {padding:0;width:100%;}
#tag-search-results {padding:0;margin: 15px 20% 0 20%;float:left;width:60%;display:block;}
#tag-search-results li {width:30%;float:left;padding-left:1%;text-align:left;line-height:20px;padding-right:1%;list-style:none;}
span.flagged-tag,
span.flagged-tag a {color:#FF0000;}
table#tag-management-list {text-align:left;width:100%;}
table#tag-management-list td,
table#tag-management-list th {vertical-align: middle;text-align: left;padding: 4px;}
.tag-management-form {text-align:center;}
#relatedtags-autocomplete-container {margin-left:auto;margin-right:auto;min-height:4.6em;width:100%;}
#relatedtags-autocomplete {position:relative;display:block;width:60%;margin-left:auto;margin-right:auto;}
#relatedtags-autocomplete .yui-ac-content {position:absolute;width:420px;left:20%;border:1px solid #404040;background:#fff;overflow:hidden;z-index:9050;}
#relatedtags-autocomplete .ysearchquery {position:absolute;right:10px;color:#808080;z-index:10;}
#relatedtags-autocomplete .yui-ac-shadow {position:absolute;margin:.3em;width:100%;background:#a0a0a0;z-index:9049;}
#relatedtags-autocomplete ul {padding:0;width:100%;margin:0;list-style-type:none;}
#relatedtags-autocomplete li {padding:0 5px;cursor:default;white-space:nowrap;}
#relatedtags-autocomplete li.yui-ac-highlight{background:#FFFFCC;}
h2.tag-heading,
div#tag-description,
div#tag-blogs,
body.tag .managelink {padding: 5px;}
.tag_cloud .s20 {font-size: 1.5em;font-weight: bold;}
.tag_cloud .s19 {font-size: 1.5em;}
.tag_cloud .s18 {font-size: 1.4em;font-weight: bold;}
.tag_cloud .s17 {font-size: 1.4em;}
.tag_cloud .s16 {font-size: 1.3em;font-weight: bold;}
.tag_cloud .s15 {font-size: 1.3em;}
.tag_cloud .s14 {font-size: 1.2em;font-weight: bold;}
.tag_cloud .s13 {font-size: 1.2em;}
.tag_cloud .s12,
.tag_cloud .s11 {font-size: 1.1em;font-weight: bold;}
.tag_cloud .s10,
.tag_cloud .s9 {font-size: 1.1em;}
.tag_cloud .s8,
.tag_cloud .s7 {font-size: 1em;font-weight: bold;}
.tag_cloud .s6,
.tag_cloud .s5 {font-size: 1em;}
.tag_cloud .s4,
.tag_cloud .s3 {font-size: 0.9em;font-weight: bold;}
.tag_cloud .s2,
.tag_cloud .s1 {font-size: 0.9em;}
.tag_cloud .s0 {font-size: 0.8em;}

/**
 * File picker
 * Copyright (c) 2006 Yahoo! Inc. All rights reserved.
 * copy from yui/examples/treeview/assets/css/folders/tree.css
 * first or middle sibling, no children
 */
/* first or middle sibling, no children */
.file-picker .ygtvtn {background: url(image.php?theme=aardvark&image=y%2Ftn) 0 0 no-repeat;width:17px;height:22px;}
/* first or middle sibling, collapsable */
.file-picker .ygtvtm {background: url(image.php?theme=aardvark&image=y%2Ftm) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* first or middle sibling, collapsable, hover */
.file-picker .ygtvtmh {background: url(image.php?theme=aardvark&image=y%2Ftmh) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* first or middle sibling, expandable */
.file-picker .ygtvtp {background: url(image.php?theme=aardvark&image=y%2Ftp) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* first or middle sibling, expandable, hover */
.file-picker .ygtvtph {background: url(image.php?theme=aardvark&image=y%2Ftph) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* last sibling, no children */
.file-picker .ygtvln {background: url(image.php?theme=aardvark&image=y%2Fln) 0 0 no-repeat;width:17px;height:22px;}
/* Last sibling, collapsable */
.file-picker .ygtvlm {background: url(image.php?theme=aardvark&image=y%2Flm) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* Last sibling, collapsable, hover */
.file-picker .ygtvlmh {background: url(image.php?theme=aardvark&image=y%2Flmh) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* Last sibling, expandable */
.file-picker .ygtvlp {background: url(image.php?theme=aardvark&image=y%2Flp) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* Last sibling, expandable, hover */
.file-picker .ygtvlph {background: url(image.php?theme=aardvark&image=y%2Flph) 0 0 no-repeat;width:34px;height:22px;cursor:pointer;}
/* Loading icon */
.file-picker .ygtvloading {background: url(image.php?theme=aardvark&image=y%2Floading) 0 0 no-repeat;width:16px;height:22px;}
/* the style for the empty cells that are used for rendering the depth* of the node */
.file-picker .ygtvdepthcell {background: url(image.php?theme=aardvark&image=y%2Fvline) 0 0 no-repeat;width:17px;height:22px;}
.file-picker .ygtvblankdepthcell {width:17px;height:22px;}
/* the style of the div around each node */
.file-picker .ygtvitem  table{margin-bottom:0;}
.file-picker .ygtvitem  td {border:none;padding:0;}
/* the style of the div around each node's collection of children */
* html .file-picker .ygtvchildren {height:1%;}
/* the style of the text label in ygTextNode */
.file-picker .ygtvlabel,
.file-picker .ygtvlabel:link,
.file-picker .ygtvlabel:visited,
.file-picker .ygtvlabel:hover {margin-left:2px;text-decoration: none;}
.file-picker {font-size:12px;}
.file-picker strong {background:#FFFFCC;}
.file-picker .fp-panel {padding:0;margin:0;text-align:left;}
.file-picker .fp-login-form {text-align:center;}
.file-picker .fp-searchbar {float:right;}
.file-picker .fp-viewbar {width:300px;float:left;}
.file-picker .fp-toolbar {padding: .8em;background: #FFFFCC;text-align:center;margin: 3px;}
.file-picker .fp-toolbar a {padding: 0 .5em;}
.file-picker .fp-list {list-style-type:none;padding:0;float:left;width:100%;margin:0;}
.dir-rtl .file-picker .fp-list {text-align:right;}
.file-picker .fp-list li {border-bottom:1px dotted gray;margin-bottom: 1em;}
.file-picker .fp-repo-name {display:block;padding: .5em;margin-bottom: .5em;}
.file-picker .fp-pathbar {margin: .4em;border-bottom: 1px dotted gray;}
.file-picker .fp-pathbar a {padding: .4em;}
.file-picker .fp-rename-form {text-align:center;}
.file-picker .fp-rename-form p {margin: 1em;}
.file-picker .fp-upload-form {margin: 2em 0;text-align:center;}
.file-picker .fp-upload-btn {clear:both;margin-top: 2em;}
.file-picker .fp-paging {margin:1em .5em;clear:both;text-align:center;line-height: 2.5em;}
.file-picker .fp-paging a {padding: .5em;border: 1px solid #CCC;}
.file-picker .fp-paging a.cur_page {border: 1px solid blue;}
.file-picker .fp-popup {text-align:center;}
.file-picker .fp-grid-panel{}
.file-picker .fp-grid {float:left;text-align:center;}
.file-picker .fp-grid div {overflow: hidden;}
.file-picker .fp-grid p {margin:0;padding:0;background: #FFFFCC;}
.file-picker .fp-grid .label {height:48px;text-align:center;}
.file-picker .fp-grid span {color:gray;}
.file-picker .fp-error {padding: 2em 0;margin: 3em 5px;text-align:center;background: #FFBBBB;}
.file-picker .fp-emptylist, .file-picker .fp-msg {text-align:center;}
.filepicker-filelist {padding: 5px;margin: 6px 0;background: #E9F4FF;border: #AACCEE 1px solid}
/* file picker search dialog */
.file-picker div.bd {text-align:left;}

/**
 * File Manager
 */
.filemanager-toolbar {margin: 5px 0;}
.filemanager-toolbar a {border: 1px solid #AACCEE;background: #F4FAFF;color: black;padding: 3px;}
.filemanager-toolbar a:hover {background: #FFFFFF;}
.fm-breadcrumb {margin:0;}
.filemanager-container {padding: 5px;margin: 6px 0;background: #E9F4FF;border: #AACCEE 1px solid}
.filemanager-container ul{margin:0;padding:0;}
.filemanager-container ul li{white-space:nowrap;list-style-type:none;}
.filemanager-container ul li a{padding:0}
.filemanager-loading{display:none}
.jsenabled .filemanager-loading{display:block}
.fm-menuicon{cursor: pointer;}
#fm-move-div {margin: 6px;}
#fm-move-div strong{color:red;}
.fm-file-entry{border: 1px solid red;}
.fm-operation {font-weight: bold;}

/*
 * Backup and Restore CSS
 */
.path-backup .mform .grouped_settings.section_level {clear:both;}
.path-backup .mform .grouped_settings {clear:both;overflow:hidden;}
.path-backup .mform .grouped_settings .fitem .fitemtitle {width:40%;padding-right:10px;}
.path-backup .mform .grouped_settings .fitem .felement {width:50%;}
.path-backup .mform .grouped_settings.section_level .include_setting {width:50%;margin:0;float:left;clear:left;font-weight:bold;}
.path-backup .mform .grouped_settings.section_level .normal_setting {width:50%;margin:0;margin-left:50%;}
.path-backup .mform .grouped_settings.activity_level .include_setting label {font-weight:normal;}
.path-backup .mform .fitem fieldset.felement {margin-left:0;width:auto;padding-left:0;}
.path-backup .notification.dependencies_enforced {text-align:center;color:#A00;font-weight:bold;}
.path-backup .backup_progress {text-align:center;}
.path-backup .backup_progress span.backup_stage {color:#999;}
.path-backup .backup_progress .backup_stage.backup_stage_current {font-weight:bold;color:inherit;}
.path-backup .backup_progress .backup_stage.backup_stage_next {}
.path-backup .backup_progress span.backup_stage.backup_stage_complete {color:inherit;}

/**
 * Web Service
 */
#webservice-doc-generator td {text-align: left;border: 0px solid black;}

/**
 * Help Content (pop-up)
 */
#helppopupbox {background-color: #eee; border: 1px solid #848484;z-index: 10000 !important;}
#helppopupbox .yui3-widget-hd {float:right;margin:3px 3px 0 0;}
#helppopupbox .yui3-widget-bd {margin:0 1em 1em 1em;border-top:1px solid #eee;}
#helppopupbox .helpheading {font-size: 1em;}
#helppopupbox .spinner {margin:1em;}

/**
 * Custom menu
 */
#custommenu {clear:both;}
#custommenu .yui3-menu .yui3-menu {z-index:500;}
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu-content,
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu-content .ul {border:1px solid #000;}
#custommenu .yui3-menu-horizontal.javascript-disabled ul {margin:0;padding:0;}
#custommenu .yui3-menu-horizontal.javascript-disabled li {margin:0;padding:0;list-style:none;width:auto;position:relative;}
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu .yui3-menu-label {padding-right:20px;}
#custommenu .yui3-menu-horizontal.javascript-disabled>.yui3-menu-content>ul>li {float:left;}
#custommenu .yui3-menu-horizontal.javascript-disabled li a {padding:0 10px;}
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu {position:absolute;top:-10000px;left:-10000px;visibility:hidden;white-space: nowrap;max-width: 250px;background-color:#FFF;}
#custommenu .yui3-menu-horizontal.javascript-disabled li:hover>.yui3-menu {top:100%;left:0;visibility: visible;z-index:10;}
#custommenu .yui3-menu-horizontal.javascript-disabled li:hover .yui3-menu .yui3-menu {top:0;left:100%;min-width:200px;}
#custommenu .yui3-menu-horizontal.javascript-disabled>.yui3-menu-content>ul:after {content:"";display:block;clear:both;line-height:0;font-size:0;visibility:hidden;}
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu-content {font-size:93%;line-height:2;padding:0;}
#custommenu .yui3-menu-horizontal.javascript-disabled .yui3-menu-content .yui3-menu-content {font-size:100%;}

/**
 * Fix for broken YUI images in the menunav component
 */
#custommenu .yui3-menu-label,
#custommenu .yui3-menuitem-content {cursor:pointer;}
#custommenu .yui3-menuitem-active {background-color:#B3D4FF;}
#custommenu .yui3-menuitem-active,
#custommenu .yui3-menuitem-active .yui3-menuitem-content,
#custommenu .yui3-menu-horizontal .yui3-menu-label,
#custommenu .yui3-menu-horizontal .yui3-menu-content {background-image:none;background-position:right center;background-repeat:no-repeat;}
#custommenu .yui3-menu-label,
#custommenu .yui3-menu .yui3-menu .yui3-menu-label {background-image:url(image.php?theme=aardvark&image=vertical-menu-submenu-indicator&component=theme); padding-right: 20px;}
#custommenu .yui3-menu .yui3-menu .yui3-menu-label-menuvisible {background-image:url(image.php?theme=aardvark&image=horizontal-menu-submenu-indicator&component=theme);}

/**
 * Smart Select Element
 */
.smartselect {position:absolute;}
.smartselect .smartselect_mask {background-color:#fff;}
.smartselect ul  {padding: 0;margin: 0;}
.smartselect ul li {list-style: none;}
.smartselect .smartselect_menu {margin-right:5px;}
.safari .smartselect .smartselect_menu {margin-left:2px;}
.smartselect .smartselect_menu,
.smartselect .smartselect_submenu {border:1px solid #000;background-color:#FFF;display: none;}
.smartselect .smartselect_menu.visible,
.smartselect .smartselect_submenu.visible {display:block;}
.smartselect .smartselect_menu_content ul li {position:relative;padding:2px 5px;}
.smartselect .smartselect_menu_content ul li a {color:#333;text-decoration:none;}
.smartselect .smartselect_menu_content ul li a.selectable {color:inherit;}
.smartselect .smartselect_submenuitem {background-image:url(image.php?theme=aardvark&image=t%2Fcollapsed);background-repeat: no-repeat;background-position:100%;}
/** Spanning mode */
.smartselect.spanningmenu .smartselect_submenu {position:absolute;top:-1px;left:100%;}
.smartselect.spanningmenu .smartselect_submenu a {white-space: nowrap;padding-right:16px;}
.smartselect.spanningmenu .smartselect_menu_content ul li a.selectable:hover {text-decoration:underline;}
/** Compact mode */
.smartselect.compactmenu .smartselect_submenu {position:relative;margin:2px -3px; margin-left: 10px;display:none;border-width:0;z-index: 1010;}
.smartselect.compactmenu .smartselect_submenu.visible {display:block;}
.smartselect.compactmenu .smartselect_menu {z-index: 1000;overflow:hidden;}
.smartselect.compactmenu .smartselect_submenu .smartselect_submenu {z-index: 1020;}
.smartselect.compactmenu .smartselect_submenuitem:hover > .smartselect_menuitem_label {font-weight:bold;}

/**
 * Registration
 */
#page-admin-registration-register .registration_textfield {width: 300px;}

/**
 * Enrol
 */
.userenrolment {width:100%;border-collapse: collapse;}
.userenrolment td {padding:0;height:41px;}
.userenrolment .subfield {margin-right:5px;}
.userenrolment .col_userdetails .subfield_picture {float:left;}
.userenrolment .col_lastseen {width:150px;}
.userenrolment .col_role {width:262px;}
.userenrolment .col_role .roles {margin-right:30px;}
.userenrolment .col_role .role {float:left;padding:3px;margin:3px;}
.userenrolment .col_role .role a {margin-left:3px;cursor:pointer;}
.userenrolment .col_role .addrole {float:right;width:18px;margin:3px;height:18px;text-align:center;}
.userenrolment .col_role .addrole a img {vertical-align:bottom;}
.userenrolment .hasAllRoles .col_role .addrole {display:none;}
.userenrolment .col_group .groups {margin-right:30px;}
.userenrolment .col_group .group {float:left;padding:3px;margin:3px;white-space:nowrap;}
.userenrolment .col_group .group a {margin-left:3px;cursor:pointer;}
.userenrolment .col_group .addgroup {float:right;width:18px;margin:3px;height:18px;text-align:center;}
.userenrolment .col_group .addgroup a img {vertical-align:bottom;}
.userenrolment .col_enrol .enrolment {float:left;padding:3px;margin:3px;}
.userenrolment .col_enrol .enrolment a {float:right;margin-left:3px;}
#page-enrol-users .enrol_user_buttons {float:right;}
#page-enrol-users .enrol_user_buttons .enrolusersbutton {margin-left:1em;display:inline;}
#page-enrol-users .enrol_user_buttons .enrolusersbutton div,
#page-enrol-users .enrol_user_buttons .enrolusersbutton form {display:inline;}
#page-enrol-users .enrol_user_buttons .enrolusersbutton input {padding-left:6px;padding-right:6px;}
#page-enrol-users.dir-rtl .col_userdetails .subfield_picture {float: right;}

/**
* Overide for RTL layout
**/
.dir-rtl .headermain {float:right;}
.dir-rtl .headermenu {float:left;}
.dir-rtl .breadcrumb {float:right;}
.dir-rtl .navbutton {float: left;}
.dir-rtl .breadcrumb ul li { float: right; margin-left: 5px;}
.dir-rtl .mform .fitem .fitemtitle {float:right;}
.dir-rtl .loginbox .loginform .form-label {float:right;text-align:left;}
.dir-rtl .loginbox .loginform .form-input {text-align: right;}
.dir-rtl .yui3-menu-hidden {left: 0px;}
#page-admin-roles-define.dir-rtl #rolesform .felement {margin-right: 180px;}
#page-message-edit.dir-rtl table.generaltable th.c0 {text-align: right;}

/**
 * Backup
 */
.backup-restore .backup-section {clear:both;border:1px solid #ddd;background-color:#f6f6f6;margin-bottom:1em;}
.backup-restore .backup-section > h2.header {padding:5px 6px;margin:0;border-bottom:1px solid #ddd;}
.backup-restore .backup-section .noticebox {margin:1em auto;width:60%;text-align:center;}
.backup-restore .backup-section .backup-sub-section {margin:0 25px;background-color:#f9f9f9;border:1px solid #f3f3f3;margin-bottom:1em;}
.backup-restore .backup-section .backup-sub-section h3 {text-align:right;border-bottom:1px solid #DDD;padding:5px 86% 5px 6px;margin:0;background-color:#e9e9e9;}
.backup-restore .backup-section.settings-section .detail-pair {margin:0;padding:0;width:50%;display:inline-block;}
.backup-restore .backup-section.settings-section .detail-pair .detail-pair-label {width:65%;}
.backup-restore .backup-section.settings-section .detail-pair .detail-pair-value {width:25%;}
.backup-restore .activitytable {width:60%;min-width:500px;}
.backup-restore .activitytable .modulename {width:100px;}
.backup-restore .activitytable .moduleincluded {width:50px;}
.backup-restore .activitytable .userinfoincluded {width:50px;}
.backup-restore .detail-pair {}
.backup-restore .detail-pair-label {display:inline-block;width:25%;padding:8px;margin:0;text-align:right;font-weight:bold;color:#444;vertical-align:top;}
.backup-restore .detail-pair-value {display:inline-block;width:65%;padding:8px;margin:0;}
.backup-restore .detail-pair-value > .sub-detail {display:block;color:#1580B6;margin-left:2em;font-size:90%;font-style: italic;}
.backup-restore > .singlebutton {text-align:right;}
.path-backup .mform .fgroup .proceedbutton {float:right;margin-right:1%;}

.restore-course-search .rcs-results {width:70%;min-width:400px;border:1px solid #ddd;margin:5px 0;}
.restore-course-search .rcs-results table {width:100%;margin:0;border-width:0;}
.restore-course-search .rcs-results table .no-overflow {max-width:600px;}
.restore-course-search .rcs-results .paging {text-align:left;margin:0;background-color:#eee;padding:3px;}

.restore-course-category .rcs-results {width:70%;min-width:400px;border:1px solid #ddd;margin:5px 0;}
.restore-course-category .rcs-results table {width:100%;margin:0;border-width:0;}
.restore-course-category .rcs-results table .no-overflow {max-width:600px;}
.restore-course-category .rcs-results .paging {text-align:left;margin:0;background-color:#eee;padding:3px;}

.corelightbox {background-color:#CCC;position:absolute;top:0;left:0;width:100%;height:100%;text-align:center;}
.corelightbox img {position:fixed;top:50%;}

/**
 * IE - Overide for RTL layout
 */
.ie.dir-rtl .mform .fitem .felement {margin-right:0;text-align:right;float:right;}

.mod-indent-1 {margin-left:20px;}
.mod-indent-2 {margin-left:40px;}
.mod-indent-3 {margin-left:60px;}
.mod-indent-4 {margin-left:80px;}
.mod-indent-5 {margin-left:100px;}
.mod-indent-6 {margin-left:120px;}
.mod-indent-7 {margin-left:140px;}
.mod-indent-8 {margin-left:160px;}
.mod-indent-9 {margin-left:180px;}
.mod-indent-10 {margin-left:200px;}
.mod-indent-11 {margin-left:220px;}
.mod-indent-12 {margin-left:240px;}
.mod-indent-13 {margin-left:260px;}
.mod-indent-14 {margin-left:280px;}
.mod-indent-15,
.mod-indent-huge {margin-left:300px;}

.dir-rtl .mod-indent-1 {margin-right:20px;margin-left:0;}
.dir-rtl .mod-indent-2 {margin-right:40px;margin-left:0;}
.dir-rtl .mod-indent-3 {margin-right:60px;margin-left:0;}
.dir-rtl .mod-indent-4 {margin-right:80px;margin-left:0;}
.dir-rtl .mod-indent-5 {margin-right:100px;margin-left:0;}
.dir-rtl .mod-indent-6 {margin-right:120px;margin-left:0;}
.dir-rtl .mod-indent-7 {margin-right:140px;margin-left:0;}
.dir-rtl .mod-indent-8 {margin-right:160px;margin-left:0;}
.dir-rtl .mod-indent-9 {margin-right:180px;margin-left:0;}
.dir-rtl .mod-indent-10 {margin-right:200px;margin-left:0;}
.dir-rtl .mod-indent-11 {margin-right:220px;margin-left:0;}
.dir-rtl .mod-indent-12 {margin-right:240px;margin-left:0;}
.dir-rtl .mod-indent-13 {margin-right:260px;margin-left:0;}
.dir-rtl .mod-indent-14 {margin-right:280px;margin-left:0;}
.dir-rtl .mod-indent-15,
.dir-rtl .mod-indent-huge {margin-right:300px;margin-left:0;}

.dir-rtl .felement.feditor select {margin-right:18.75%;margin-left:auto;}
.dir-rtl .mform .fitem .felement {margin-right: 16%;margin-left:auto;}

/* Resourcelib mp3 player size: only width could be changed here, height hardcoded in JS */
.resourcecontent .resourcemediaplugin_mp3 object {height:25px; width: 600px}
/** Large resource images should avoid hidden overflow **/
.resourceimage {max-width: 100%;}

/*
Fix for SubScript & SuperScript
------------------------------*/
sub {vertical-align: sub;}
sup {vertical-align: super;}

/** Fix YUI 2 Treeview for Right to left languages **/
.dir-rtl .ygtvtn,
.dir-rtl .ygtvtm,
.dir-rtl .ygtvtmh,
.dir-rtl .ygtvtmhh,
.dir-rtl .ygtvtp,
.dir-rtl .ygtvtph,
.dir-rtl .ygtvtphh,
.dir-rtl .ygtvln,
.dir-rtl .ygtvlm,
.dir-rtl .ygtvlmh,
.dir-rtl .ygtvlmhh,
.dir-rtl .ygtvlp,
.dir-rtl .ygtvlph,
.dir-rtl .ygtvlphh,
.dir-rtl .ygtvdepthcell,
.dir-rtl .ygtvok,
.dir-rtl .ygtvok:hover,
.dir-rtl .ygtvcancel,
.dir-rtl .ygtvcancel:hover {width:18px; height:22px; background-image:url(image.php?theme=aardvark&image=yui2-treeview-sprite-rtl&component=theme); background-repeat: no-repeat; cursor:pointer;}

.dir-rtl .ygtvtn {background-position: 0 -5600px;}
.dir-rtl .ygtvtm {background-position: 0 -4000px;}
.dir-rtl .ygtvtmh,
.dir-rtl .ygtvtmhh {background-position: 0 -4800px;}
.dir-rtl .ygtvtp {background-position: 0 -6400px;}
.dir-rtl .ygtvtph,
.dir-rtl .ygtvtphh {background-position: 0 -7200px;}
.dir-rtl .ygtvln {background-position: 0 -1600px;}
.dir-rtl .ygtvlm {background-position: 0 0;}
.dir-rtl .ygtvlmh,
.dir-rtl .ygtvlmhh {background-position: 0 -800px;}
.dir-rtl .ygtvlp {background-position: 0 -2400px;}
.dir-rtl .ygtvlph,
.dir-rtl .ygtvlphh {background-position: 0 -3200px}
.dir-rtl .ygtvdepthcell {background-position: 0 -8000px;}
.dir-rtl .ygtvok {background-position: 0 -8800px;}
.dir-rtl .ygtvok:hover {background-position: 0 -8844px;}
.dir-rtl .ygtvcancel {background-position: 0 -8822px;}
.dir-rtl .ygtvcancel:hover {background-position: 0 -8866px;}

.dir-rtl #yui-gen4.yui-layout-unit-left  {left:500px !important;}
.dir-rtl #yui-gen6.yui-layout-unit-center {left:0px !important;}
.dir-rtl.yui-skin-sam .yui-panel .hd {text-align:left;}
.dir-rtl .yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-bd {text-align:right;}

/** Fix TinyMCE editor right to left **/
.dir-rtl .clearlooks2.ie9 .mceAlert .mceMiddle span,.dir-rtl .clearlooks2 .mceConfirm .mceMiddle span {top: 44px;}
.dir-rtl .o2k7Skin table,
.dir-rtl .o2k7Skin tbody,
.dir-rtl .o2k7Skin a,
.dir-rtl .o2k7Skin img,
.dir-rtl .o2k7Skin tr,
.dir-rtl .o2k7Skin div,
.dir-rtl .o2k7Skin td,
.dir-rtl .o2k7Skin iframe,
.dir-rtl .o2k7Skin span,
.dir-rtl .o2k7Skin *,
.dir-rtl .o2k7Skin .mceText,
.dir-rtl .o2k7Skin .mceListBox .mceText {text-align:right;}

.path-rating .ratingtable {width:100%;margin-bottom:1em;}
.path-rating .ratingtable th.rating {width:100%;}
.path-rating .ratingtable td.rating,
.path-rating .ratingtable td.time {white-space:nowrap; text-align:center;}

/* Fix for ordered and unordered list in course topic summary & course weekly summary */

.course-content ul.weeks .content .summary ul,
.course-content ul.topics .content .summary ul {list-style: disc outside none;}

.course-content ul.weeks .content .summary ol,
.course-content ul.topics .content .summary ol {list-style: decimal outside none;}

.dir-rtl #adminsettings #id_s__pathtodu,
.dir-rtl #adminsettings #id_s__aspellpath,
.dir-rtl #adminsettings #id_s__pathtodot,
.dir-rtl #adminsettings #id_s__supportemail,
.dir-rtl #adminsettings #id_s__supportpage,
.dir-rtl #adminsettings #id_s__sessioncookie,
.dir-rtl #adminsettings #id_s__sessioncookiepath,
.dir-rtl #adminsettings #id_s__sessioncookiedomain,
.dir-rtl #adminsettings #id_s__proxyhost,
.dir-rtl #adminsettings #id_s__proxyuser,
.dir-rtl #adminsettings #id_s__proxypassword,
.dir-rtl #adminsettings #id_s__proxybypass,
.dir-rtl #adminsettings #id_s__jabberhost,
.dir-rtl #adminsettings #id_s__jabberserver,
.dir-rtl #adminsettings #id_s__jabberusername,
.dir-rtl #adminsettings #id_s__jabberpassword,
.dir-rtl #adminsettings #id_s__additionalhtmlhead,
.dir-rtl #adminsettings #id_s__additionalhtmltopofbody,
.dir-rtl #adminsettings #id_s__additionalhtmlfooter,
.dir-rtl #adminsettings #id_s__docroot,
.dir-rtl #adminsettings #id_s__filter_tex_latexpreamble,
.dir-rtl #adminsettings #id_s__filter_tex_latexbackground,
.dir-rtl #adminsettings #id_s__filter_tex_pathlatex,
.dir-rtl #adminsettings #id_s__filter_tex_pathdvips,
.dir-rtl #adminsettings #id_s__filter_tex_pathconvert,
.dir-rtl #adminsettings #id_s__blockedip,
.dir-rtl #adminsettings #id_s__pathtoclam,
.dir-rtl #adminsettings #id_s__quarantinedir,
.dir-rtl #adminsettings #id_s__sitepolicy,
.dir-rtl #adminsettings #id_s__sitepolicyguest,
.dir-rtl #adminsettings #id_s__cronremotepassword,
.dir-rtl #adminsettings #id_s__allowedip,
.dir-rtl #adminsettings #id_s__blockedip,
.dir-rtl #adminsettings #id_s_enrol_meta_nosyncroleids,
.dir-rtl #adminsettings #id_s_enrol_ldap_host_url,
.dir-rtl #adminsettings #id_s_enrol_ldap_ldapencoding,
.dir-rtl #adminsettings #id_s_enrol_ldap_bind_dn,
.dir-rtl #adminsettings #id_s_enrol_ldap_bind_pw,
.dir-rtl #adminsettings #admin-emoticons .form-text,
.dir-rtl #adminsettings #admin-role_mapping input[type=text],
.dir-rtl #adminsettings #id_s_enrol_paypal_paypalbusiness,
.dir-rtl #adminsettings #id_s_enrol_flatfile_location,
#page-admin-setting-enrolsettingsflatfile.dir-rtl input[type=text],
#page-admin-setting-enrolsettingsdatabase.dir-rtl input[type=text],
#page-admin-auth-db.dir-rtl input[type=text] {direction: ltr;}

#page-admin-setting-enrolsettingsflatfile.dir-rtl .informationbox {direction: ltr;text-align: left;}

#page-admin-grade-edit-scale-edit.dir-rtl .error input#id_name {margin-right: 170px;}
