<?php

use application\exception\{MyException1, MyException2};

/**
 * Class ExamplesToChanges
 */
final class ExamplesToChanges
{

    /**
     * Protected const
     */
    protected const PHP_TYPE = 7.1;


    /**
     * Accept param null or use in return
     *
     * @param int|null $param
     */
    public function nullableTypes(?int $param): void
    {
        if($param) {
            // do it
        } else {
            // do it
        }
    }

    /**
     * Multiples exceptions in same catch
     */
    public function multiplesExceptions(): void
    {
        try {
            // do it
        } catch (MyException1 | MyException2 $e) {
            // do it
        } catch (Exception $e) {
            // do it
        }

    }

    /**
     * Call protected constant
     */
    public function protectedConstant(): void
    {
        echo self::PHP_TYPE; // work
        // echo ExamplesToChanges::PHP_TYPE; // don't work in other class
    }

    /**
     * Void return
     */
    public function permissionVoidReturn(): void
    {
        // do it
    }

    /**
     * Pseudo type iterable in param or use in return function
     *
     * @param iterable $iterable
     */
    public function pseudoTypeIterator(iterable $iterable): void
    {
        foreach($iterable as $key => $value) {
            // do it
        }
    }

    /**
     * Suport to keys in list
     *
     * @return array
     */
    public function keysInList(): array
    {
        $array = [
            ["id" => 1, "name" => 'Fernando'],
            ["id" => 2, "name" => 'Kaleo'],
        ];

        return list("id" => $id1, "name" => $name1) = $array[0];
    }
}
