<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ProductSpecifier
    {

        private ?string $productId;


        private ?string $productIdType;

        public function getProductId(): ?string
        {
            return $this->productId;
        }

        public function withProductId(string $productId): static
        {
            $new            = clone $this;
            $new->productId = $productId;

            return $new;
        }

        public function getProductIdType(): ?string
        {
            return $this->productIdType;
        }

        public function withProductIdType(string $productIdType): static
        {
            $new                = clone $this;
            $new->productIdType = $productIdType;

            return $new;
        }

    }

