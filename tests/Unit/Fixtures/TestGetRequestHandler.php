<?php
/**
 *
 * @author h.woltersdorf
 */

namespace Fortuneglobe\IceHawk\Tests\Unit\Fixtures;

use Fortuneglobe\IceHawk\DomainRequestHandlers\GetRequestHandler as BaseGetRequestHandler;
use Fortuneglobe\IceHawk\Interfaces\ServesGetRequestData;

/**
 * Class TestGetRequestHandler
 *
 * @package Fortuneglobe\IceHawk\Tests\Unit\Fixtures
 */
class TestGetRequestHandler extends BaseGetRequestHandler
{
	public function handle( ServesGetRequestData $request )
	{
		echo "Request handled.";
	}
}
