<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class Parameter
    {

        private ?string $key;


        private ?string $value;

        public function getKey(): ?string
        {
            return $this->key;
        }

        public function withKey(string $key): static
        {
            $new      = clone $this;
            $new->key = $key;

            return $new;
        }

        public function getValue(): ?string
        {
            return $this->value;
        }

        public function withValue(string $value): static
        {
            $new        = clone $this;
            $new->value = $value;

            return $new;
        }

    }

