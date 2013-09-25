<?php if (!defined('THINK_PATH')) exit();?>
<div class="page"><div class="layoutBox"><div layoutH="10">
<?php echo ($tree); ?>
</div></div></div>
<?php if($_REQUEST['link']!= 'edit'): ?><script language="javascript">
function selectClass(cid,cname){
	var selmore = '<?php echo ($_REQUEST['selmore']); ?>';
	p=$.pdialog.findObj('#<?php echo ($_REQUEST['cid']); ?>'), objcid=p.fobj;
	p=$.pdialog.findObj('#<?php echo ($_REQUEST['cname']); ?>'), objcname=p.fobj;
	
	if(objcid.length>0){
		var v='',v1='';
		if(selmore==1){	
			if((","+objcid.val()+",").indexOf(","+cid+",")>-1){
				v = (","+objcid.val()+",").replace(eval('/,'+cid+',|,'+cid+'|'+cid+',/g'),',');
				v1 = (","+objcname.val()+",").replace(eval('/,'+cname+',|,'+cname+'|'+cname+',/g'),',');
			}else{
				v = objcid.val()+","+cid;
				v1 = objcname.val()+","+cname;
			}
			v = v.replace(/^,|,$/g,'');
			v1 = v1.replace(/^,|,$/g,'');
		}else{
			v = cid; 
			v1 = cname;
		}
		objcid.val(v);
		objcname.val(v1);
	}
	if(selmore==0) $.pdialog.closeCurrent();
}
</script><?php endif; ?>