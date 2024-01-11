<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSGetVouchersDenominationResponse extends ERSWSResponse
    {

        private array $products;

        public function getProducts(): ?array
        {
            return $this->products;
        }

        public function withProducts(array $products): static
        {
            $new           = clone $this;
            $new->products = $products;

            return $new;
        }

    }

