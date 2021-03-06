<?php
/**
 * @author h.woltersdorf
 */

namespace Fortuneglobe\IceHawk;

use Fortuneglobe\IceHawk\Interfaces\ServesUriComponents;

/**
 * Class UriComponents
 *
 * @package Fortuneglobe\IceHawk
 */
class UriComponents implements ServesUriComponents
{

	/** @var string */
	private $domain;

	/** @var string */
	private $demand;

	/** @var array */
	private $params;

	/**
	 * @param string $domain
	 * @param string $demand
	 * @param array  $params
	 */
	public function __construct( $domain, $demand, array $params )
	{
		$this->domain = $domain;
		$this->demand = $demand;
		$this->params = $params;
	}

	/**
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}

	/**
	 * @return string
	 */
	public function getDemand()
	{
		return $this->demand;
	}

	/**
	 * @return array
	 */
	public function getParams()
	{
		return $this->params;
	}
}