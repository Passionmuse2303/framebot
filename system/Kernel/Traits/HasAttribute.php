<?php
/*
|--------------------------------------------------------------------------
| Framebot
|--------------------------------------------------------------------------
| PHP framework for Telegram bot development. Fast, flexible, feature-rich.
|--------------------------------------------------------------------------
| @category  Framework
| @author    Alireza Javadi
| @license   MIT License
| @link      https://github.com/alirezajavadigit/framebot
|--------------------------------------------------------------------------
| HasAttribute Trait
|--------------------------------------------------------------------------
| The HasAttribute trait in Framebot PHP framework stores Telegram API data,
| facilitating streamlined processing of bot messages.
|--------------------------------------------------------------------------
*/

 namespace System\Kernel\Traits;

 trait HasAttribute
 {
     /**
      * Holds the decoded JSON update received from the Telegram API.
      *
      * @var array
      */
     protected $update;
 
     /**
      * Stores the ID of the received message.
      *
      * @var int
      */
     protected $messageID;
 
     /**
      * Placeholder for future use to store user messages.
      *
      * @var string
      */
     protected $userMessage;
 
     /**
      * Stores the text content of the received message.
      *
      * @var string
      */
     protected $text;
 
     /**
      * Stores the ID of the chat who sent the message.
      *
      * @var int
      */
     protected $chatID;
 
     /**
      * Stores the first name of the user who sent the message.
      *
      * @var string
      */
     protected $first_name;
 
     /**
      * Stores the last name of the user who sent the message.
      *
      * @var string
      */
     protected $last_name;
 
     /**
      * Stores the username of the user who sent the message.
      *
      * @var string
      */
     protected $username;
 
     /**
      * Stores the ID of any photo attached to the message.
      *
      * @var string
      */
     protected $photo_id;
 
     /**
      * Stores the ID of any video attached to the message.
      *
      * @var string
      */
     protected $video_id;
 
     /**
      * Stores the ID of any audio file attached to the message.
      *
      * @var string
      */
     protected $audio_id;
 
     /**
      * Stores the ID of any document attached to the message.
      *
      * @var string
      */
     protected $document_id;
 
     /**
      * Stores the caption of the attached media (if applicable).
      *
      * @var string
      */
     protected $caption;
 
     /**
      * Stores the callback data received from inline keyboards.
      *
      * @var string
      */
     protected $callback;
 
     /**
      * Stores the ID of the chat where the callback originated.
      *
      * @var int
      */
     protected $chat_id;
 
     /**
      * Stores the ID of the callback query.
      *
      * @var string
      */
     protected $callback_query_id;
 
     /**
      * Stores the type of chat where the callback originated (e.g., private, group).
      *
      * @var string
      */
     protected $type;
 
     /**
      * Stores the ID of the update.
      *
      * @var int
      */
     protected $update_id;
 
     /**
      * Stores the text content of the callback message.
      *
      * @var string
      */
     protected $content;
 
     /**
      * Set attributes based on the provided content.
      *
      * @param string $content The JSON content to decode and extract information from.
      */
     private function setAttribute($content)
     {
         // Decode the incoming JSON content.
         $this->update = json_decode($content, true); // Decodes the JSON content and stores it in $this->update.
 
         // Extract relevant information from the update.
         $this->chatID = $this->update['message']['chat']['id']; // Retrieves the chat ID from the update.
         $this->text = persianNumbersToEnglish($this->update['message']['text']); // Converts Persian numbers to English and stores the text content.
         $this->messageID = $this->update['message']['message_id']; // Retrieves the message ID from the update.
 
         // Extract sender details if available.
         if (isset($this->update['message']['from'])) {
             $this->first_name = isset($this->update['message']['from']['first_name']) ? $this->update['message']['from']['first_name'] : '';  // Retrieves the sender's first name.
             $this->last_name = isset($this->update['message']['from']['last_name']) ? $this->update['message']['from']['last_name'] : '';  // Retrieves the sender's first name.
             $this->username = isset($this->update['message']['from']['username']) ? $this->update['message']['from']['username'] : '';  // Retrieves the sender's first name.
         }
 
         // Extract file IDs if present in the message.
         if (isset($this->update['message']['video'])) {
             $this->video_id = $this->update['message']['video']['file_id']; // Retrieves the video ID if a video is attached.
         }
         if (isset($this->update['message']['audio'])) {
             $this->audio_id = $this->update['message']['audio']['file_id']; // Retrieves the audio ID if an audio file is attached.
         }
         if (isset($this->update['message']['document'])) {
             $this->document_id = $this->update['message']['document']['file_id']; // Retrieves the document ID if a document is attached.
         }
         if (isset($this->update['message']['photo'][0]['file_id'])) {
             $this->photo_id = end($this->update['message']['photo'])['file_id']; // Retrieves the photo ID if a photo is attached.
         }
 
         // Extract caption if available.
         if (isset($this->update['message']['caption'])) {
             $this->caption = $this->update['message']['caption']; // Retrieves the caption if available.
         }
 
         // Extract callback details if present.
         if (isset($this->update['callback_query']['data'])) {
             $this->callback = $this->update['callback_query']['data']; // Retrieves the callback data.
             $this->chat_id = $this->update['callback_query']['from']['id']; // Retrieves the chat ID.
             $this->first_name = $this->update['callback_query']['from']['first_name']; // Retrieves the sender's first name.
             $this->last_name = $this->update['callback_query']['from']['last_name']; // Retrieves the sender's last name.
             $this->username = $this->update['callback_query']['from']['username']; // Retrieves the sender's username.
             $this->callback_query_id = $this->update['callback_query']['id']; // Retrieves the callback query ID.
             $this->type = $this->update['callback_query']['message']['chat']['type']; // Retrieves the type of chat.
             $this->update_id = $this->update['callback_query']['message']['message_id']; // Retrieves the update ID.
             $this->content = $this->update['callback_query']['message']['text']; // Retrieves the text content of the callback message.
         }
     }
 }
 