<?php

namespace App\Services;

use Illuminate\Support\Arr;

class FootballStats
{
    public function convertStats($rawSnapCounts, $rawPassingStats, $rawRushingReceivingStats)
    {
        $finalPlayerArray = [];

        $snapCounts = trim(preg_replace('/\n/', '', $rawSnapCounts));
        $snapCounts = trim(preg_replace('/\t/', 'tab', $snapCounts));
        $snapCounts = trim(preg_replace('/\r/', 'line', $snapCounts));
        $playerSnapCountArray = explode('line', $snapCounts);
        foreach ($playerSnapCountArray as $player) {
            $playerArray = explode('tab', $player);

            $arrayKey = trim(str_replace('*', '', $playerArray[0]));
            $finalPlayerArray[$arrayKey]['name'] = $playerArray[0];
            $finalPlayerArray[$arrayKey]['position'] = $playerArray[1];
            $finalPlayerArray[$arrayKey]['snaps'] = $playerArray[2];
            $finalPlayerArray[$arrayKey]['snap_percentage'] = $playerArray[3];
        }

        $passingStats = trim(preg_replace('/\n/', '', $rawPassingStats));
        $passingStats = trim(preg_replace('/\t/', 'tab', $passingStats));
        $passingStats = trim(preg_replace('/\r/', 'line', $passingStats));

        $passingArray = explode('line', $passingStats);
        foreach ($passingArray as $key => $player) {
            $playerArray = explode('tab', $player);
            $arrayKey = trim(str_replace('*', '', $playerArray[1]));

            $finalPlayerArray[$arrayKey]['games_played'] = $this->extractStatFromArray(4, $playerArray);
            $finalPlayerArray[$arrayKey]['games_started'] = $this->extractStatFromArray(5, $playerArray);
            $finalPlayerArray[$arrayKey]['pass_cmp'] = $this->extractStatFromArray(7, $playerArray);
            $finalPlayerArray[$arrayKey]['pass_att'] = $this->extractStatFromArray(8, $playerArray);
            $finalPlayerArray[$arrayKey]['pass_yds'] = $this->extractStatFromArray(10, $playerArray);
            $finalPlayerArray[$arrayKey]['pass_td'] = $this->extractStatFromArray(11, $playerArray);
            $finalPlayerArray[$arrayKey]['pass_int'] = $this->extractStatFromArray(13, $playerArray);
        }
        $rushingReceivingStats = trim(preg_replace('/\n/', '', $rawRushingReceivingStats));
        $rushingReceivingStats = trim(preg_replace('/\t/', 'tab', $rushingReceivingStats));
        $rushingReceivingStats = trim(preg_replace('/\r/', 'line', $rushingReceivingStats));
        $rushingReceivingArray = explode('line', $rushingReceivingStats);
        foreach ($rushingReceivingArray as $player) {
            $playerArray = explode('tab', $player);

            $arrayKey = trim(str_replace('*', '', $playerArray[1]));

            $finalPlayerArray[$arrayKey]['games_played'] = $this->extractStatFromArray(4, $playerArray);
            $finalPlayerArray[$arrayKey]['games_started'] = $this->extractStatFromArray(5, $playerArray);
            $finalPlayerArray[$arrayKey]['rush_att'] = $this->extractStatFromArray(6, $playerArray);
            $finalPlayerArray[$arrayKey]['rush_yds'] = $this->extractStatFromArray(7, $playerArray);
            $finalPlayerArray[$arrayKey]['rush_td'] = $this->extractStatFromArray(8, $playerArray);

            $finalPlayerArray[$arrayKey]['targets'] = $this->extractStatFromArray(13, $playerArray);
            $finalPlayerArray[$arrayKey]['rec'] = $this->extractStatFromArray(14, $playerArray);
            $finalPlayerArray[$arrayKey]['rec_yds'] = $this->extractStatFromArray(15, $playerArray);
            $finalPlayerArray[$arrayKey]['rec_td'] = $this->extractStatFromArray(17, $playerArray);
        }
        return $finalPlayerArray;
    }

    public function extractStatFromArray($key, $array)
    {
        if (!array_key_exists($key, $array)) {
            return '0';
        }

        if ($array[$key] === null || $array[$key] == '') {
            return '0';
        }

        return $array[$key];
    }
}
