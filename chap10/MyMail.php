<?php
class MyMail
{
    public string $to;
    public string $subject;
    public string $message;
    private array $headers = [];

    public function __set(string $name, mixed $value): void
    {
        $this->headers[$name] = $value;
    }

    public function __get(string $name): mixed
    {
        return $this->headers[$name];
    }

    public function send(): void
    {
        $other = '';
        foreach ($this->headers as $key => $value) {
            $key = str_replace('_', '-', $key);
            $other .= "{$key}: {$value}\n";
        }
        mb_send_mail($this->to, $this->subject, $this->message, $other);
    }
}
