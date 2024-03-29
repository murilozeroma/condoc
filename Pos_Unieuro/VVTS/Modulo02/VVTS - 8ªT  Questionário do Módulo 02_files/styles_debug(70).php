/** Path: parents canvas core **/
html {
    height: 100%;
}

body {
    min-height: 100%;
    margin: 0;
    padding: 0;
}

#page {
    font-size: 108%;
    line-height: 1.4;
}

.sitetopic {
    border: none;
}

.headingblock {
    border-bottom: 1px solid #ddd;
    font-size: 1.3em;
    color: #333;
}

#notice {
    text-align: center;
}

.noticebox,
.expired,
.notopenyet,
.notifysuccess,
.notifyproblem,
.errorbox,
.continuebutton,
.singlebutton,
.buttons,
.singleselect {
    text-align: center;
    margin: 1em 0;
}

.navbutton .singlebutton {
    margin: 0;
}

.generalbox {
    border-color: #ddd;
}

.noticebox .generalbox {
    border: none;
    margin:2em 0;
}

.expired,
.notopenyet {
    border: none;
    color: #f00;
}

.buttons .singlebutton input {
    margin: 0 1em;
}

.initialbar {
    text-align: center;
}

.side-pre-only #page-content #region-main-box #region-post-box #region-main-wrap #region-main {
    padding-right: 0;
}

.side-post-only #page-content #region-main-box #region-post-box #region-main-wrap #region-main {
    padding-left: 0;
}

input[type="checkbox"],
input[type="radio"] {
    margin-right: 7px;
}

/* Login
-------------------------*/

.loginbox {
    margin: 15px 25%;
}

.loginbox .loginerrors {
    color: #f00;
}

.loginbox .loginform {
    margin: 15px auto 0;
    width: 175px;
}

.loginbox .loginform .form-label {
    float: none;
    width: 100%;
    margin: 0 auto;
    text-align: left;
}
.dir-rtl .loginbox .loginform .form-label {
    text-align: right;
}
.loginbox .loginform .form-input {
    float: none;
    width: 100%;
    margin: 0 auto;
}

.loginbox .loginform .form-input #username,
.loginbox .loginform .form-input #password {
    width: 97%;
    padding: 3px;
    font-size: 1.1em;
    font-family: Helvetica, Arial, sans-serif;
    border: 2px solid #ddd;
    margin: 0 0 5px;
    color: #333;
}

.loginbox .loginform .form-input #loginbtn {
    margin: 0.5em auto;
}

.loginbox .forgetpass {
    margin: 1em 0 0;
    font-size: 0.95em;
}

.loginbox.twocolumns {
    width: 90%;
    margin-left: 5%;
}

.loginbox .guestsub {
    border-top: 1px solid #DDDDDD;
    margin: 5px 20%
}

.loginbox.twocolumns .loginpanel {
    border-color: #ddd;
    padding-right: 0.5%;
}

.loginbox.twocolumns .signuppanel {
    padding-left: 1%;
    width: 48%;
}

#page-course-loginas #notice {
    border: none;
}

#page-login-forgot_password .generalbox {
    margin: 0 auto 1.5em;
    width: 75%;
    padding: 10px;
}

#page-login-signup .mform {
    width: 85%;
    margin: 0 auto;
}

#page-login-signup .mform .fitem .fitemtitle {
    width: 20%;
}

#page-login-signup .mform .fitem .felement {
    margin-left: 21%;
}

/* Calendar
-------------------------*/

.calendarlayout .sidecalendar {
    padding-left: 15px;
}

.minicalendarblock h3 {
    text-align: center;
    font-size: 1.2em;
}

.maincalendar .header .buttons {
    margin: 0;
}

.maincalendar .calendarmonth td,
.maincalendar .calendarmonth th {
    border-color: #ddd;
    border-style: dotted;
    border-width: 1px;
}

.maincalendar .calendarmonth th,
.minicalendar th {
    background: none;
}

.maincalendar .calendar-controls {
    padding: 10px 5px 0;
}

.maincalendar .calendar-controls .previous,
.maincalendar .calendar-controls .current,
.maincalendar .calendar-controls .next {
    float: left;
}

.maincalendar .calendar-controls .current {
    margin: 0 auto;
    font-size: 1.35em;
    text-align: center;
    line-height: 1;
    font-weight: bold;
}

.maincalendar .calendar-controls .next {
    text-align: right;
}

.maincalendar .filters table td {
    font-size: 0.9em;
}

.maincalendar .bottom {
    margin-top: 25px;
}

.minicalendar th abbr {
    border: none;
}

.calendar_filters td,
.minicalendar td,
.minicalendar th {
    padding: 2px;
    font-size: 0.85em;
}

