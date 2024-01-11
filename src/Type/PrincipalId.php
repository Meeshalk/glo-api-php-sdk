<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class PrincipalId
    {

        private ?string $id;

        private ?string $type;

        private ?string $userId;

        public function getId(): ?string
        {
            return $this->id;
        }

        public function withId(string $id): static
        {
            $new     = clone $this;
            $new->id = $id;

            return $new;
        }

        public function getType(): ?string
        {
            return $this->type;
        }

        public function withType(string $type): static
        {
            $new       = clone $this;
            $new->type = $type;

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

    }

