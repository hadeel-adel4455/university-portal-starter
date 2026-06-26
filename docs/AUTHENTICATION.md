abstract class Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return ['auth'];
    }
}