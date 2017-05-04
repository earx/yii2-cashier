<?php

namespace earx\cashier\tests\data;

use earx\cashier\controllers\WebhookController;

/**
 * Class CashierTestControllerStub
 *
 * @package earx\cashier\tests\data
 */
class CashierTestControllerStub extends WebhookController
{
    protected function eventExistsOnStripe($id)
    {
        return true;
    }
}
