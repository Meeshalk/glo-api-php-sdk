<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSCancelPurchaseResponse extends ERSWSResponse
    {

        private ?array $cancelPurchaseOrderResult;

        public function getCancelPurchaseOrderResult(): ?array
        {
            return $this->cancelPurchaseOrderResult;
        }

        public function withCancelPurchaseOrderResult(
            array $cancelPurchaseOrderResult
        ): static {
            $new = clone $this;
            $new->cancelPurchaseOrderResult = $cancelPurchaseOrderResult;

            return $new;
        }

    }

