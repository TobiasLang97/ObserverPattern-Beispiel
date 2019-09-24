<?php 
function __autoload($name) {
	$fileName = __DIR__.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $name).'.php';

	if (file_exists($fileName)) {
		require_once $fileName;
	}
}
$secret = "GROßES GEHEIMNIS";

$secretDataService = new SecretDataService();
$hoth = new Hoth();
$secretDataService->addBase(new Endor());
$secretDataService->addBase($hoth);

$secretDataService->setData($secret);

$secretDataService->removeBase($hoth);

$secretDataService->setData("kleines geheimnis");

?>