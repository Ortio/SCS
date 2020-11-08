<?php

return [

    /*
     * Set the names of files you want to add to generated javascript.
     * Otherwise all the files will be included.
     *
     * 'messages' => [
     *     'validation',
     *     'forum/thread',
     * ],
     */
    'messages' => [
         'validation',
         'auth',
         'pagination',
         'passwords',
         'validation',
         'validation-inline',
    ],

    /*
     * The default path to use for the generated javascript.
     */
    'path' => resource_path('js/translation.js'),
//    'path' => public_path('messages.js'),
];
