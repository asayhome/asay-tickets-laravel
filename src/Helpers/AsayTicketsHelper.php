<?php

namespace AsayHome\AsayTickets\Helpers;

class AsayTicketsHelper
{
    public static $status_new = 1;
    public static $status_waiting_reply = 2;
    public static $status_closed = 3;

    public static function getStatuses()
    {
        return collect([
            collect([
                'id' => self::$status_new,
                'name' => __('New'),
            ]),
            collect([
                'id' => self::$status_waiting_reply,
                'name' => __('Waiting reply'),
            ]),
            collect([
                'id' => self::$status_closed,
                'name' => __('Closed'),
            ]),
        ]);
    }

    public static function changeTicketStatus($ticket, $status)
    {
        $ticket->status = $status;
        if ($status == self::$status_closed) {
            $ticket->closed_at = date('Y-m-d H:i:s');
        }
        $ticket->save();
        //ToDo:: add statuses notifications
    }
}
