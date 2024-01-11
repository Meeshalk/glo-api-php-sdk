<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class UpdateReseller implements RequestInterface
    {

        private ?ClientContext $context;


        private ?TargetPrincipal $targetReseller;


        private ?UpdateResellerParams $updateResellerProfile;

        public function __construct(
            ?ClientContext $context, ?TargetPrincipal $targetReseller,
            ?UpdateResellerParams $updateResellerProfile
        ) {
            $this->context               = $context;
            $this->targetReseller        = $targetReseller;
            $this->updateResellerProfile = $updateResellerProfile;
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

        public function getTargetReseller(): ?TargetPrincipal
        {
            return $this->targetReseller;
        }

        public function withTargetReseller(?TargetPrincipal $targetReseller
        ): static {
            $new                 = clone $this;
            $new->targetReseller = $targetReseller;

            return $new;
        }

        public function getUpdateResellerProfile(): ?UpdateResellerParams
        {
            return $this->updateResellerProfile;
        }

        public function withUpdateResellerProfile(
            ?UpdateResellerParams $updateResellerProfile
        ): static {
            $new                        = clone $this;
            $new->updateResellerProfile = $updateResellerProfile;

            return $new;
        }

    }

