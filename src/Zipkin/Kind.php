<?php

namespace Zipkin\Kind;

const CLIENT = 'client';

const SERVER = 'server';

/**
* When present, {@link #start()} is the moment a producer sent a message to a destination.
* A duration between {@link #start()} and {@link #finish()} may imply batching delay. {@link
* #remoteEndpoint(Endpoint)} indicates the destination, such as a broker.
*
* <p>Unlike {@link #CLIENT}, messaging spans never share a span ID. For example, the {@link
* #CONSUMER} of the same message has {@link TraceContext#parentId()} set to this span's {@link
* TraceContext#spanId()}.
*/
const PRODUCER = 'producer';

/**
* When present, {@link #start()} is the moment a consumer received a message from an
* origin. A duration between {@link #start()} and {@link #finish()} may imply a processing backlog.
* while {@link #remoteEndpoint(Endpoint)} indicates the origin, such as a broker.
*
* <p>Unlike {@link #SERVER}, messaging spans never share a span ID. For example, the {@link
* #PRODUCER} of this message is the {@link TraceContext#parentId()} of this span.
*/
const CONSUMER = 'consumer';