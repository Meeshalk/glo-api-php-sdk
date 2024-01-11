<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class Report
    {

        private ?string $title;


        private ?string $mimeType;


        private mixed $content;


        private ?string $contentString;

        public function getTitle(): ?string
        {
            return $this->title;
        }

        public function withTitle(?string $title): static
        {
            $new        = clone $this;
            $new->title = $title;

            return $new;
        }

        public function getMimeType(): ?string
        {
            return $this->mimeType;
        }

        public function withMimeType(?string $mimeType): static
        {
            $new           = clone $this;
            $new->mimeType = $mimeType;

            return $new;
        }

        public function getContent(): mixed
        {
            return $this->content;
        }

        public function withContent(mixed $content): static
        {
            $new          = clone $this;
            $new->content = $content;

            return $new;
        }

        public function getContentString(): ?string
        {
            return $this->contentString;
        }

        public function withContentString(?string $contentString): static
        {
            $new                = clone $this;
            $new->contentString = $contentString;

            return $new;
        }

    }

