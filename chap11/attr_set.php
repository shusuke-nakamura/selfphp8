<?php
#[MyAttribute]
class MyClass
{
    #[MyAttribute]
    public const HOGE = '...';

    #[MyAttribute]
    public string $bar;

    public function baz(#[MyAttribute] string $value): void
    {
    }
}

$obj = new #[MyAttribute] class()
{
};

#[MyAttribute]
function fuga(): void
{
}

$piyo = #[MyAttribute] function () {
};
$piyo2 = #[MyAttribute] fn () => 100;
