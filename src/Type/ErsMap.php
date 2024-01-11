<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ErsMap
    {

        private ?MapArray $map;

        public function getMap(): ?MapArray
        {
            return $this->map;
        }

        public function withMap(MapArray $map): static
        {
            $new      = clone $this;
            $new->map = $map;

            return $new;
        }

    }

