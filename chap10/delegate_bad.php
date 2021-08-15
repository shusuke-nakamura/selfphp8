<?php
class FileLogger extends SplFileObject
{
    public DateTime $current;

    public function __construct(string $logname)
    {
        $this->current = new DateTime();
        parent::__construct("{$logname}-{$this->current->format('Ymd')}.log", "a");
    }

    public function fwrite(string $str, int $length = 0): int
    {
        return parent::fwrite("［{$this->current->format('Y/m/d')}］{$str}\n");
    }

    public function fread(int $length): string|false
    {
        throw new Exception('Method is not supported.');
    }
}

$logger = new FileLogger('log');
$logger->fwrite('HogeHoge Text');
