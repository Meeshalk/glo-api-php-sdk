<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class Map
    {

        private ?array $entry;

        public function getEntry(): ?array
        {
            return $this->entry;
        }

        public function withEntry(?array $entry): static
        {
            $new        = clone $this;
            $new->entry = $entry;

            return $new;
        }

    }

