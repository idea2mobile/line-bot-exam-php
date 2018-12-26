curl -v -X POST https://api.line.me/v2/bot/message/reply \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {channel access token}' \
-d '{
    "replyToken":"INIvvL/LfQydi/k3bEPnlCCFLo1E3qDDn7MlyXY7If/I5WQsLPC9YATcozqq5lkfRT9OJw5B/3wm+0vmXz6j05XPh0aIFTkn95/fUlWU/ZQ3Yf4qfGymsUtSYVj8gyfGn852VLrJ89IEwvNJHT0XKgdB04t89/1O/w1cDnyilFU=
",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}'
