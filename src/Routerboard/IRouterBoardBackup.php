<?php

namespace Src\RouterBoard;

use Src\RouterBoard\InputParser;

interface IRouterBoardBackup
{

    /**
     * Backup all IP address from backup list in the database
     */
    public function backupAllRouterBoards();

    /**
     * Backup selected IP addresses
     * @param array $input ip address
     */
    public function backupOneRouterBoard(InputParser $input);

}
