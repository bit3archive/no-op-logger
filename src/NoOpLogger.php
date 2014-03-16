<?php

/**
 * This file is part of the Contao Community Alliance Build System tools.
 *
 * @copyright 2014 Contao Community Alliance <https://c-c-a.org>
 * @author    Tristan Lins <t.lins@c-c-a.org>
 * @package   contao-community-alliance/build-system-logger
 * @license   MIT
 * @link      https://c-c-a.org
 */

namespace ContaoCommunityAlliance\BuildSystem;

use Psr\Log\LoggerInterface;

/**
 * A no-operation logger.
 */
class NoOpLogger implements LoggerInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function emergency($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function alert($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function critical($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function error($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function warning($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function notice($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function info($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function debug($message, array $context = array())
	{
		// no-op
	}

	/**
	 * {@inheritdoc}
	 */
	public function log($level, $message, array $context = array())
	{
		// no-op
	}

}
