<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    
    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */
             'credentials' => [
                'type' => env('FIREBASE_TYPE', 'service_account'),
                'project_id' => env('FIREBASE_PROJECT_ID', 'taranda-2f398'),
                'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', '34ee26828bedde7b2b0c938d69bdc252f362ebe0'),
                'private_key' => env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQDEoqkRmpORRasR\neXrrnef8FKuwcvEa5uyloIFdgp3UL0xKkMvq3n1iE9aHTljtSPnJemgy47ujqKFj\nOpE0tPafAegFFcQDOO3X+r8A/CZ8X4Gts6bSuFldPpffUfKOO+CaI4QpupNVlVbB\nqLWzv6k8VJhjaozomIWquc0OMElVZvHljVvJwmEcSgZDkdhyYjG6EdewH/n2M0k/\nSV1t5wKDl57ptAh9SuIWQvp3lxr2S96eSBC5Hw/hQMRFdxS5kGbEnTcy66bdK9aL\nhVIz9E/X9Hm3lx5OSn0jFiZRh8kDU0ai8YF9rgxgZTi7dGIaIcfxUvRVXiYWn+x9\n2D6JqmHdAgMBAAECggEAHSjcrED2ro2yTKkYfWWxR+9DdqsqQ18Iq5cdwrbinjCq\nvkldXrsXxOTu5KnNri0q6EyVXyvpC4qvmX4kl7hY9O4yG27wM7ohgJctSVbF2PPL\ne0LaSQK63dpbveudGKfwgBXRkjlE2BA0CWFHcMcfWv8AijL8KmdT4Hl6hdF1+TVE\nZro7dUAsK7arfwk531o1mbOkIleZQc8f67td/6NqLdSKXB3Pa76U0VjUPXoC+eog\n0IJTfKBlZFgGrA2AdiI2Z30s1CyhOMUO0Wejuh074Fzw9gf8eHPFYPPIwM0mVcVd\nxkL7nsMpbikqkQbP5kGUP2Xcs/BIsNk2YofZlU/nUQKBgQDg5cZosJ+9Gb3VFCO2\nb42SrdcCmiptsR2bo6Wh1EZr03Ec8PuMvVOx2e2vJvLs+gemGDUUEsHW4f8BBRSk\nTdJErfCI2QODTa0yLaVc7jr5G/KOw8d0X67f0vYer7n0WJR7OHjQpFTkvFHuqe0c\n/haeJ9cm6R1INXGQAnuZN4GF5wKBgQDf1Ew2goJhG027YNO3FhMuu1j9CW2Igol/\nhg8ErcjuLYhQ2sHxeJTMbCkI1vTgcHRD52IUmFqSC6cLLZcJmE/EevUO1E03eP33\n0g/ed60rYzvwSGTLLjTWDNZD2Y/UPSOj4QV6ZmSQcYmYHuiRJ4ZEoRLSZdXVzpY8\nSEWIa6dZmwKBgD7+fX3Tg1rfe/nUQ1CVnI0qXmBfOGUzSDzRMNLMd9E6D6PwqDU6\nztexWE9IVKEmQ8A1ZaCyxFLhSKFLgAWpuqz8H7TlPIOp3UqB2KDYJfKi7mUo15R0\nPLJ7D+92f1q++RAuuECQ1yqeyUBVnpIRZdp1BGHkyAvy1FVnLKG1F3WfAoGAOCCS\nY/DiJNul6GDldjnQ4Z0VOY6Nqveg5xuE1JWHl0JPtobEr3qfRYux1oegrE9GuGhj\nTerOe2T0pHbwMvXAuvJiVS+jlU9/0A8a75xvDjw6IYzlyZVypmJdsHH0ATK7pzKc\nHw9iFF6ENGM7ynpwzvDdOWlT7+N4BPHSjd0BABUCgYAjqyEafei5miIATZS2ASAd\nSBgUn3SLFYq4dzcMRfQMdsmoW6NF1DAuP+9qn0N9JSxdJafn7PGCpUhkK9XVNlBh\niHln5OT0PpJhQ5tJQKaqe4NgiBhwz/z4meLZ9wHtSfNwh6Jus2qo0R6X8Kr8vIhu\npg2lV/tTALTBrhFtxWR0WA==\n-----END PRIVATE KEY-----\n'),
                'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-kpv9o@taranda-2f398.iam.gserviceaccount.com'),
                'client_id' => env('FIREBASE_CLIENT_ID', '114786740587373249486'),
                'auth_uri' => env('FIREBASE_AUTH_URI', 'https://accounts.google.com/o/oauth2/auth'),
                'token_uri' => env('FIREBASE_TOKEN_URI', 'https://oauth2.googleapis.com/token'),
                'auth_provider_x509_cert_url' => env('FIREBASE_AUTH_PROVIDER_X509_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs'),
                'client_x509_cert_url' => env('FIREBASE_CLIENT_X509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-kpv9o%40taranda-2f398.iam.gserviceaccount.com'),
            ],
            'database_url' => env('FIREBASE_DATABASE_URL', 'https://taranda-2f398.firebaseio.com'),

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firestore Component
             * ------------------------------------------------------------------------
             */

            'firestore' => [

                /*
                 * If you want to access a Firestore database other than the default database,
                 * enter its name here.
                 *
                 * By default, the Firestore client will connect to the `(default)` database.
                 *
                 * https://firebase.google.com/docs/firestore/manage-databases
                 */

                // 'database' => env('FIREBASE_FIRESTORE_DATABASE'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET', 'taranda-2f398.appspot.com'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
