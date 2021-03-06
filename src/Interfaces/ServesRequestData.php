<?php
/**
 *
 * @author h.woltersdorf
 */

namespace Fortuneglobe\IceHawk\Interfaces;

/**
 * Interface ServesRequestData
 *
 * @package Fortuneglobe\IceHawk\Interfaces
 */
interface ServesRequestData
{
	/**
	 * @return array
	 */
	public function getData();

	/**
	 * @param string $key
	 *
	 * @return null|string|array
	 */
	public function get( $key );

	/**
	 * @return ServesRequestInfo
	 */
	public function getRequestInfo();
} 