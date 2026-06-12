<?php

trait Validatable {

    protected function validateNotEmpty($value) {

        return trim($value) !== "";

    }

    protected function validateYear($year){

        return $year >= 1900;
    }

}