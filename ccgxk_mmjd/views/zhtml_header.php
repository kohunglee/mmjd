<?php 
/**
 * 博客的头部 html 结构
 * 
 * head 信息，以及 css 等
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_title ?></title>
    <meta name="keywords" content="<?= $site_key ?>"/>
    <meta name="description" content="<?= $site_description ?>"/>
    <base href="<?= BLOG_URL ?>"/>
    <link rel="shortcut icon" href="<?= BLOG_URL ?>favicon.ico"/>
    <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/views/css/main.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/views/css/style.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URL ?>/views/css/water.css">
    <script>
        function sendinfo(url) {  // 输出和切换日历
            var calendarElement = document.getElementById("calendar");
            calendarElement.innerHTML = "";
            var xhr = new XMLHttpRequest();
            xhr.open("GET", url, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    calendarElement.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>