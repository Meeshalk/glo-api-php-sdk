<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class ChangePrincipalPassword implements RequestInterface
    {

        private ClientContext $context;

        private PrincipalId $principalId;

        private string $newPassword;

        public function __construct(
            ClientContext $context, PrincipalId $principalId,
            string $newPassword
        ) {
            $this->context     = $context;
            $this->principalId = $principalId;
            $this->newPassword = $newPassword;
        }

        public function getContext(): ?ClientContext
        {
            return $this->context;
        }

        public function withContext(ClientContext $context): static
        {
            $new          = clone $this;
            $new->context = $context;

            return $new;
        }

        public function getPrincipalId(): ?PrincipalId
        {
            return $this->principalId;
        }

        public function withPrincipalId(PrincipalId $principalId): static
        {
            $new              = clone $this;
            $new->principalId = $principalId;

            return $new;
        }

        public function getNewPassword(): ?string
        {
            return $this->newPassword;
        }

        public function withNewPassword(string $newPassword): static
        {
            $new              = clone $this;
            $new->newPassword = $newPassword;

            return $new;
        }

    }

