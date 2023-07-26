<?php 
/**
 * 可视部分 - 博客目录
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
        <section class="site-loglist">

            <?php doAction('index_loglist_top');
                    if (!empty($logs)):
                        foreach ($logs as $value):
            ?>

            <div class="site-single-listlog">
                <a target='_blank' href="<?= $value['log_url'] ?>"><h2 class="site-loglist-title"><?= $value['log_title'] ?></h2></a>
                
                <div class="site-log-time"><?= date('Y-n-j H:i', $value['date']) ?> by 
                    <span class="log-moreinfo-auther">
                        <?php blog_author($value['author']) ?>
                        <img class="moreinf-autherimg" src="<?php mmjd_getAvatarImg($value['author']) ?>" alt="autherimg" />
                    </span>
                </div>
                
                <div class="site-log-desc"><?= $value['log_description'] ?></div>
                <div class="site-log-moreinfo">
                    <span class="log-moreinfo-sort">分类: <?php bloglist_sort($value['logid']) ?>&nbsp;&nbsp;</span>
                    <span class="log-moreinfo-tags"><?php blog_tag($value['logid']) ?></span>
                    <?php editflg($value['logid'], $value['author']) ?>
                </div>
            </div>

            <?php
                endforeach;
            else: ?>
                <p>抱歉，暂时还没有内容。</p>
            <?php endif ?>

            <div class="pagination bottom-5">
                <?= $page_url ?>
            </div>
        </section>

        
        
    </main>