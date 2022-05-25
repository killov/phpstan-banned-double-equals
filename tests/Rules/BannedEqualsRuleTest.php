<?php declare(strict_types = 1);

namespace Killov\PHPStan\Rules;

use Killov\PHPStan\BannedDoubleEquals\Rules\BannedEqualsRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<BannedEqualsRule>
 */
class BannedEqualsRuleTest extends RuleTestCase
{

	protected function getRule(): Rule
	{
		return new BannedEqualsRule();
	}

	public function testRule(): void
	{
		$this->analyse([__DIR__ . '/data/conditions.php'], [
			[
				'Only === are allowed.',
				5,
			]
		]);
	}

}
