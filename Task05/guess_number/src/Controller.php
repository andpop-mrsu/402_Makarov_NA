<?php

namespace makarovna\guess_number\Controller;

use function makarovna\guess_number\Model\setting;
use function makarovna\guess_number\View\MenuGame;
use function makarovna\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
