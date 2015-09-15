<?php

namespace Swoole;

interface Driver {

    function run($setting);

    function send($client_id, $data);

    function close($client_id);

    function setProtocol($protocol);
}
