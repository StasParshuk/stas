
<?php
require_once "setting.php";

class Logger

{
    public function log(format $format,deliver $deliver, string $massage)
    {

        return var_dump($deliver->deliver($format->format($massage)));
    }

}

interface format{
    public function format($string): string;
}
interface deliver{
    public function deliver($string): string;
}
class Raw implements format{
    public function format($string): string{
        return $string;
    }
}
class Date implements format{
    public function format($string): string{
        return date('Y-m-d H:i:s') . $string;
    }
}
class DateAndDetails implements format{
    public function format($string): string{
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}






class ToEmail implements deliver{
    public function deliver($format): string{
        return "Вывод формата ({$format}) по имейл";

    }
}
class ToSms implements deliver{
    public function deliver($format): string{
        return "Вывод формата ({$format}) в смс";
    }
}
class ToConsole implements deliver{
    public function deliver($format): string{
        return "Вывод формата ({$format}) в консоль";
    }
}


$logger = new Logger();
$logger->log(new Date, new ToEmail,'Emergency error! Please fix me!');