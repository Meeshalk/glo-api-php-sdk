<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ProductDetail
    {

        private ?Map $map;

        public function getMap(): ?Map
        {
            return $this->map;
        }

        public function withMap(?Map $map): static
        {
            $new      = clone $this;
            $new->map = $map;

            return $new;
        }

    }

