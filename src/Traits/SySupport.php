<?php

namespace ZeekBuildProcess\Traits;

trait SySupport
{
    private function sySpecificReplacements()
    {
        if ( ! $this->isSy) {
            return;
        }


        $this->rsyncFileSafely('.env.test');
        $this->rsyncFileSafely('.php-cs-fixer.php');
        $this->rsyncFileSafely('phpmd.baseline.xml');
        $this->rsyncFileSafely('phpmd.xml');
        $this->rsyncFileSafely('phpstan.neon');
        $this->rsyncFileSafely('phpstan-baseline.neon');
        $this->rsyncFileSafely('phpunit.xml.dist');


        $this->rsyncFileSafely('tests/', 'tests');
    }
}