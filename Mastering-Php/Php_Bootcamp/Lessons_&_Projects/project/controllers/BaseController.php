<?php

    namespace controllers;

    class BaseController{
        protected $model;

        public function getModel(){
            return $this->model;
        }
    }