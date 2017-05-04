<?php

/**
 * Copyright (c) 2010-2017 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Middleware\StaticMiddleware;

/**
 * Class CssMiddleware
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
class CssMiddleware extends StaticMiddlewareAbstract
{
    /**
     * Get Mime Type
     *
     * @param  string $file
     * @return string
     */
    protected function getMimeType($file)
    {
        return 'text/css';
    }

}