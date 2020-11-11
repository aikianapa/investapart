<?php
wbRouterAdd("/news/(:any)","/controller:form/form:news/mode:show/item:$1/tpl:news-item.php");
?>
