<?php

class __Mustache_f06301fe945a842bc6d641f7fbde75b8 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="copyright-area bg-dark text-light footer-header-underline">
';
        $buffer .= $indent . '   <div class="container">
';
        $buffer .= $indent . '        <div class="row ">
';
        $buffer .= $indent . '            <div class="col-12 text-center hy-pt-10 social-links">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('block20social'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-12 text-center">
';
        $buffer .= $indent . '                <div class="copyright-area ">
';
        $buffer .= $indent . '                    <small>
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('block20copyright'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' 
';
        $buffer .= $indent . '                    </small>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
