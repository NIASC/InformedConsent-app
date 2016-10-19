<?php

$sitemap = sitemap($database_link, 0, $siteData['language'], 2, 0);

$smarty->assign('sitemap', $sitemap);

$smarty->assign('content_file', 'sitemap.tpl');

?>