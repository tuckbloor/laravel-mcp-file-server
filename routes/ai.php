<?php

use App\Mcp\Servers\MyMcpServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp', MyMcpServer::class);
