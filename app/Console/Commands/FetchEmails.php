<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JaredClemence\Imap\Client;

class FetchEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
	protected $signature = 'emails:fetch';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch emails using the custom IMAP library.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
	    $host = env('IMAP_HOST');
                    $port = env('IMAP_PORT', '993');
                    $enc = env('IMAP_ENCRYPTION', 'ssl');
                    $username = env( 'IMAP_USERNAME');
		    $password = env( 'IMAP_PASSWORD');
		    $endpoint = '{'.$host.':'.$port.'/imap/'.$enc.'}';
	    $client = new Client( $endpoint, $username, $password );
	    $client->connect();
	    $folder = $client->getFolder();
	    $messages = $folder->getMessages();
	    foreach( $messages as $message ){
		    $this->info( "Subject: ". $message->getSubject() );
		    $this->info( "From: " . $message->getFrom() );
		    $this->info( "Body: " . $message->getBody());
	    }
	    $client->disconnect();

    }

	    public function handle_v1(){
	    try{
		    $host = env('IMAP_HOST');
		    $port = env('IMAP_PORT', '993');
		    $enc = env('IMAP_ENCRYPTION', 'ssl');
		    $username = env( 'IMAP_USERNAME');
		    $password = env( 'IMAP_PASSWORD');
		    $imapClient = new ImapClient(
                	'{'.$host.':'.$port.'/imap/'.$enc.'}',
                	$username,
                	$password
            		);

            $imapClient->connect();

            $folders = $imapClient->getFolders();
            foreach ($folders as $folder) {
                $this->info("Folder: $folder");
                $messages = $imapClient->getMessages($folder);

                foreach ($messages as $message) {
                    $this->info("Subject: " . $message['subject']);
                    $this->info("From: " . $message['from']);
                    $this->info("Body: " . $message['body']);
                }
            }

            $imapClient->close();
	    }catch(\Exceptoin $e){
		    $this->error('Error: ' . $e->getMessage());
	    }
    }
}
