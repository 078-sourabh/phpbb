<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* @group functional
*/
class phpbb_functional_visit_installer_test extends phpbb_functional_test_case
{
	public function test_visit_installer()
	{
		self::request('GET', 'install/');
		$this->assertContains('installation system', $this->get_content());

		self::request('GET', 'install/index.html');
		$this->assertContains('installation system', $this->get_content());

		self::request('GET', 'install/app.php');
		$this->assertContains('installation system', $this->get_content());
	}
}
