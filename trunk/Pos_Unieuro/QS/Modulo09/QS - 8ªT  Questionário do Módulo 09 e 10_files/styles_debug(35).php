/** Path: plugins block_navigation **/
/** General display rules **/
.block_navigation .block_tree {margin:5px;padding-left:0px;overflow:visible;}
.block_navigation .block_tree li {margin:3px;list-style: none;padding:0;}
.block_navigation .block_tree li.item_with_icon > p {position:relative;}
.block_navigation .block_tree li.item_with_icon > p img {vertical-align:middle;position:absolute;left:0;top:3px}
.block_navigation .block_tree li.item_with_icon.contains_branch > p img {left:16px;}
.block_navigation .block_tree li.item_with_icon.contains_branch .tree_item {padding-left:34px;}

.block_navigation .block_tree li ul {padding-left:0;margin:0;}
.block_navigation .block_tree li.depth_2 ul {padding-left:16px;margin:0;}
.block_navigation .block_tree .tree_item {padding-left: 18px;margin:3px 0px;text-align:left;}

.block_navigation .block_tree .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fexpanded);background-position: 0 10%;background-repeat: no-repeat;}
.block_navigation .block_tree .tree_item.branch.navigation_node {background-image:none;padding-left:0;}
.block_navigation .block_tree .type_activity > .tree_item.branch {background-image:none;position:relative;}
.block_navigation .block_tree .type_activity > .tree_item.branch img {position:absolute;left:0;}
.block_navigation .block_tree .root_node.leaf {padding-left:0px;}
.block_navigation .block_tree .active_tree_node {font-weight:bold;}
.block_navigation .block_tree .depth_1.current_branch ul {font-weight:normal;}

.dock .block_navigation .tree_item {white-space: nowrap;}

.jsenabled .block_navigation .block_tree .tree_item.branch {cursor:pointer;}
.jsenabled .block_navigation .block_tree .tree_item.emptybranch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_empty);background-position: 0% 5%;background-repeat: no-repeat;}
.jsenabled .block_navigation .block_tree .collapsed ul {display: none;}
.jsenabled .block_navigation .block_tree .collapsed .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed);}
.jsenabled .block_navigation .block_tree .tree_item.branch.loadingbranch {background-image:url(image.php?theme=aardvark&image=i%2Floading_small);}

/** JavaScript state rules **/
.jsenabled .block_navigation.dock_on_load,
.block_navigation .block_tree_box .requiresjs {display:none;}
.jsenabled .block_navigation .block_tree_box .requiresjs {display:inline;}

/** Internet explorer specific rules **/
.ie6 .block_navigation .block_tree .tree_item {width:100%;}

/** Overide for RTL layout **/
.dir-rtl .block_navigation .block_tree li.depth_2 ul {padding-left:0;padding-right: 7px;}
.dir-rtl .block_navigation .block_tree .tree_item {padding-right: 18px;text-align:right;}

.dir-rtl .block_navigation .block_tree .tree_item.branch {background-position: center right;}

.dir-rtl .block_navigation .block_tree,
.dir-rtl .block_navigation .block_tree li ul,
.dir-rtl .block_navigation .block_tree .navigation_node.tree_item.branch,
.dir-rtl .block_navigation .block_tree .root_node.leaf {padding-right:0;}

.dir-rtl .block_navigation .block_tree li.item_with_icon > p img,
.dir-rtl .block_navigation .block_tree .type_activity > .tree_item.branch img {right:0;left:auto;}

.jsenabled.dir-rtl .block_navigation .block_tree .tree_item.emptybranch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_empty_rtl);background-position: center right;}
.jsenabled.dir-rtl .block_navigation .block_tree .collapsed .tree_item.branch {background-image: url(image.php?theme=aardvark&image=t%2Fcollapsed_rtl);}
