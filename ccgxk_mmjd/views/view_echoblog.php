<?php 
/**
 * 可视部分 - 博客文章的阅读页
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<article class="site-echolog">
    <h1 class="log-title"><?php topflg($top) ?><?= $log_title ?></h1>
    <p class="sites-echologinfos">
        <?php blog_author($author) ?>&nbsp;发表于
        <?= date('Y-n-j H:i', $date) ?>，放在
        <?php blog_sort($logid) ?>&nbsp;分类里.
        <?php editflg($logid, $author) ?>
        <br>
        
    </p>
    <hr class="bottom-5"/>
    <div class="markdown" id="emlogEchoLog"><?= $log_content ?></div>
    <p class="top-5"><?php blog_tag($logid) ?></p>

    <?php doAction('log_related', $logData) ?>

</article>