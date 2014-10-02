<?php

require_once './GoogleFormAPI/GoogleFormAPI.php';

$testData = array(
	'TEST1' => 'テストデータ１',
	'TEST2' => 'テストデータ２',
	'TEST3' => 'テストデータ３',
	'TEST4' => 'テストデータ４',
); 

$googleFormAPI = new GoogleFormAPI();
$googleFormAPI->setPostData($testData);
$result = $googleFormAPI->send();

$answerUrl = $googleFormAPI->getAnswerUrl();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<?php if ($result) { ?>
		<p>送信成功</p>
		<?php var_dump($testData); ?>
		<script>
		(function() {
			window.open('<?php echo $answerUrl ; ?>', '_blank');
		})();
		</script>
		<?php } else { ?>
		<p>送信失敗</p>
		<?php } ?>
	</body>
</html>
