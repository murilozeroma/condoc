/** Path: parents canvas pagelayout **/
#page-content #region-main-box {
    left: 210px; /* Width of left sideblock */
}

#page-content #region-post-box {
    margin-left: -420px; /* Twice width of left sideblock */
    padding-top: 5px;
}

#page-content #region-main {
    margin-left: 420px; /* Twice width of left sideblock */
    padding: 0 15px; /* Padding around middle column */
}

#page-content #region-pre {
    left: 210px; /* Width of left sideblock */
    width: 210px; /* Width of left sideblock */
}

#page-content #region-post {
    width: 210px; /* Width of right sideblock */
}

#page-content #region-main-box .region-content {
    padding: 10px 0 0;
}

/** Only side pre **/

.side-pre-only #page-content #region-post-box {
    margin-left: -210px;
}

.side-pre-only #page-content #region-main {
    margin-left: 210px;
}

/** Only side post **/

.side-post-only #page-content #region-post-box {
    margin-left: -210px;
}

.side-post-only #page-content #region-main {
    margin-left: 210px;
}

.has_dock.side-post-only .page-middle #region-main-box #region-post-box #region-main-wrap #region-main {
    margin-left: 210px;
}

/** Moving blocks when side-post-only **/

.blocks-moving.side-post-only #page-content #region-main-box {
    left: 210px;
}

.blocks-moving.side-post-only #page-content #region-post-box {
    margin-left: -420px;
}

.blocks-moving.side-post-only #page-content #region-main {
    margin-left: 420px;
}

.blocks-moving.side-post-only #page-content #region-pre {
left: 210px;
    width: 210px;
}

.blocks-moving.side-post-only #page-content #region-post {
    width: 210px;
}