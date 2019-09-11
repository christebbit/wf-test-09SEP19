<?php

// this just populates $data with test data
// no need to change anything here

$data = array(
    
    new DeliveryData('Email', 'Fax', 10000),
    new DeliveryData('MQ', 'Fax', 200000),
    new DeliveryData('REST', 'Fax', 300000),
    new DeliveryData('Email', 'SMS', 100100),
    new DeliveryData('SMPP', 'SMS', 100200),
    new DeliveryData('SOAP', 'SMS', 100300),
    new DeliveryData('SMPP', 'Voice', 100400),
    new DeliveryData('SMS', 'Voice', 100500),
    new DeliveryData('SMS', 'REST', 120600),
    new DeliveryData('REST', 'Voice', 100600),
    new DeliveryData('REST', 'Fax', 400000),
    new DeliveryData('Fax', 'Email', 120100),
    new DeliveryData('Fax', 'REST', 120200),
    new DeliveryData('SMS', 'REST', 120300),
    
    
);