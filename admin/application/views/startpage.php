<?php if($rs['piwik_token_auth'] !='' || $rs['piwik']!=''){?>
<iframe src="https://www.boyou.biz/index.php?module=Widgetize&token_auth=<?php echo $rs['piwik_token_auth']?>&action=iframe&moduleToWidgetize=Dashboard&actionToWidgetize=index&idSite=<?php echo $rs['piwik']?>&language=zh-cn&period=week&date=today&category=Dashboard_Dashboard&subcategory=1" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%"></iframe>
<?php }?>