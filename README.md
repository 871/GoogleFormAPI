GoogleFormAPI
=============

GoogleFrom連係用モジュール

API情報を設定
/GoogleFormAPI/GoogleFormAPIConfig.php
	
	public $default = array(
		// 入力フォームのURL
		'postUrl'	=> 'https://docs.google.com/forms/d/1pBUIF0R2z3n_GToqhSrw8cBhp_CbcOh4TsUlOKiExc8/formResponse',
		// 入力結果スプレットシートのURL
		'answerUrl'	=> 'https://docs.google.com/spreadsheets/d/1p1QMYauLB3cyJi0QhEevxiAH0G8IGXG6r_kzE6tAiq0',
		// 入力データのマッピング設定
		// 入力フォームのname属性 => 入力情報のキー
		// 例：name="entry.1837530974"の入力に、$array['TEST1']を設定したい場合、
		// 「'entry.1837530974'	=> 'TEST1',」する。
		// ※ 'TEST1'のキーが定義されていない場合、
		// name="TEST1"の入力で$array['TEST1']の値が送信される
		'dataMappings' => array(
			'entry.1837530974'	=> 'TEST1',
			'entry.1045368190'	=> 'TEST2',
			'entry.401500225'	=> 'TEST3',
			'entry.2037893346'	=> 'TEST4',
		),
	);