<?php

namespace Drupal\dmf_distributor_mail\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Mail\Manager\MailManagerInterface;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber
{
    public function __construct(MailManagerInterface $mailManager)
    {
        parent::__construct(new DistributorMailInitialization($mailManager, 'dmf_distributor_mail'));
    }
}