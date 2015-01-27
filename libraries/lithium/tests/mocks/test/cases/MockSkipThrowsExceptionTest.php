<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2015, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\test\cases;

use Exception;

class MockSkipThrowsExceptionTest extends \lithium\test\Unit {

	public function skip() {
		throw new Exception('skip throws exception');
	}
}

?>