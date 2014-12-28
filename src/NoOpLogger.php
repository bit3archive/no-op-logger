<?php

/**
 * This file is part of bit3/no-op-logger.
 *
 * (c) 2014 Tristan Lins <tristan@lins.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    bit3/no-op-logger
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @copyright  2014 Tristan Lins <tristan@lins.io>
 * @link       https://github.com/bit3/no-op-logger
 * @license    https://github.com/bit3/no-op-logger/blob/master/LICENSE MIT
 * @filesource
 */

namespace Bit3\NoOpLogger;

use Psr\Log\LoggerInterface;

/**
 * A no-operation PSR-3 logger.
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
