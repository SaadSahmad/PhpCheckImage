//dropDM

<?php
$image = "tonimage.jpg";
$path_parts = pathinfo($tonimage');
 
if(is_file($tonimage))
{
$extension = $path_parts['extension'];
if(($extension=="jpg")||($extension=="jpeg")||($extension=="png")||($extension=="gif"))
echo "tonimage existe";
}
else
{
echo "ton image n'existe pas";
}
{
    "type": "section",
    "text": {
      "type": "mrkdwn",
      "text": "Please select an option:"
    },
    "accessory": {
      "type": "static_select",
      "placeholder": {
        "type": "plain_text",
        "text": "Select an item",
        "emoji": true
      },
      "options": [
        {
          "text": {
            "type": "plain_text",
            "text": "Option 1",
            "emoji": true
          },
          "value": "option_1"
        },
        {
          "text": {
            "type": "plain_text",
            "text": "Option 2",
            "emoji": true
          },
          "value": "option_2"
        },
        {
          "text": {
            "type": "plain_text",
            "text": "Option 3",
            "emoji": true
          },
          "value": "option_3"
        }
      ]
    }
  }
  