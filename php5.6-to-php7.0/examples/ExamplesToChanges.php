<?php

use registry\helpers\{RegistryHelper, SubscriberHelper};

/**
 * Class ExamplesToChanges
 */
final class ExamplesToChanges
{

    /**
     * Nave operator
     */
    public function spaceshipOperator()
    {
        $varOne = 15;
        $sameVarOne = $varOne;
        $varTwo = 5;

        var_dump($varOne <=> $sameVarOne); // return 0
        var_dump($varOne <=> $varTwo); // return 1
        var_dump($varTwo <=> $varOne); // return -1
    }

    /**
     * Return type
     *
     * @return Registry
     */
    public function returnType(): Registry
    {
        return new Registry(); // valid
        // return null; // invalid
        // return 911; // invalid
        // return new OtherClass(); // invalid
    }

    /**
     * Scalar params
     *
     * @param float $varOne
     * @param string $varTwo
     * @return string
     */
    public function scalarParams(float $varOne, string $varTwo): string
    {
        return $varOne . $varTwo;
    }

    /**
     * Print emoji
     */
    public function printEmoji()
    {
        echo "\u{1F606}"; // 😆
    }

    /**
     * Null coalesce
     *
     * @return mixed|string
     */
    public function nullCoalesce()
    {
        $list = ['studie' => 'php'];

        return $list['c++'] ?? 'ok'; // invalid
    }

    /**
     * Uniform variable
     *
     * @param Registry $registry
     */
    public function uniformVar(Registry $registry)
    {
        $registry->getSubscribersActive()[0]->markAsActive();
    }

    /**
     * Class anon
     *
     * @return mixed
     */
    public function classAnon()
    {
        return (new class {
            public function exec(): string
            {
                return "ok";
            }
        })->exec();
    }

    /**
     * Exception manipulation
     *
     * @param Throwable $throwable
     * @return string
     */
    public function errorHandler(Throwable $throwable): string
    {
        return $throwable->getMessage();
    }

    /**
     * Hex not number
     */
    public function hexNotNumber()
    {
        var_dump("0x123" === "291"); // bool(false)
        var_dump(is_numeric("0x123")); // bool(false)
        var_dump("0xe" + "0x1"); // int(0)
        var_dump(substr("foo", "0x1")); // Notice: A non well formed numeric value encountered in /php5.6-to-php7.0/examples/ExamplesToChanges.php on line 111 string(3) "foo"
    }

    /**
     * Switch statements cannot have multiple default blocks
     *
     * @param Registry $registry
     * @return int
     */
    public function switchDontBlocMoreOneDefault(Registry $registry)
    {
        switch ($registry->getCode()) {
            default:
                return 01;
                break;
            default:
                return 00;
                break;
        }

        // E_COMPILE_ERROR
    }

    /**
     * $HTTP_RAW_POST_DATA removed
     *
     * @return string
     */
    public function removedHttpRawPostData(): string
    {
        return "php://input"; // invalid
        // return $HTTP_RAW_POST_DATA;
    }
}