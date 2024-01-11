<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PurchaseOrderRow
    {

        private ?array $productSpecifier;


        private int $purchaseCount;

        public function getProductSpecifier(): ?array
        {
            return $this->productSpecifier;
        }

        public function withProductSpecifier(?array $productSpecifier): static
        {
            $new                   = clone $this;
            $new->productSpecifier = $productSpecifier;

            return $new;
        }

        public function getPurchaseCount(): int
        {
            return $this->purchaseCount;
        }

        public function withPurchaseCount(int $purchaseCount): static
        {
            $new                = clone $this;
            $new->purchaseCount = $purchaseCount;

            return $new;
        }

    }

