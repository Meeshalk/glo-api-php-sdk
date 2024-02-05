<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PurchaseOrderResultRow extends PurchaseOrderRow
    {

        private ?array $productDetails;

        public function getProductDetails(): ?array
        {
            return $this->productDetails;
        }

        public function withProductDetails(?array $productDetails): static
        {
            $new                 = clone $this;
            $new->productDetails = $productDetails;

            return $new;
        }

    }

