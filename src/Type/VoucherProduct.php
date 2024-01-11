<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class VoucherProduct
    {

        private ?Amount $productAmount;


        private ?string $productSKU;

        public function getProductAmount(): ?Amount
        {
            return $this->productAmount;
        }

        public function withProductAmount(?Amount $productAmount): static
        {
            $new                = clone $this;
            $new->productAmount = $productAmount;

            return $new;
        }

        public function getProductSKU(): ?string
        {
            return $this->productSKU;
        }

        public function withProductSKU(?string $productSKU): static
        {
            $new             = clone $this;
            $new->productSKU = $productSKU;

            return $new;
        }

    }

