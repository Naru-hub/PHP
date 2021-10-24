<?php

const SPLIT_LENGTH = 2;

function getInput()
{
    $argument = array_slice($_SERVER['argv'], 1);
    
    return array_chunk($argument, SPLIT_LENGTH);
}

function groupChannelViewingPeriods(array $inputs): array
{
    $channelViewingPeriods = [];
    foreach ($inputs as $input) {
      $chan = $input[0];
      $min = $input[1];
      $mins = [$min];
      
      if (array_key_exists($chan, $channelViewingPeriods)) {
        $mins = array_merge($channelViewingPeriods[$chan], $mins);
      }
      
      
      $channelViewingPeriods[$chan] = $mins;
    }
    return $channelViewingPeriods;
}

$inputs = getInput();
$channelViewingPeriods = groupChannelViewingPeriods($inputs);
var_dump($channelViewingPeriods);