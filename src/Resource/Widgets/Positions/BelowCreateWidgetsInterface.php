<?php
declare(strict_types=1);

namespace KiwiSuite\Contract\Resource\Widgets\Positions;

use KiwiSuite\Contract\Admin\DashboardWidgetCollectorInterface;
use KiwiSuite\Admin\Entity\User;

interface BelowCreateWidgetsInterface
{
    public function receiveBelowCreateWidgets(User $user, DashboardWidgetCollectorInterface $widgetCollector): void;
}