/** Path: parents base pagelayout **/
/****
 * Three column floating div layout with 2,1,3 column order
 * Based on: http://matthewjamestaylor.com/blog/holy-grail-no-quirks-mode.htm
 * And:  http://matthewjamestaylor.com/blog/ultimate-3-column-holy-grail-pixels.htm
 *
 * #page
 *   #page-header
 *   #page-content
 *   |  #region-main-box
 *   |    #region-post-box
 *   |      #region-main-wrap
 *   |      |  #region-main
 *   |      |    .region-content
 *   |      #region-pre
 *   |      |  .region-content
 *   |      #region-post
 *   |      |  .region-content
 *   #page-footer
 *
 * The body tag may also contain one of three layout specific classes that describe
 * the regions of the page and allow us to theme more easily.
 *
 *   default (no class) = Content + side pre + side post
 *   side-pre-only      = Content + side pre
 *   side-post-only     = Content + side post
 *   content-only       = Content
 *
 ****/

body {margin:auto 0px;width:auto;}
#page {width:100%;position:relative;}
#page-header {float:left;width:100%;}
#page-content {clear:both;float:left;overflow:hidden;position:relative;width:100%;min-width:900px;}
#page-content #region-main-box {float:left;left:200px;position:relative;width:200%;}
#page-content #region-post-box {float:left;left:50%;margin-left:-400px;position:relative;width:100%;}
#page-content #region-main-wrap {float:right;position:relative;right:100%;width:50%;}
#page-content #region-main {margin-right:0px;margin-left:400px;overflow:hidden;}
#page-content #region-pre {float:left;left:200px;overflow:hidden;position:relative;width:200px;margin-left:-50%;}
#page-content #region-post {float:left;left:0px;overflow:hidden;position:relative;width:200px;}
#page-content .region-content {overflow:hidden;padding:10px;}
#page-footer {clear:both;float:left;width:100%;}

/** Only side pre **/
.side-pre-only #page-content #region-post-box {margin-left:-200px;}
.side-pre-only #page-content #region-main {margin-left:200px;}
.side-pre-only #page-content #region-pre {left:0px;}
.side-pre-only #page-content #region-post {width:0px;}

/** Only side post **/
.side-post-only #page-content #region-main-box {left:0px;}
.side-post-only #page-content #region-post-box {margin-left:-200px;}
.side-post-only #page-content #region-main {margin-left:200px;}
.side-post-only #page-content #region-pre {width:0px;}
.has_dock.side-post-only .page-middle #region-main {margin-left:200px;}

/** Moving block when side-post-only **/
.blocks-moving.side-post-only #page-content #region-main-box {left:200px;width:200%;}
.blocks-moving.side-post-only #page-content #region-post-box {margin-left:-400px;}
.blocks-moving.side-post-only #page-content #region-main {margin-left:400px;}
.blocks-moving.side-post-only #page-content #region-pre {left:200px;width:200px;}
.blocks-moving.side-post-only #page-content #region-post {left:0px;width:200px;}

/** No blocks whatsoever **/
.content-only #page-content {min-width:0;}
.content-only #page-content #region-main-box {left:0px;}
.content-only #page-content #region-post-box {margin-left:0px;}
.content-only #page-content #region-main {margin-left:0px;}
.content-only #page-content #region-pre {left:0;width:0px;}
.content-only #page-content #region-post {width:0;}

/** Stabalise some IE6 behaviour **/
.ie6 #region-pre .region-content,
.ie6 #region-post .region-content {padding:0 !important;width:100%;float:none;}
.ie6 #region-pre .region-content .block,
.ie6 #region-post .region-content .block {width:auto;padding:0;margin:10px;}

/** Report layout **/
.pagelayout-report #page {width:auto;position:relative;}
.pagelayout-report #page-header {float:none;}
.pagelayout-report #page-content {float:none;overflow:visible;width:auto;}
.pagelayout-report #report-main-content {float:left;width:100%;}
.pagelayout-report #report-main-content .region-content {margin-left:200px;}
.pagelayout-report #report-main-content .region-content table {background-color:#FFF;}
.pagelayout-report #report-region-wrap {width:0;float:right;position:relative;left:-100%;}
.pagelayout-report #report-region-pre {width:200px;}
.pagelayout-report #page-footer {float:none;}
.pagelayout-report #page-content .region-content {overflow:visible;}

/** Correct for content only **/
.pagelayout-report.content-only #report-main-content .region-content {margin-left:0;}

/** Correct for right to left languages **/
.dir-rtl.pagelayout-report #report-main-content .region-content {margin-left:0;margin-right:200px;}
.dir-rtl.pagelayout-report #report-region-wrap {left:0;}

/** Stabalise IE6 behaviour on the report layout **/
.ie6.pagelayout-report #report-main-content {float:none;width:auto;}
.ie6.pagelayout-report #report-region-wrap {float:none;width:200px;left:auto;position:absolute;top:0;}
.ie6.pagelayout-report #report-region-pre,
.ie6.pagelayout-report #report-region-pre .block {width:100%;}