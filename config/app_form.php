<?php

return [
    'formGroup' => '{{label}}{{input}}',
    'nestingLabel' => '<label{{attrs}}>{{text}}</label>{{hidden}}{{input}}',
    'inputContainer' => '<div class="form-group {{type}}{{required}}">
        {{content}} <span class="help">{{help}}</span></div>',
    // Used for button elements in button().
    'button' => '<button{{attrs}}>{{text}}</button>',
    // Generic input element.
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}} autocomplete="off"/>',
    // Used for button elements in button().
    'button' => '<button class="btn btn-purple waves-effect waves-light" {{attrs}}>{{text}}</button>',
    // Textarea input element,
    'textarea' => '<textarea class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
    'select' => '<select name="{{name}}" data-live-search="true"  data-style="btn-custom" class="selectpicker" {{attrs}}>{{content}}</select>',
    'file' => '<input type="file" name="{{name}}" class="form-control" {{attrs}}/>',
];
