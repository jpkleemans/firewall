<?php

namespace Firewall\Adapter;

use Firewall\Host\Host;

class HtaccessAdapter extends AbstractAdapter
{
    /**
     * Block host.
     *
     * @param Host $host
     */
    public function block(Host $host)
    {
    }

    /**
     * Unblock host.
     *
     * @param Host $host
     */
    public function unblock(Host $host)
    {
    }

    /**
     * Get all blocked hosts.
     *
     * @return array
     */
    public function getBlocks()
    {
    }
}
