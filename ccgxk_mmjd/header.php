<?php
/*
Template Name:秘密基地
Template Url:https://www.ccgxk.com/
Description:串串狗 CMS 主题代码工坊的第一个作品。
Author:串串狗 xk
Author Url:https://www.ccgxk.com
*/

/* 本文件是本模板的入口 */
error_reporting(E_ALL);
require_once View::getView('func/lib');

/* （除了默认首页模式外）根据当前用户的行为，调用不同的文件 */
if(isset($record) && isset($page)) {  // 归档
    
    
}
if(isset($author) && isset($page)) {  // 作者
    

}
if(isset($keyword) && isset($page)) {  // 搜索文章
    

}
if(isset($sortid) && isset($page)) {  // 分类
    

}
if(isset($tag) && isset($page)) {  // 标签


}
if(isset($type)) {
    if(!empty($password)){  // 已经过 cookie 密码
    }
    if($type === "blog"){  // 文章
        include View::getView("views/zhtml_header");
        include View::getView("views/view_head");
        include View::getView("views/view_position");
        include View::getView("views/view_side2");
        include View::getView("views/view_echoblog");
        include View::getView("views/view_footer");
        include View::getView("views/zhtml_footer");
        exit();
    }
    if ($type === "page") {  // 页面
    }
}

// 这是在 emlog 访问网站默认首页下会调用的几个文件（换句话说，上面那些都没用到）
include View::getView("views/zhtml_header");
include View::getView("views/view_head");
include View::getView("views/view_position");
include View::getView("views/view_side1");
include View::getView("views/view_bloglist");
include View::getView("views/view_footer");
include View::getView("views/zhtml_footer");