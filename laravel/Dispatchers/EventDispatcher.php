<?php
declare(strict_types=1);

namespace EonX\EasyEventDispatcher\Laravel\Dispatchers;

use EonX\EasyEventDispatcher\Dispatcher\EventDispatcherInterface;
use Illuminate\Contracts\Events\Dispatcher as IlluminateDispatcherContract;

final readonly class EventDispatcher implements EventDispatcherInterface
{
    public function __construct(
        private IlluminateDispatcherContract $dispatcher,
    ) {
    }

    public function dispatch(object $event): object
    {
        $this->dispatcher->dispatch($event);

        return $event;
    }
}
