<?php


    class DailyRoutine
    {
        public function lewisDay(LewisInterface $lewis)
        {
            $lewis->eat();
            $lewis->play();
            $lewis->sleep();
        }
    }

    $lewisWallace = new Lewis;
    $lewisDailyRoutine = new DailyRoutine;

    $lewisDailyRoutine->lewisDay($lewisWallace);