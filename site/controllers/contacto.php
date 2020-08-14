<?php
return function($kirby, $page) {

    if ($kirby->request()->is('POST') && get('submit')) {

        // initialize variables
        $alerts      = null;
        $attachments = [];

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        // get the data and validate the other form fields
        $data = [
            'name'      => get('name'),
            'email'     => get('email'),
            'message'   => get('message')
        ];

        $rules = [
            'name'      => ['required', 'min' => 3],
            'email'     => ['required', 'email']
        ];

        $messages = [
            'name'      => 'Por favor escriba un nombre válido.',
            'email'     => 'Por favor escriba un correo válido.'
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alerts = $invalid;
        }

        // get the uploads
        $uploads = $kirby->request()->files()->get('file');

        // we want no more than 3 files
        if (count($uploads) > 3) {
            $alerts[] = 'Solo puedes subir hasta 3 archivos.';
        }

        // loop through uploads and check if they are valid
        foreach ($uploads as $upload) {
            // make sure the user uploads at least one file
            if ($upload['error'] === 4) {
                $alerts[] = 'Tienes que subir al menos un archivo';
            //  make sure there are no other errors  
            } elseif ($upload['error'] !== 0) {
                $alerts[] = 'No se pudo subir tu archivo';
            // make sure the file is not larger than 2MB…    
            } elseif ($upload['size'] > 2000000)  {
                $alerts[] = $upload['name'] . ' tine un tamaño mayor a 2mb';
            // …and the file is a PDF
            } elseif ($upload['type'] !== 'application/pdf') {
                $alerts[] = $upload['name'] . ' no es un archivo pdf';
            // all valid, try to rename the temporary file
            } else {
                $name     = $upload['tmp_name'];
                $tmpName  = pathinfo($name);
                // sanitize the original filename
                $filename = $tmpName['dirname']. '/'. F::safeName($upload['name']);

                if (rename($upload['tmp_name'], $filename)) {
                    $name = $filename;
                }
                // add the files to the attachments array
                $attachments[] = $name;
            }  
        }

        // the data is fine, let's send the email with attachments
        if (empty($alerts)) {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'hey@goldensub.com',
                    'to'       => 'david0cabello0@gmail.com',
                    'subject'     => 'Contacto',
                    'data'        => [
                        'name'      => esc($data['name']),
                        'email'      => esc($data['email']),
                        'message'   => esc($data['message'])
                    ],
                    'attachments' => $attachments
                ]);
            } catch (Exception $error) {
                // we only display a general error message, for debugging use `$error->getMessage()`
                $alerts[] = "El correo no puede ser enviado";
            }

            // no exception occurred, let's send a success message
            if (empty($alerts) === true) {
                // store reference and name in the session for use on the success page
                $kirby->session()->set([
                    'name' => esc($data['name'])
                ]);
                // redirect to the success page
                go('success');
            }
        }
    }

    // return data to template
    return [
        'alerts' => $alerts ?? null,
        'data'   => $data   ?? false,
    ];
};