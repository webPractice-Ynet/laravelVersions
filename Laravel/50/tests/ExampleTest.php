<?php

class ExampleTest extends TestCase {
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
		$this->暗号機能のテスト();
		$this->暗号機能のテストwithDB();
	}

	
    public function 暗号機能のテスト()
    {
		
		$pass = 'secret';

		$first = config("app.cipher");
		
		//暗号化する
		Crypt::setCipher($first);
		$encrypted = Crypt::encrypt($pass);

		//解読する
		$decrypted = Crypt::decrypt($encrypted);

		var_dump($decrypted);
		//一致確認する
		$this->assertEquals($pass, $decrypted);
    }

    public function 暗号機能のテストwithDB()
    {
        //暗号化する

        //DBに保存する

        //一致確認する
    }

}
