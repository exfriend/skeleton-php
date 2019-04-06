<?php

namespace Exfriend\:package_nsn;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Exfriend\:package_nsn\:package_nsnClass
 */
class :package_nsnFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ':package_name';
    }
}
