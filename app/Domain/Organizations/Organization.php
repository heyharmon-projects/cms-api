<?php

namespace DDD\Domain\Organizations;

use DDD\Domain\Websites\Website;
use DDD\Domain\Designs\Design;
use DDD\Domain\Base\Organizations\Organization as BaseOrganization;

class Organization extends BaseOrganization {
    /**
     * Websites associated with this organization.
     *
     * @return hasMany
     */
    public function websites()
    {
        return $this->hasMany(Website::class);
    }

    /**
     * Designs associated with this organization.
     *
     * @return hasMany
     */
    public function designs()
    {
        return $this->hasMany(Design::class);
    }
}
