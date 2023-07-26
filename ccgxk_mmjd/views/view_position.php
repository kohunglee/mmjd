<?php 
/**
 * 可视部分 - 访客当前的位置（面包屑导航）
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 

// 转换日期
function mmjd_toChineseDate($date) {
    $year = substr($date, 0, 4);
    $month = substr($date, 4, 2);
    $day = substr($date, 6, 2);

    $formatted_date = $year . ' 年 ' . (int)$month . ' 月';

    if ($day !== '') {
        $formatted_date .= ' ' . (int)$day . ' 日';
    }

    return $formatted_date;
}


?>

<section class="site-position">
    <span>
        当前位置：<a class="site-position-index" href="<?= BLOG_URL ?>">首页</a>
        <?php

            if(isset($record) && isset($page)) {
                if($page == 0){
                    $pagedisplay = "&nbsp;&nbsp;>&nbsp;&nbsp;无";
                } else {
                    $pagedisplay = "&nbsp;&nbsp;>&nbsp;&nbsp;第 ".$page." 页";
                }
                $recordLink = Url::record($record);
                echo "&nbsp;>&nbsp;&nbsp;<a href='". $recordLink ."'>日期：".mmjd_toChineseDate($record).'</a>'.$pagedisplay;
            } elseif(isset($author) && isset($page)) {
                $User_Model = new User_Model();
                $user_info = $User_Model->getOneUser($author);
                $authorName = $user_info['nickname'];
                $authorNameLink = Url::author($author);
                echo "&nbsp;>&nbsp;&nbsp;<a href='". $authorNameLink ."'>作者：".htmlspecialchars($authorName)."</a>&nbsp;&nbsp;>&nbsp;&nbsp;第 ".$page." 页";
            } elseif(isset($keyword) && isset($page)) {
                if($page == 0){
                    $pagedisplay = "&nbsp;&nbsp;>&nbsp;&nbsp;无";
                } else {
                    $pagedisplay = "&nbsp;&nbsp;>&nbsp;&nbsp;第 ".$page." 页";
                }
                echo "&nbsp;>&nbsp;&nbsp;关键词：".htmlspecialchars($keyword).$pagedisplay;
            } elseif(isset($sortid) && isset($page)) {
                global $CACHE;
                $sort_cache = $CACHE->readCache('sort');
                $sortname = $sort_cache[$sortid]["sortname"];
                $sortLink = Url::sort($sort_cache[$sortid]['sid']);
                echo "&nbsp;>&nbsp;&nbsp;<a href='". $sortLink ."'>分类：".$sortname."</a>&nbsp;&nbsp;>&nbsp;&nbsp;第 ".$page." 页";
            } elseif(isset($tag) && isset($page)) {
                global $CACHE;
                $tag_cache = $CACHE->readCache('tags');
                $tagLink = Url::tag(rawurlencode($tag));
                echo "&nbsp;>&nbsp;&nbsp;<a href='". $tagLink ."'>标签：".htmlspecialchars($tag)."</a>&nbsp;&nbsp;>&nbsp;&nbsp;第 ".$page." 页";
            } elseif(isset($type)) {
                if(!empty($password)){
                    echo "<br>当前是已经根据之前 cookie 中储存的文章密码而跳转到的文章界面";
                }
                if($type === "blog"){
                    echo "".blog_sort_pos($logid)."".$log_title;
                }
                if ($type === "page") {
                    echo "<br>当前是页面：显示模式";
                }
            }
        ?>
    </span>
</section>
