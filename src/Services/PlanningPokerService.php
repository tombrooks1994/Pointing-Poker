<?php


namespace App\Services;


class PlanningPokerService
{

    public function planningPoker()
    {
        $fibonacci = $this->getFibonacci();
        return $fibonacci;
    }

    public function getFibonacci()
    {
        $fibonacciArray = [ 0 => 0, '1/2' => '1/2' ];
        $previousNumberInSequence = 0;
        $nextNumberInSequence = 1;
        $fibonacciCount = 10;

        for ($i = 0; $i <= $fibonacciCount; $i++) {
            $fibonacci = $previousNumberInSequence + $nextNumberInSequence;
            $previousNumberInSequence = $nextNumberInSequence;
            $nextNumberInSequence = $fibonacci;
            $fibonacciArray[$i + 1] = $fibonacci;
        }

        return $fibonacciArray;
    }
}