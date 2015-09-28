<?php

namespace Firewall;

use Firewall\Host\Host;

interface Firewall
{
    /**
     * Deny host.
     *
     * @param Host $host
     */
    public function deny(Host $host);

    /**
     * Allow host.
     *
     * @param Host $host
     */
    public function allow(Host $host);

    /**
     * Undeny host.
     *
     * @param Host $host
     */
    public function undeny(Host $host);

    /**
     * Unallow host.
     *
     * @param Host $host
     */
    public function unallow(Host $host);

    /**
     * Get all denied hosts.
     *
     * @return array
     */
    public function getDenied();

    /**
     * Get all allowed hosts.
     *
     * @return array
     */
    public function getAllowed();
}
