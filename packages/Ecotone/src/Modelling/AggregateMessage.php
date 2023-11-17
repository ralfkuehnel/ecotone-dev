<?php

namespace Ecotone\Modelling;

use Ecotone\Messaging\Handler\TypeDescriptor;
use Ecotone\Messaging\Message;
use Ecotone\Messaging\MessageHeaders;
use Ecotone\Messaging\Metadata\RevisionMetadataEnricher;
use Ecotone\Messaging\Support\Assert;
use Ecotone\Messaging\Support\InvalidArgumentException;
use Ramsey\Uuid\Uuid;

/**
 * Interface CQRS
 * @package Ecotone\Modelling
 * @author  Dariusz Gafka <dgafka.mail@gmail.com>
 */
interface AggregateMessage
{
    public const OVERRIDE_AGGREGATE_IDENTIFIER = 'aggregate.id';
    public const AGGREGATE_OBJECT_EXISTS = 'ecotone.modelling.aggregate_exists';
    public const CALLED_AGGREGATE_OBJECT = 'ecotone.modelling.called_aggregate';
    public const RESULT_AGGREGATE_OBJECT = 'ecotone.modelling.result_aggregate';
    public const AGGREGATE_ID = 'ecotone.modelling.aggregate.id';
    public const TARGET_VERSION = 'ecotone.modelling.aggregate.target_version';
    public const CALLED_AGGREGATE_EVENTS = 'ecotone.modelling.called_aggregate_events';
    public const RESULT_AGGREGATE_EVENTS = 'ecotone.modelling.result_aggregate_events';
}
