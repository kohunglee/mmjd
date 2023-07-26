<?php 
/**
 * 可视部分 - 页头
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<header class="site-header">
    <section class="nav-marginAuto site-infos">
        <section class="headerinfo-left">
            <h2 class="site-name"><a href="<?= BLOG_URL ?>"><?= $blogname ?></a></h2>
            <section class="site-desc" title="<?= $bloginfo ?>"><?= $bloginfo ?></section>
        </section>
        <section class="headerinfo-right mh">
            <div class="nav-notice">
                公告：本站新增加了很多好用的工具，快来使用啊啊啊啊啊！
            </div>
            <div class="nav-someLinks">
                <a target='_blank' href="#">压缩工具</a>
                <a target='_blank' href="#">捐助</a>
                <a target='_blank' href="#">朋友们</a>
                <a target='_blank' href="#">关于</a>
                <input type="text" />
                <span class="blog-header-toggle">
                    <svg class="blogtoggle-icon" style="width: 37px; height: 16px; ">
                        <rect x="1" y="1" fill="#5F5F5F" width="26" height="1.6"/>
                        <rect x="1" y="8" fill="#5F5F5F" width="26" height="1.6"/>
                        <rect x="1" y="15" fill="#5F5F5F" width="26" height="1.6"/>
                    </svg>
                </span>
            </div>
        </section>
    </section>
    
    
    <nav class="nav site-nav">
        <section class="nav-marginAuto site-nav-links">
            <?php mmjd_navlink(); ?>
            <span class="nav-link-right"><a target='_blank' href="#">注册\登录</a></span>
        </section>
    </nav>
</header>