#page-calendar-view .eventlist {
    padding-top: 1em;
}

#page-calendar-view .eventlist .event {
    border: none;
}

#page-calendar-view .eventlist .event .topic {
    border-width: 1px 1px 0;
    border-color: #ddd;
    border-style: solid;
    background: #f5f5f5;
}

#page-calendar-view .eventlist .event .topic .name {
    font-weight: bold;
}

#page-calendar-view .eventlist .event .description {
    border-width: 0 1px 1px;
    border-style: solid;
    border-color: #ddd;
}

.calendartable .duration ul {
    border-width: 2px 0;
    border-style: solid;
}

.calendartable .duration_user ul {
    border-color: #dce7ec;
}

.calendartable .duration_global ul {
    border-color: #d6f8cd;
}

.calendartable .duration_group ul {
    border-color: #fee7ae;
}

.calendartable .duration_course ul {
    border-color: #ffd3bd;
}

.calendartable .duration .events-underway {
    color: #666;
}

.minicalendar {
    border-collapse: separate;
}

.minicalendar td,
.minicalendar th {
    font-size: 0.85em;
    padding: 0 2px;
    border-width: 2px 0;
    border-color: #fff;
}

.minicalendar .calendar_event_user,
.minicalendar .duration_user {
    border-color: #dce7ec;
}

.minicalendar .calendar_event_course,
.minicalendar .duration_course {
    border-color: #ffd3bd;
}

.minicalendar .calendar_event_global,
.minicalendar .duration_global {
    border-color: #d6f8cd;
}

.minicalendar .calendar_event_group,
.minicalendar .duration_group {
    border-color: #fee7ae;
}

/* User
-------------------------*/

.userinfobox {
    border-color: #ddd;
    padding: 0
}

.userinfobox .content {
    text-align: left;
    padding-left:10px
}

.userinfobox .links {
    vertical-align: top;
    background: #f4f4f4;
    padding-left: 10px;
}

.userinfobox .links a {
    display: block;
    text-align: left;
}

.profilepicture {
    float: left;
    margin-right: 10px;
}

.descriptionbox {
    margin-left: 110px;
    border: 1px solid #ddd;
    padding: 10px;
}

.path-user .description {
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.userprofile .list {
    margin-top: 10px;
}

.userprofile .list td {
    padding-top: 3px;
    padding-bottom: 3px;
}

.userprofile .list .c0 {
    padding-left: 0;
    font-weight: bold;
}

#page-user-view .buttons {
    text-align: center;
    width: 70%;
    margin: 0 auto;
}

#page-user-view .buttons div {
    padding: 0 0 10px;
}

#page-user-index .controls {
    width: 100%
}

#page-user-index .controls .singleselect {
    margin: 0;
}

.rolesform {
    text-align: center;
    margin: 1em 0;
}

#participantsform {
    text-align: center;
}

#participants {
    width: 100%;
    margin: 1em auto 0;
}

#participants th,
#participants td {
    vertical-align: middle;
}

.groupinfobox {
    border-color: #DDDDDD;
    width: 60%;
    margin-left: 20%;
    margin-right: 20%;
}

/* Notes
------------------------*/

.path-notes .generalbox {
    border: none;
}

/* Roles
------------------------*/

.path-admin-roles .generaltable {
    /* width: 65%; hiding because it's causing problems on role/assign */
}

.path-admin-roles .generaltable th {
    vertical-align: middle;
}

.path-admin-roles .generaltable .lastcol {
    width: 15%;
}

.path-admin-roles .backlink {
    text-align: center;
}

/* Blogs
------------------------*/

.blog_entry .audience {
    color: #444;
    margin: 0 0 0.5em;
    font-size: 0.9em;
}

.blog_entry .tags {
    margin-bottom: 0.5em;
}

/* Tags
------------------------*/

#big-tag-cloud-box {
    padding: 10px;
}

#tag-management-box {
    text-align: center;
}

.tag-management-form {
    border: none;
    padding: 0 0 1em;
}

#tag-management-list {
    margin: 1em 0
}

#page-tag-index #tag-blogs {
    border-width: 0 0 1px;
    width: 65%;
    margin: 1em auto;
}

#tagblogentries {
    margin: 0 0 1em;
}

#tagblogentries li {
    list-style: none;
    padding: 0.25em 0;
    margin: 0
}

#big-tag-cloud-box {
    border: none;
}

#tag-user-table {
    width: 95%;
    margin: 0 auto;
    border-width: 0 0 1px;
}

.managelink {
    text-align: right;
}

#page-tag-index .headingblock {
    text-align: center;
    margin-bottom: 0;
}

