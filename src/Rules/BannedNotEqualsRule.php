<?php declare(strict_types = 1);

namespace Killov\PHPStan\BannedDoubleEquals\Rules;

use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;

/**
 * @implements Rule<BooleanAndNode>
 */
class BannedNotEqualsRule implements Rule
{


	public function __construct()
	{
	}

	public function getNodeType(): string
	{
		return Node\Expr\BinaryOp\NotEqual::class;
	}

	public function processNode(Node $node, Scope $scope): array
	{
		$messages = [];

        $messages[] = 'Only !== are allowed.';;

		return $messages;
	}

}
