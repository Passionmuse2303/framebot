<?php

namespace System\TeleCore\Traits;

trait Setters
{
    /**
     * Set the business connection ID for the message.
     *
     * @param mixed $business_connection_id The ID of the business connection.
     * @return Message Returns the current instance with the business connection ID set.
     */
    private function setBusinessConnectionId($business_connection_id)
    {
        $this->params['business_connection_id'] = $business_connection_id;
        return $this;
    }

    /**
     * Set the chat ID for the message.
     *
     * @param mixed $chat_id The ID of the chat.
     * @return Message Returns the current instance with the chat ID set.
     */
    private function setChatId($chat_id)
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }

    /**
     * Set the message thread ID for the message.
     *
     * @param mixed $message_thread_id The ID of the message thread.
     * @return Message Returns the current instance with the message thread ID set.
     */
    private function setMessageThreadId($message_thread_id)
    {
        $this->params['message_thread_id'] = $message_thread_id;
        return $this;
    }

    /**
     * Set the entities for the message.
     *
     * @param array $entities The entities associated with the message.
     * @return Message Returns the current instance with the entities set.
     */
    private function setEntities($entities)
    {
        $this->params['entities'] = $entities;
        return $this;
    }

    /**
     * Set the link preview options for the message.
     *
     * @param mixed $link_preview_options The link preview options for the message.
     * @return Message Returns the current instance with the link preview options set.
     */
    private function setLinkPreviewOptions($link_preview_options)
    {
        $this->params['link_preview_options'] = $link_preview_options;
        return $this;
    }

    /**
     * Set whether to disable notification for the message.
     *
     * @param bool $disable_notification Whether to disable notification.
     * @return Message Returns the current instance with the notification settings set.
     */
    private function setDisableNotification($disable_notification)
    {
        $this->params['disable_notification'] = $disable_notification;
        return $this;
    }

    /**
     * Set the reply parameters for the message.
     *
     * @param array $reply_parameters The parameters for replying to the message.
     * @return Message Returns the current instance with the reply parameters set.
     */
    private function setReplyParameters($reply_parameters)
    {
        $this->params['reply_parameters'] = $reply_parameters;
        return $this;
    }

    /**
     * Set the reply markup for the message.
     *
     * @param mixed $reply_markup The reply markup for the message.
     * @return Message Returns the current instance with the reply markup set.
     */
    private function setReplyMarkup($reply_markup)
    {
        $this->params['reply_markup'] = $reply_markup;
        return $this;
    }

    /**
     * Set whether to protect content for the message.
     *
     * @param bool $protect_content Whether to protect content.
     * @return Message Returns the current instance with the content protection settings set.
     */
    private function setProtectContent($protect_content)
    {
        $this->params['protect_content'] = $protect_content;
        return $this;
    }

    /**
     * Set the text content of the message.
     *
     * @param string $text The text content of the message.
     * @return Message Returns the current instance with the text content set.
     */
    private function setText($text)
    {
        $this->params['text'] = $text;
        return $this;
    }

    /**
     * Set the parse mode for the message.
     *
     * @param string $parse_mode The parse mode for the message.
     * @return Message Returns the current instance with the parse mode set.
     */
    private function setParseMode($parse_mode)
    {
        $this->params['parse_mode'] = $parse_mode;
        return $this;
    }

    /**
     * Set the chat ID of the sender.
     *
     * @param int $from_chat_id The chat ID of the sender.
     * @return Message Returns the current instance with the sender's chat ID set.
     */
    private function setFromChatId($from_chat_id)
    {
        $this->params['from_chat_id'] = $from_chat_id;
        return $this;
    }

    /**
     * Set the message ID.
     *
     * @param int $message_id The ID of the message.
     * @return Message Returns the current instance with the message ID set.
     */
    private function setMessageId($message_id)
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
}