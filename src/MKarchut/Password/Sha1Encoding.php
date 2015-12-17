<?php

namespace MKarchut\Password;


use Jkan\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return sha1($plainText);
    }
}