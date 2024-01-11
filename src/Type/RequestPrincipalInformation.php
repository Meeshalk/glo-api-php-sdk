<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RequestPrincipalInformation implements RequestInterface
    {

        private ClientContext $context;

        private PrincipalId $principalId;

        private ?string $nativeReslutCode;

        public function __construct(
            ClientContext $context,
            PrincipalId $principalId,
            ?string $nativeReslutCode
        ) {
            $this->context          = $context;
            $this->principalId      = $principalId;
            $this->nativeReslutCode = $nativeReslutCode;
        }

        public function getContext(): ClientContext
        {
            return $this->context;
        }

        public function withContext(ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getPrincipalId(): PrincipalId
        {
            return $this->principalId;
        }

        public function withPrincipalId(PrincipalId $principalId): static
        {
            $new              = clone $this;
            $new->principalId = $principalId;

            return $new;
        }

        public function getNativeReslutCode(): ?string
        {
            return $this->nativeReslutCode;
        }

        public function withNativeReslutCode(?string $nativeReslutCode): static
        {
            $new                   = clone $this;
            $new->nativeReslutCode = $nativeReslutCode;

            return $new;
        }

    }

