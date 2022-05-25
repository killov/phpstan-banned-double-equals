<?php declare(strict_types = 1);

namespace Killov\PHPStan\Rules;

use Killov\PHPStan\BannedDoubleEquals\Rules\BannedEqualsRule;
use Killov\PHPStan\BannedDoubleEquals\Rules\BannedNotEqualsRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<BannedEqualsRule>
 */
class BannedNotEqualsRuleTest extends RuleTestCase
{

	protected function getRule(): Rule
	{
		return new BannedNotEqualsRule();
	}

	public function testRule(): void
	{
		$this->analyse([__DIR__ . '/data/conditions.php'], [
			[
				'Only !== are allowed.',
				6,
			]
		]);
	}

}
