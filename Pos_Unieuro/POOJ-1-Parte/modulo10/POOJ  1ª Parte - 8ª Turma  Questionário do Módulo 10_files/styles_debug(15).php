/** Path: plugins mod_forum **/
/**
 * Structure of a forum post
 * div.forumpost(.read.unread)
 *     div.header.row
 *         div.picture.left
 *         div.topic(.starter)
 *             div.subject
 *             div.author
 *     div.row
 *         div.side.left
 *         div.content-mask
 *             div.content
 *                 div.attachments
 *                 div.posting(.shortenedpost|.fullpost)
 *                     // message
 *                 div.attachedimages
 *                     // attachedimages
 *     div.row
 *         div.left
 *         div.options
 *             div.commands
 *             div.forum-post-rating
 *             div.link
 *             div.footer
 */

.forumpost {display: block;position:relative;margin:0 0 1em 0;padding:0;border:1px solid #000;max-width:100%;}
.forumpost .row {width:100%;position:relative;}
.forumpost .row .left {float:left;width: 43px;overflow:hidden;}
.forumpost .row .left .grouppictures a {text-align:center;display:block;margin:6px 2px 0 2px;}
.forumpost .row .left .grouppicture {width:20px;height:20px;}
.forumpost .row .topic,
.forumpost .row .content-mask,
.forumpost .row .options {margin-left:43px;}
.forumpost .picture img {margin:4px;}
.forumpost .options .commands,
.forumpost .content .attachments,
.forumpost .options .footer,
.forumpost .options .link {text-align:right;}
.forumpost .options .forum-post-rating {float:left;}
.forumpost .content .posting {overflow:auto;max-width:100%;}
.forumpost .content .attachedimages img {max-width:100%;}

.dir-rtl .forumpost .row .topic,
.dir-rtl .forumpost .row .content-mask,
.dir-rtl .forumpost .row .options {margin-right:43px;margin-left:0;}
.dir-rtl .forumpost .row .left {float:right;}
.dir-rtl.path-mod-forum .indent {margin-right:30px;margin-left:0;}

.path-mod-forum .forumolddiscuss,
#page-mod-forum-search .c0 {text-align:right;}
.path-mod-forum .indent {margin-left: 30px;}
.path-mod-forum .forumheaderlist {width: 100%;border-width:1px;border-style:solid;border-collapse:separate;margin-top: 10px;}
.path-mod-forum .forumheaderlist td {border-width:1px 0px 0px 1px;border-style:solid;}
.path-mod-forum .forumheaderlist .picture {width: 35px;}
.path-mod-forum .forumheaderlist .discussion .starter {vertical-align: middle;}
.path-mod-forum .forumheaderlist .discussion .lastpost {white-space: nowrap;text-align: right;}
.path-mod-forum .forumheaderlist .replies,
.path-mod-forum .forumheaderlist .discussion .author {white-space: nowrap;}

/** Styles for subscribers.php */
#page-mod-forum-subscribers .subscriberdiv,
#page-mod-forum-subscribers .subscribertable {width:100%;vertical-align:top;}
#page-mod-forum-subscribers .subscribertable tr td {vertical-align:top;}
#page-mod-forum-subscribers .subscribertable tr td.actions {width:16%;padding-top:3em;}
#page-mod-forum-subscribers .subscribertable tr td.actions .actionbutton {margin:0.3em 0;padding:0.5em 0;width:100%;}
#page-mod-forum-subscribers .subscribertable tr td.existing,
#page-mod-forum-subscribers .subscribertable tr td.potential {width:42%;}

/** Styles for discuss.php **/
#page-mod-forum-discuss .discussioncontrols {width:100%;margin:5px;}
#page-mod-forum-discuss .discussioncontrols .discussioncontrol {width:33%;float:left;}
#page-mod-forum-discuss .discussioncontrol.exporttoportfolio {text-align:left;}
#page-mod-forum-discuss .discussioncontrol.displaymode {text-align:center;}
#page-mod-forum-discuss .discussioncontrol.movediscussion {float:right;width:auto;text-align:right;padding-right:10px;}
#page-mod-forum-discuss .discussioncontrol.movediscussion .movediscussionoption {}

/** Styles for view.php **/
#page-mod-forum-view .forumaddnew {margin-bottom: 20px;}
#page-mod-forum-view .groupmenu {float: left;text-align:left;white-space: nowrap;}
#page-mod-forum-index .subscription,
#page-mod-forum-view .subscription {float: right;text-align:right;white-space: nowrap;margin: 5px 0;}

/** Styles for search.php */
#page-mod-forum-search .introcontent {padding: 15px;font-weight:bold;}

#page-mod-forum-index .unread img,
#page-mod-forum-view .unread img {margin-left: 5px;}

/** Unknown Styles ??? */
#email .unsubscribelink {margin-top:20px;}
