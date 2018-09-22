<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class testFirebase extends Controller
{
    public function index(){

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/smsitp-4bee4-7b7bfcdbeca7.json');

        $firebase = (new Factory)

            ->withServiceAccount($serviceAccount)

            ->withDatabaseUri('https://smsitp-4bee4.firebaseio.com/')

            ->create();

        $database = $firebase->getDatabase();

        $newPost = $database

            ->getReference('Users/Teachers')

            ->push([

                'email' => 'ggg@gmail.com',

                'password' => '960924'

            ]);

        //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-

        //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

        //$newPost->getChild('title')->set('Changed post title');

        //$newPost->getValue(); // Fetches the data from the realtime database

        //$newPost->remove();

                echo"<pre>";

                print_r($newPost->getvalue());

            }

    }

        ?>
}
