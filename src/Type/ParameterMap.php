<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ParameterMap
    {

        private ?MapArray $parameter;

        public function getParameter(): ?MapArray
        {
            return $this->parameter;
        }

        public function withParameter(?MapArray $parameter): static
        {
            $new            = clone $this;
            $new->parameter = $parameter;

            return $new;
        }

    }

