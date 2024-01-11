<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class CancelPurchase implements RequestInterface
    {

        private ClientContext $context;

        private array $cancelPurchaseOrder;

        public function __construct(
            ClientContext $context, array $cancelPurchaseOrder
        ) {
            $this->context             = $context;
            $this->cancelPurchaseOrder = $cancelPurchaseOrder;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getCancelPurchaseOrder(): ?array
        {
            return $this->cancelPurchaseOrder;
        }

        public function withCancelPurchaseOrder(array $cancelPurchaseOrder
        ): static {
            $new                      = clone $this;
            $new->cancelPurchaseOrder = $cancelPurchaseOrder;

            return $new;
        }

    }

