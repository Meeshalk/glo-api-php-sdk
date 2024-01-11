<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RegisterSubReseller implements RequestInterface
    {

        private ?ClientContext $context;


        private ?string $resellerId;


        private ?string $resellerMsisdn;


        private ?string $resellerType;


        private ?string $parentResellerId;


        private ?string $firstName;


        private ?string $lastName;


        private ?string $defaultPin;

        public function __construct(
            ?ClientContext $context, ?string $resellerId,
            ?string $resellerMsisdn, ?string $resellerType,
            ?string $parentResellerId, ?string $firstName, ?string $lastName,
            ?string $defaultPin
        ) {
            $this->context          = $context;
            $this->resellerId       = $resellerId;
            $this->resellerMsisdn   = $resellerMsisdn;
            $this->resellerType     = $resellerType;
            $this->parentResellerId = $parentResellerId;
            $this->firstName        = $firstName;
            $this->lastName         = $lastName;
            $this->defaultPin       = $defaultPin;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(?ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getResellerId(): ?string
        {
            return $this->resellerId;
        }

        public function withResellerId(?string $resellerId): static
        {
            $new             = clone $this;
            $new->resellerId = $resellerId;

            return $new;
        }

        public function getResellerMsisdn(): ?string
        {
            return $this->resellerMsisdn;
        }

        public function withResellerMsisdn(?string $resellerMsisdn): static
        {
            $new                 = clone $this;
            $new->resellerMsisdn = $resellerMsisdn;

            return $new;
        }

        public function getResellerType(): ?string
        {
            return $this->resellerType;
        }

        public function withResellerType(?string $resellerType): static
        {
            $new               = clone $this;
            $new->resellerType = $resellerType;

            return $new;
        }

        public function getParentResellerId(): ?string
        {
            return $this->parentResellerId;
        }

        public function withParentResellerId(?string $parentResellerId): static
        {
            $new                   = clone $this;
            $new->parentResellerId = $parentResellerId;

            return $new;
        }

        public function getFirstName(): ?string
        {
            return $this->firstName;
        }

        public function withFirstName(?string $firstName): static
        {
            $new            = clone $this;
            $new->firstName = $firstName;

            return $new;
        }

        public function getLastName(): ?string
        {
            return $this->lastName;
        }

        public function withLastName(?string $lastName): static
        {
            $new           = clone $this;
            $new->lastName = $lastName;

            return $new;
        }

        public function getDefaultPin(): ?string
        {
            return $this->defaultPin;
        }

        public function withDefaultPin(?string $defaultPin): static
        {
            $new             = clone $this;
            $new->defaultPin = $defaultPin;

            return $new;
        }

    }

