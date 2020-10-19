<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/19
 * Time: 9:40
 */

class Solution
{
    /**
     * 比较含退格的字符串
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    public function backspaceCompare($S, $T)
    {
        $s_stack = new SplStack();
        $t_stack = new SplStack();

        $s_lenth = strlen($S);
        for ($i = 0; $i < $s_lenth; $i++) {
            if ($S[$i] !== '#') {
                $s_stack->push($S[$i]);
            } elseif (!$s_stack->isEmpty()) {
                $s_stack->pop();
            }
        }

        $t_lenth = strlen($T);
        for ($i = 0; $i < $t_lenth; $i++) {
            if ($T[$i] !== '#') {
                $t_stack->push($T[$i]);
            } elseif (!$t_stack->isEmpty()) {
                $t_stack->pop();
            }
        }

        while (!$s_stack->isEmpty() && !$t_stack->isEmpty()) {
            if ($s_stack->pop() !== $t_stack->pop()) {
                return false;
            }
        }

        return $s_stack->isEmpty() && $t_stack->isEmpty();
    }

    /**
     * 两数之和
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target) {

    }
}

$res = new Solution();
$res = $res->backspaceCompare('#A#B', '##AB##B');
var_dump($res);