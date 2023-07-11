<?php

class __Mustache_82c19e8d7301c08be94663c562c1f192 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block03desing1 gray-bg">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row blockbgcolor-t">
';
        $buffer .= $indent . '            <div class="col-lg-12 text-center blockbgcolor-b">
';
        $buffer .= $indent . '                <div class="section-title-fp hytext">
';
        $buffer .= $indent . '                    <h4>';
        $value = $this->resolveValue($context->find('block03header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="row">
';
        $value = $context->find('block03');
        $buffer .= $this->section357c4d77a856aa4133022190ac708b4e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBb255b553790721d985b5c11c39036e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{icon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357c4d77a856aa4133022190ac708b4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-4 col-md-6">
                <div class="single-bemax-item d-flex">
                    <div class="item-icon">
                        <a class="text-decoration-none" href="{{link}}">{{#pix}}{{icon}}{{/pix}}</a>
                    </div>
                    <div class="item-content">
                        <h6><a class="text-decoration-none" href="{{link}}">{{title}}</a></h6>
                        <p>{{caption}}</p>
                    </div>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-lg-4 col-md-6">
';
                $buffer .= $indent . '                <div class="single-bemax-item d-flex">
';
                $buffer .= $indent . '                    <div class="item-icon">
';
                $buffer .= $indent . '                        <a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->sectionBb255b553790721d985b5c11c39036e3($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="item-content">
';
                $buffer .= $indent . '                        <h6><a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h6>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