#page-tag-index #tag-management-box {
    border-bottom: 1px solid #ddd;
    padding: 4px 0;
}

#page-tag-index .relatedpages {
    text-align: center;
}

#page-tag-manage .lastinitial {
    margin-bottom: 0.5em;
}

#page-tag-manage .green {
    text-align: center;
    padding: 0 0 1em;
}

/* YUI overlays
------------------------*/
#helppopupbox {
    z-index: 99999 !important;
}


/* Embedded Pages
------------------------*/

.pagelayout-embedded {
    text-align: center;
    background-color: #fff;
    background-image: none;
}

.pagelayout-embedded #content {
    padding-top: 30px;
}

/* Forms
-----------------------*/

.mform .fsubmit {
    text-align: center;
    padding: 2px;
}

.form-label .form-shortname {
    font-size: 0.8em;
    color: #777;
}

.form-description {
    font-size: 0.95em;
    color: #444;
}

.path-backup .mform .hidden .fitem .fgroup {
    text-align: left;
}

.path-backup .mform .grouped_settings {
    margin:1em;
}
.path-backup .mform .grouped_settings .grouped_settings {
    margin:0;
}

/* Comments
-----------------------*/

.comment-list li {
    background: #eee !important;
    list-style: none;
}

/* Gradebook
----------------------*/

.path-grade h1.headermain {
    text-align: left; /* Strangely necessary TODO: find bug */
}

.gradestable .lastrow th.header {
    background: #ddd;
}

.gradestable .lastrow td.cell {
    background: #eee !important;
}

.user-grade td.b1t,
.user-grade td.baggt {
    background: #ddd !important;
}

#page-grade-edit-scale-index .generaltable {
    margin: 1em auto;
}

#page-grade-report-grader-preferences .generalbox {
    border: none;
}

.path-grade-report-grader form {
    text-align: left;
}

/* Footer
-----------------------*/

#page-footer .logininfo {
    padding: 1em 0;
}

#page-footer .homelink,
#page-footer .sitelink {
    padding: 1em 0;
}

.homelink a {
    text-decoration: none;
    border-top: 1px solid #cecece;
    border-bottom: 2px solid #8a8a8a;
    border-left: 1px solid #cecece;
    border-right: 2px solid #8a8a8a;
}

.homelink a:hover {
    text-decoration: none;
    border-bottom: 1px solid #cecece;
    border-top: 2px solid #8a8a8a;
    border-right: 1px solid #cecece;
    border-left: 2px solid #8a8a8a;
}

/* Enrol
-------------------------*/

.userenrolment {
    font-size:90%;
    border:1px solid #999;
}
.userenrolment tr.r0 {
    background-color: #F9F9F9;
}
.userenrolment tr.r1 {
    background-color: #F3F3F3;
}
.userenrolment td {
    border-width: 1px;
    border-style: solid;
    border-top-color: #F6F6F6;
    border-right-color: #EEE;
    border-bottom-color: #E9E9E9;
    border-left-color: #F3F3F3;
}
.userenrolment td.c0 {
    border-left-color:#999;
}
.userenrolment td.c4 {
    border-right-color:#999;
}
.userenrolment .col_userdetails {
    padding:3px;
    min-width:35%;
}
.userenrolment .col_role .roles {
    position:relative;
}
.userenrolment .col_role .role {
    line-height: 10px;
    font-size: 10px;
}
.userenrolment .col_role .role a img {
    height:8px;
}
.userenrolment .col_role .addrole {
    background-color: #DDD;
    border: 1px outset #EEE;
    -moz-border-radius: 5px;
}
.userenrolment .col_group {
    max-width: 300px;
}
.userenrolment .col_group .group {
    line-height:10px;
    font-size:10px;
}
.userenrolment .col_group .group a img {
    height:8px;
}
.userenrolment .col_group .addgroup {
    background-color:#DDD;
    border:1px outset #EEE;
    -moz-border-radius:5px;
}
.userenrolment .col_enrol {
    max-width:300px;
}
.userenrolment .col_enrol .enrolment {
    border:1px outset #E6E6E6;
    background-color:#EEE;
    line-height:10px;
    font-size:10px;
    -moz-border-radius:5px;
}
.path-enrol .enrolusersbutton,
.path-enrol .enrolcohortbutton {
    float:left;
}
.path-enrol .enrolusersbutton.instance1,
.path-enrol .enrolcohortbutton.instance1 {
    float:right;
}

/* Registration
-------------------------*/


#page-admin-registration-hubselector .registration_textfield {
    width: 400px;
}

/* Redirect
-------------------------*/

.pagelayout-redirect #content {
    text-align: center;
    margin: 10% auto;
}