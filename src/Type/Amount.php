<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class Amount
    {

        private string $currency;

        private float $value;

        public function getCurrency(): string
        {
            return $this->currency;
        }

        public function withCurrency(string $currency): static
        {
            $new           = clone $this;
            $new->currency = $currency;

            return $new;
        }

        public function getValue(): float
        {
            return $this->value;
        }

        public function withValue(float $value): static
        {
            $new        = clone $this;
            $new->value = $value;

            return $new;
        }

    }

