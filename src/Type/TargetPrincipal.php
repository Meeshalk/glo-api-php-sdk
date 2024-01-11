<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class TargetPrincipal
    {

        private ?PrincipalId $principalId;

        public function getPrincipalId(): ?PrincipalId
        {
            return $this->principalId;
        }

        public function withPrincipalId(?PrincipalId $principalId): static
        {
            $new              = clone $this;
            $new->principalId = $principalId;

            return $new;
        }

    }

