<?php
/**
 *
 * @author h.woltersdorf
 */

namespace Fortuneglobe\IceHawk\Events;

use Fortuneglobe\IceHawk\Interfaces\ServesGetRequestData;
use Fortuneglobe\IceHawk\Interfaces\ServesIceHawkEventData;
use Fortuneglobe\IceHawk\Interfaces\ServesPostRequestData;
use Fortuneglobe\IceHawk\Interfaces\ServesRequestData;
use Fortuneglobe\IceHawk\Interfaces\ServesRequestInfo;

/**
 * Class HandlingRequestEvent
 *
 * @package Fortuneglobe\IceHawk\Events
 */
final class HandlingRequestEvent implements ServesIceHawkEventData
{

	/** @var ServesRequestInfo */
	private $requestInfo;

	/** @var ServesPostRequestData|ServesGetRequestData */
	private $request;

	/**
	 * @param ServesRequestInfo $requestInfo
	 * @param ServesRequestData $request
	 */
	public function __construct( ServesRequestInfo $requestInfo, ServesRequestData $request )
	{
		$this->requestInfo = $requestInfo;
		$this->request     = $request;
	}

	/**
	 * @return ServesRequestInfo
	 */
	public function getRequestInfo()
	{
		return $this->requestInfo;
	}

	/**
	 * @return ServesGetRequestData|ServesPostRequestData
	 */
	public function getRequest()
	{
		return $this->request;
	}
}
