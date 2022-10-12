<?php

namespace ma_karov\guess_number\Controller;

use function ma_karov\guess_number\Model\setting;
use function ma_karov\guess_number\View\MenuGame;
use function ma_karov\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
