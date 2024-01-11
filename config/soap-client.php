<?php

    use Phpro\SoapClient\CodeGenerator\Assembler;
    use Phpro\SoapClient\CodeGenerator\Config\Config;
    use Phpro\SoapClient\CodeGenerator\Rules;
    use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;

    return Config::create()
        ->setEngine($engine = CodeGeneratorEngineFactory::create(
            'http://localhost:8878/topupservice/service?wsdl'
        ))
        ->setTypeDestination('src/Type')
        ->setTypeNamespace('Meeshalk\GloERSWebServiceSdk\Type')
        ->setClientDestination('src')
        ->setClientName('GloERSClient')
        ->setClientNamespace('Meeshalk\GloERSWebServiceSdk')
        ->setClassMapDestination('src')
        ->setClassMapName('GloERSClassmap')
        ->setClassMapNamespace('Meeshalk\GloERSWebServiceSdk')
        ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
            (new Assembler\GetterAssemblerOptions())->withDocBlocks(false)
        )))
        ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
            (new Assembler\ImmutableSetterAssemblerOptions())->withDocBlocks(false)
        )))
        ->addRule(
            new Rules\IsRequestRule(
                $engine->getMetadata(),
                new Rules\MultiRule([
                    new Rules\AssembleRule(new Assembler\RequestAssembler()),
                    new Rules\AssembleRule(new Assembler\ConstructorAssembler(
                        (new Assembler\ConstructorAssemblerOptions())->withDocBlocks(false)
                    )),
                ])
            )
        )
        ->addRule(
            new Rules\IsResultRule(
                $engine->getMetadata(),
                new Rules\MultiRule([
                    new Rules\AssembleRule(new Assembler\ResultAssembler()),
                ])
            )
        )
        ->addRule(
            new Rules\IsExtendingTypeRule(
                $engine->getMetadata(),
                new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
            )
        )
        ->addRule(
            new Rules\IsAbstractTypeRule(
                $engine->getMetadata(),
                new Rules\AssembleRule(new Assembler\AbstractClassAssembler())
            )
        );