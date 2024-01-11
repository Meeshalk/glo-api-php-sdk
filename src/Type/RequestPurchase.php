<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RequestPurchase implements RequestInterface
    {

        private ?ClientContext $context;


        private ?PrincipalId $senderPrincipalId;


        private ?PrincipalId $receiverPrincipalId;


        private ?PrincipalAccountSpecifier $senderAccountSpecifier;


        private ?PrincipalAccountSpecifier $receiverAccountSpecifier;


        private ?array $purchaseOrder;


        private ?Map $extraFields;

        public function __construct(
            ?ClientContext $context, ?PrincipalId $senderPrincipalId,
            ?PrincipalId $receiverPrincipalId,
            ?PrincipalAccountSpecifier $senderAccountSpecifier,
            ?PrincipalAccountSpecifier $receiverAccountSpecifier,
            ?array $purchaseOrder, ?Map $extraFields
        ) {
            $this->context                  = $context;
            $this->senderPrincipalId        = $senderPrincipalId;
            $this->receiverPrincipalId      = $receiverPrincipalId;
            $this->senderAccountSpecifier   = $senderAccountSpecifier;
            $this->receiverAccountSpecifier = $receiverAccountSpecifier;
            $this->purchaseOrder            = $purchaseOrder;
            $this->extraFields              = $extraFields;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(?ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getSenderPrincipalId(): ?PrincipalId
        {
            return $this->senderPrincipalId;
        }

        public function withSenderPrincipalId(?PrincipalId $senderPrincipalId
        ): static {
            $new                    = clone $this;
            $new->senderPrincipalId = $senderPrincipalId;

            return $new;
        }

        public function getReceiverPrincipalId(): ?PrincipalId
        {
            return $this->receiverPrincipalId;
        }

        public function withReceiverPrincipalId(
            ?PrincipalId $receiverPrincipalId
        ): static {
            $new                      = clone $this;
            $new->receiverPrincipalId = $receiverPrincipalId;

            return $new;
        }

        public function getSenderAccountSpecifier(): ?PrincipalAccountSpecifier
        {
            return $this->senderAccountSpecifier;
        }

        public function withSenderAccountSpecifier(
            ?PrincipalAccountSpecifier $senderAccountSpecifier
        ): static {
            $new                         = clone $this;
            $new->senderAccountSpecifier = $senderAccountSpecifier;

            return $new;
        }

        public function getReceiverAccountSpecifier(
        ): ?PrincipalAccountSpecifier
        {
            return $this->receiverAccountSpecifier;
        }

        public function withReceiverAccountSpecifier(
            ?PrincipalAccountSpecifier $receiverAccountSpecifier
        ): static {
            $new                           = clone $this;
            $new->receiverAccountSpecifier = $receiverAccountSpecifier;

            return $new;
        }

        public function getPurchaseOrder(): ?array
        {
            return $this->purchaseOrder;
        }

        public function withPurchaseOrder(?array $purchaseOrder): static
        {
            $new                = clone $this;
            $new->purchaseOrder = $purchaseOrder;

            return $new;
        }

        public function getExtraFields(): ?Map
        {
            return $this->extraFields;
        }

        public function withExtraFields(?Map $extraFields): static
        {
            $new              = clone $this;
            $new->extraFields = $extraFields;

            return $new;
        }

    }

