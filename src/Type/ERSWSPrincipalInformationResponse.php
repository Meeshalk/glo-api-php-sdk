<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSPrincipalInformationResponse extends ERSWSResponse
    {

        private Principal $requestedPrincipal;


        private ?string $accountClass;


        private ?string $languageCode;


        private ?string $language;


        private ?string $DA5Balance;


        private ?string $userId;


        private ?string $nativeResultCode;

        public function getRequestedPrincipal(): ?Principal
        {
            return $this->requestedPrincipal;
        }

        public function withRequestedPrincipal(
            Principal $requestedPrincipal
        ): static {
            $new                     = clone $this;
            $new->requestedPrincipal = $requestedPrincipal;

            return $new;
        }

        public function getAccountClass(): ?string
        {
            return $this->accountClass;
        }

        public function withAccountClass(string $accountClass): static
        {
            $new               = clone $this;
            $new->accountClass = $accountClass;

            return $new;
        }

        public function getLanguageCode(): ?string
        {
            return $this->languageCode;
        }

        public function withLanguageCode(string $languageCode): static
        {
            $new               = clone $this;
            $new->languageCode = $languageCode;

            return $new;
        }

        public function getLanguage(): ?string
        {
            return $this->language;
        }

        public function withLanguage(string $language): static
        {
            $new           = clone $this;
            $new->language = $language;

            return $new;
        }

        public function getDA5Balance(): ?string
        {
            return $this->DA5Balance;
        }

        public function withDA5Balance(string $DA5Balance): static
        {
            $new             = clone $this;
            $new->DA5Balance = $DA5Balance;

            return $new;
        }

        public function getUserId(): ?string
        {
            return $this->userId;
        }

        public function withUserId(string $userId): static
        {
            $new         = clone $this;
            $new->userId = $userId;

            return $new;
        }

        public function getNativeResultCode(): ?string
        {
            return $this->nativeResultCode;
        }

        public function withNativeResultCode(string $nativeResultCode): static
        {
            $new                   = clone $this;
            $new->nativeResultCode = $nativeResultCode;

            return $new;
        }

    }

