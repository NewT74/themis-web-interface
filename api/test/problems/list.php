<?php
    //? |-----------------------------------------------------------------------------------------------|
    //? |  /api/test/problems/list.php                                                                  |
    //? |                                                                                               |
    //? |  Copyright (c) 2019 Belikhun. All right reserved                                              |
    //? |  Licensed under the MIT License. See LICENSE in the project root for license information.     |
    //? |-----------------------------------------------------------------------------------------------|

	require_once $_SERVER["DOCUMENT_ROOT"]."/lib/api_ecatch.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/lib/ratelimit.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/lib/belibrary.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/data/config.php";
    contest_timecheck([CONTEST_STARTED]);

    require_once $_SERVER["DOCUMENT_ROOT"]."/data/problems/problem.php";
    stop(0, "Success!", 200, problem_list());