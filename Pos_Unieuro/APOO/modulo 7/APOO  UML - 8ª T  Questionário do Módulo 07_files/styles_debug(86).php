/** Path: parents base grade **/
/*** Grades ***/
.allcoursegrades {width: 100%;text-align: right;padding: 4px 0px 5px 0px;}

.path-grade-edit .buttons {text-align:center;}
.path-grade-edit-tree .idnumber {margin-left: 15px;}
.path-grade-edit-tree .movetarget {position: relative;width: 80px;height: 16px;}
.path-grade-edit-tree ul#grade_tree {width: auto;}
.path-grade-edit-tree ul#grade_tree li {list-style: none;}
.path-grade-edit-tree ul#grade_tree li.category {margin-bottom: 6px;}
.path-grade-edit-tree .iconsmall {margin-left: 4px;}

#grade-report-toggles {text-align: center;}
#grade-aggregation-help dt {margin-top: 15px;}
#grade-aggregation-help dd.example {margin-top: 7px;}
#grade-aggregation-help code {display: block;margin-top: 7px;}
.gradeexportlink {padding: 2em;text-align: center;}

.gradetreebox {margin-top:10px;overflow-x:auto;overflow-y:hidden;}
.gradetreebox table {font-size: 0.8em;width: 100%;}
.gradetreebox td.colspan,
.gradetreebox tr.category .cell {background-color: #DDD;}
.gradetreebox th.actions {white-space: nowrap;width: 80px;}
.gradetreebox td.name {white-space: nowrap;}
.gradetreebox td.name h4 {display: inline;}
.gradetreebox td.range {white-space: nowrap;}
.gradetreebox span.actionlink {color: blue;}
.gradetreebox span.actionlink:hover {text-decoration: underline;cursor: pointer;}
.gradetreebox img.iconsmall {margin-left: 4px;}
.gradetreebox img.icon {margin-right: 5px;}
.gradetreebox #gradetreesubmit {margin-bottom:1em;text-align: center;}
.gradetreebox .hidden {display: none;}

/*adjustments to grader report (with static student cols) to make things line up in IE and Safari*/
#page-grade-report-grader-index .right_scroller #user-grades td {padding-top:0;padding-bottom:2px;}
#page-grade-report-grader-index #fixed_column td {padding-top:0;padding-bottom:2px;}

/** Advanced grading **/
#page-grade-grading-manage #activemethodselector {text-align:center;margin-bottom:1em;}
#page-grade-grading-manage #activemethodselector select {margin:0px 1em;}
#page-grade-grading-manage .actions {text-align:center;}
#page-grade-grading-manage .action {display:inline-block;width: 150px;background-color:#EEE;border:2px solid #CCC;
    margin:0.5em;padding:0.5em;text-align:center;-moz-border-radius:5px}
#page-grade-grading-manage .action:hover {text-decoration:none;background-color:#F6F6F6;}
#page-grade-grading-manage #actionresultmessagebox {background-color:#D2EBFF;width:60%;margin:1em auto 1em auto;text-align:center;
    padding:0.5em;border:2px solid #CCC;text-align:center;-moz-border-radius:5px;position:relative}
#page-grade-grading-manage #actionresultmessagebox span {position:absolute;right:0px;top:-1.2em;color:#666;font-size:80%}
#page-grade-grading-manage .definition-name .status {font-weight:normal;text-transform:uppercase;font-size:60%;padding:0.25em;border:1px solid #EEE;-moz-border-radius:5px;}
#page-grade-grading-manage .definition-name .status.ready {background-color:#e7f1c3;border-color:#AAEEAA;}
#page-grade-grading-manage .definition-name .status.draft {background-color:#f3f2aa;border-color:#EEEE22;}
#page-grade-grading-manage .definition-preview {width:50%;margin:1em auto;border:1px solid #EEE; padding: 1em;}
#page-grade-grading-pick .templatesearchform {}
#page-grade-grading-pick .template-name {clear: both; padding:3px; background-color: #F6F6F6;}
#page-grade-grading-pick .template-name .type {font-weight:normal;text-transform:uppercase;font-size:60%;padding:0.25em;border:1px solid #EEE;-moz-border-radius:5px;}
#page-grade-grading-pick .template-name .type.shared {background-color:#e7f1c3;border-color:#AAEEAA}
#page-grade-grading-pick .template-name .type.ownform {background-color:#d2ebff;border-color:#AACCEE}
#page-grade-grading-pick .template-description {margin-bottom: 1em; padding: 0px 2em 0px 0px; margin-right:51%;}
#page-grade-grading-pick .template-preview {width:50%; float:right; border:1px solid #EEE; padding: 1em; margin-bottom: 1em;}
#page-grade-grading-pick .template-actions {margin-bottom: 1em; padding: 0px 2em 0px 0px; margin-right:51%;}
#page-grade-grading-pick .template-actions .action {display:inline-block;margin:0.25em;padding:0.25em;border:2px solid transparent;}
#page-grade-grading-pick .template-actions .action.pick {background-color:#EEE;border:2px solid #CCC;-moz-border-radius:3px}
#page-grade-grading-pick .template-actions .action:hover {text-decoration:none;background-color:#F6F6F6;border:2px solid #CCC;-moz-border-radius:3px}
#page-grade-grading-pick .template-actions .action .action-text {display:inline;}
#page-grade-grading-pick .template-actions .action .action-icon {margin:0px 3px;}
#page-grade-grading-pick .template-preview-confirm {width:50%;margin:1em auto;border:1px solid #EEE; padding: 1em;}
#page-grade-grading-pick .singlebutton {clear:both;}