<?php
	//var_dump($domainName);exit;
	$domain = $model->getDomain();
	if($domain != NULL && $domain->domain_name == $domainName){
		echo $model->getContent();
	}
	else{
		throw new CHttpException(404,'The requested page does not exist.');
	}
?>