<?php

    namespace App;

    abstract class Animal
    {

        private readonly string $name;

        /**
         * @param string $name
         */
        public function __construct(string $name)
        {
            $this->name = $name;
        }
        /**
         * @return string
         */

        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @return string
         */
        abstract protected function getNoise(): string;

        public function noise(): string
        {
            return $this->getNoise();
        }
    }