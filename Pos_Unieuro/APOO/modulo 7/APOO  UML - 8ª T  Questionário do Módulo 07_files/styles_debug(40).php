/** Path: plugins block_settings **/
/** JavaScript state rules **/
.jsenabled .block_settings.dock_on_load,
.block_settings .block_tree_box .requiresjs {display:none;}
.jsenabled .block_settings .block_tree_box .requiresjs {display:inline;}

/** General display rules **/
.block_settings .block_tree {margin:5px;padding-left:0px;overflow:visible;}
.block_settings .block_tree li {margin:0;list-style: none;}
.block_settings .block_tree li ul {padding-left:16px;margin:0;}

.block_settings .block_tree li.item_with_icon > p {position:relative;}
.block_settings .block_tree li.item_with_icon > p img {vertical-align:middle;position:absolute;left:0;top:3px}

.block_settings .block_tree .tree_item {padding-left: 18px;margin:3px 0px;text-align:left;}

.block_settings .block_tree .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fexpanded);background-position: 0 10%;background-repeat: no-repeat;}
.block_settings .block_tree .root_node.leaf {padding-left:0px;}
.block_settings .block_tree .active_tree_node {font-weight:bold;}
.jsenabled .block_settings .block_tree .tree_item.branch {cursor:pointer;}
.jsenabled .block_settings .block_tree .tree_item.emptybranch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_empty);background-position: 0 10%;background-repeat: no-repeat;}
.jsenabled .block_settings .block_tree .collapsed ul {display: none;}
.jsenabled .block_settings .block_tree .collapsed .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed);}

/** Internet explorer specific rules **/
.ie6 .block_settings .block_tree .tree_item {width:100%;}

/** Overide for RTL layout **/
.dir-rtl .block_settings .block_tree {padding-right:0px;}
.dir-rtl .block_settings .block_tree li ul {padding-left:0;padding-right: 7px;}
.dir-rtl .block_settings .block_tree li.item_with_icon > p img,
.dir-rtl .block_navigation .block_tree .type_activity > .tree_item.branch img {left:auto;right:0;}
.dir-rtl .block_settings .block_tree .tree_item {padding-right: 18px;text-align:right;}
.dir-rtl .block_settings .block_tree .tree_item.branch {background-position: center right;}
.dir-rtl .block_settings .block_tree .root_node.leaf {padding-right:0px;}

.jsenabled.dir-rtl .block_settings .block_tree .tree_item.emptybranch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_empty_rtl);background-position: center right;}
.jsenabled.dir-rtl .block_settings .block_tree .collapsed .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_rtl);}