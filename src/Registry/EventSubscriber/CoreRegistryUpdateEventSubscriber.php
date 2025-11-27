<?php

namespace Drupal\dmf_distributor_mail\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Mail\Manager\MailManagerInterface;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber
{
    public function __construct(MailManagerInterface $mailManager)
    {
        parent::__construct(new DistributorMailInitialization($mailManager, 'dmf_distributor_mail'));
    }
}